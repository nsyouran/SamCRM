<?
	function db_add($context,$tab){
		$table = M($tab);
		if($table->create()){
			$rst = $table->add();
			if($rst){
				$context->success('新增成功',$tab);
			}
			else{
				$context->error('新增失败');
			}
		}else{
			$context->error('新增失败');
		}
	}
?>