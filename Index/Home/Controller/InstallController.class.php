<?php
namespace Home\Controller;
use Org\Util\ArrayList;
use Think\Controller;
class InstallController extends Controller {
    public function index(){
		$info['PHP_OS'] = PHP_OS;
		$info['PHP_OS_C'] = 1;

		$info['PHP_VERSION'] = PHP_VERSION;
		$info['PHP_VERSION_C'] = PHP_VERSION > '5.3'?1:0;

		$info['mysql'] = function_exists (mysql_close)?"支持":"不支持";
		$info['mysql_c'] = function_exists (mysql_close)?1:0;

		$info['ok'] = $info['PHP_OS_C'] && $info['PHP_VERSION_C'] && $info['mysql_c'] ? 1:0;

		$this->assign("info",$info);
        $this->show();
    }

	public function next(){
		if(isset($_POST['submit'])){
			$mysql_server_name = $_POST['dbhost']; // 数据库服务器名称
			$mysql_username    = $_POST['dbuser']; // 连接数据库用户名
			$mysql_password    = $_POST['dbpass']; // 连接数据库密码
			$mysql_database    = $_POST['dbname']; // 数据库的名字
			$mysql_port   = $_POST['dbport']?$_POST['dbport']:3306; // 数据库的名字

			// 连接到数据库
			$conn=mysql_connect($mysql_server_name, $mysql_username, $mysql_password);

			if (!$conn){
				$this->error('无法连接数据库，请修复后重试');
			}

			$sql = "drop database `$mysql_database`";
			if(!mysql_query($sql)){
				//$this->error("已存在数据库 $mysql_database，且无法删除");
			}

			$sql = "create database if not exists `$mysql_database`";
			if(!mysql_query($sql)){
				$this->error("无法创建 $mysql_database 数据库");
			}

			mysql_select_db($mysql_database);
			mysql_set_charset('utf8');

			$sql=file_get_contents(getcwd()."\Public\db\db.sql"); //把SQL语句以字符串读入$sql
			$arr=explode("\n",$sql);  // 删除无用行
			$sql = "";
			foreach($arr as $i){ //遍历数组
				$pre = substr(trim($i),0,2 );
				if(!($pre=="" || $pre=="--" || $pre=="/*")){
					$sql = $sql.$i;
				}
			}
			$arr=explode(";",$sql); //分解成单条语句
			foreach ($arr as $i){
				if($i != ""){
					$i = $i.";";
					//mysql_query($i) or die("+$i+".mysql_error());
					if(!mysql_query($i)){ //执行SQL语句
						$this->error('安装失败，请重试');
					}
				}
			}

			$fp = fopen(getcwd()."\Index\Home\conf\config.php",'w');
			$config = "<?php
				return array(
					'DB_TYPE'               =>  'mysql',
					'DB_HOST'               =>  '$mysql_server_name',
					'DB_NAME'               =>  '$mysql_database',
					'DB_USER'               =>  '$mysql_username',
					'DB_PWD'                =>  '$mysql_password',
					'DB_PORT'               =>  '$mysql_port',
				);
			";
			fwrite($fp, $config);
			fclose($fp);

			$this->success("安装成功",U("Login/index"));
			exit();
		}
		$this->show();
	}

	public function backup(){
		echo "backup";
	}
}