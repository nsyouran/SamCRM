<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home-SamCRM</title>

	<link rel="stylesheet" href="/SamCRM/Public/bs/css/bootstrap.css">

	<script src="/SamCRM/Public/js/jquery.min.js"></script>
	<script src="/SamCRM/Public/bs/js/bootstrap.min.js"></script>
	<script src="/SamCRM/Public/js/holder.min.js"></script>
</head>
<body style="padding: 10px;">
	<div style="position: absolute; top: 0;left: 0; right: 0; background: #C5C9CD;">
	<div style="width: 210mm; height: 297mm;background: white;margin: 50px auto;padding: 20mm 20mm;">
		<div id="rheader">
			<p class="line" style="text-align: right;"><b>QR-YH72-1（1）</b></p>
			<h3 style="text-align: center">安徽省计量科学研究院</h3>
			<h2 style="text-align: center"><b>数字心电图机检定记录</b></h2>
			<p class="line" style="text-align: right;">证书编号：_____________</p>
			<p class="line" style="text-align: right;">共_______页 第_______页</p>
		</div>

		<div id="basicinfo" style="margin-bottom: 10px;">
			<table style="width: 100%; margin-bottom: 5px;">
				<tr>
					<td style="min-width: 5em; max-width: 5em;">送检单位：</td>
					<td class="_" style="width:65%;"></td>
					<td style="min-width: 5em; max-width: 5em;">仪器名称：</td>
					<td class="_" style="width:35%;"></td>
				</tr>
			</table>
			<table style="width: 100%; margin-bottom: 5px;">
				<tr>
					<td style="min-width: 5em; max-width: 5em;">制造厂商：</td>
					<td class="_" style="width:40%;"></td>
					<td style="min-width: 5em; max-width: 5em;">规格型号：</td>
					<td class="_" style="width:30%;"></td>
					<td style="min-width: 5em; max-width: 5em;">出厂编号：</td>
					<td class="_" style="width:30%;"></td>
				</tr>
			</table>
			<table style="width: 100%; margin-bottom: 5px;">
				<tr>
					<td style="min-width: 5em; max-width: 5em;">检定依据：</td>
					<td class="_" style="width:80%;"></td>
					<td style="min-width: 5em; max-width: 5em;">环境温度：</td>
					<td class="_" style="width:10%;"></td>
					<td style="min-width: 5em; max-width: 5em;">相对湿度：</td>
					<td class="_" style="width:10%;"></td>
				</tr>
			</table>
		</div>

		<div id="measurement" style="margin-bottom: 10px;">
			<table class="bordered" style="width: 100%;">
				<tr style="text-align: center">
					<td>标准器名称</td>
					<td>型号规格</td>
					<td>出厂编号</td>
					<td>准确度</td>
					<td>有效日期</td>
				</tr>
				<tr style="text-align: center">
					<td>　</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>

		<div id="sub" style="margin-bottom: 10px;">
			<div id="sub1" style="margin-bottom: 10px;">
				<p><b>1、外观和工作正常性检查</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>检定结果</td>
						<td><span style="font-family: SimSun;">□</span>合格</td>
						<td><span style="font-family: SimSun;">□</span>不合格</td>
					</tr>
					<tr style="text-align: center">
						<td>说明</td>
						<td colspan="2"></td>
					</tr>
				</table>
			</div>

			<div id="sub2" style="margin-bottom: 10px;">
				<p><b>2、内定标电压误差</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>导联</td>
						<td>幅度/mm</td>
						<td>误差/%</td>
					</tr>
					<tr style="text-align: center">
						<td>Ⅰ</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>Ⅱ</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>Ⅲ</td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

			<div id="sub3" style="margin-bottom: 10px;">
				<p><b>3、输入电压范围</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>信号/mV</td>
						<td colspan="2">检定结果</td>
					</tr>
					<tr style="text-align: center">
						<td>0.5</td>
						<td><span style="font-family: SimSun;">□</span>合格</td>
						<td><span style="font-family: SimSun;">□</span>不合格</td>
					</tr>
					<tr style="text-align: center">
						<td>5</td>
						<td><span style="font-family: SimSun;">□</span>合格</td>
						<td><span style="font-family: SimSun;">□</span>不合格</td>
					</tr>
				</table>
			</div>

			<div id="sub4" style="margin-bottom: 10px;">
				<p><b>4、耐极化电压</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>检定结果</td>
						<td><span style="font-family: SimSun;">□</span>合格</td>
						<td><span style="font-family: SimSun;">□</span>不合格</td>
					</tr>
				</table>
			</div>

			<div id="sub5" style="margin-bottom: 10px;">
				<p><b>5、加权系数误差</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>导联</td>
						<td>幅度/mm</td>
						<td>误差/%</td>
					</tr>
					<tr style="text-align: center">
						<td>aVR</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>aVL</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>aVF</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>V1</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>V2</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>V3</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>V4</td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>V5</td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

			<div id="sub6" style="margin-bottom: 10px;">
				<p><b>6、内部噪声电平</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>检定结果</td>
						<td>各导联均不大于　　　μV</td>
					</tr>
				</table>
			</div>

			<div id="sub7" style="margin-bottom: 10px;">
				<p><b>7、波形识别能力</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>检定结果</td>
						<td><span style="font-family: SimSun;">□</span>合格</td>
						<td><span style="font-family: SimSun;">□</span>不合格</td>
					</tr>
				</table>
			</div>

			<div id="sub8" style="margin-bottom: 10px;">
				<p><b>8、幅度测量误差</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>幅度名称</td>
						<td>导联Ⅰ：测量值/mm</td>
						<td>误差/%</td>
						<td>导联Ⅱ：测量值/mm</td>
						<td>误差/%</td>
					</tr>
					<tr style="text-align: center">
						<td>A1：ECG信号峰-峰值幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A2：P波幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A3：P波谷幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A4：P′波幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A5：Q波幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A6：R波幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A7：R波谷幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A8：R′波幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A9：ST段水平</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>A10：T波幅值</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

			<div id="sub9" style="margin-bottom: 10px;">
				<p><b>9、时间间隔测量误差</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>间期（波宽）名称</td>
						<td>导联Ⅰ：测量值/mm</td>
						<td>误差/%</td>
						<td>导联Ⅱ：测量值/mm</td>
						<td>误差/%</td>
					</tr>
					<tr style="text-align: center">
						<td>T1：RR间隔</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T2：P波</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T3：QRS复合波</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T4：Q波</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T5：R波</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T6：PQ(PR)间隔</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T7：QT间隔</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T8：内部偏移间隔QRmax</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T9：DAV QR′max</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T10：T波</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>T11：T波起始至P波结束</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

			<div id="sub10" style="margin-bottom: 10px;">
				<p><b>10、幅频特性</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>信号频率/Hz</td>
						<td style="width: 8%">0.5</td>
						<td style="width: 8%">5</td>
						<td style="width: 8%">10</td>
						<td style="width: 8%">15</td>
						<td style="width: 8%">25</td>
						<td style="width: 8%">30</td>
						<td style="width: 8%">40</td>
						<td style="width: 8%">50</td>
						<td style="width: 8%">60</td>
						<td style="width: 8%">75</td>
					</tr>
					<tr style="text-align: center">
						<td>信号幅度/mm</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

			<div id="sub11" style="margin-bottom: 10px;">
				<p><b>11、时间常数：</b>______________s</p>
			</div>

			<div id="sub12" style="margin-bottom: 10px;">
				<p><b>12、心率测量误差</b></p>
				<table class="bordered">
					<tr style="text-align: center">
						<td>HR测试信号</td>
						<td>标称值/（次/min）</td>
						<td>测量值/（次/min）</td>
					</tr>
					<tr style="text-align: center">
						<td>HR-1</td>
						<td>60</td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>HR-2</td>
						<td>60</td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>HR-3</td>
						<td>30</td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>HR-4</td>
						<td>120</td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>HR-4</td>
						<td>180</td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>HR-4</td>
						<td>240</td>
						<td></td>
					</tr>
					<tr style="text-align: center">
						<td>HR-4</td>
						<td>300</td>
						<td></td>
					</tr>
				</table>
			</div>

			<div id="sub13" style="margin-bottom: 10px;">
				<p><b>13、共模抑制比：</b>______________dB</p>
			</div>

			<div id="sub14" style="margin-bottom: 10px;">
				<p><b>14、检定结论：</b>______________</p>
			</div>

		</div>

		<div id="rfoot" tyle="margin-bottom: 10px;">
			<table style="width: 100%; margin-bottom: 5px;">
				<tr>
					<td style="min-width: 4em; max-width: 4em;">检定员：</td>
					<td class="_" style="width:30%;"></td>
					<td style="min-width: 4em; max-width: 4em;">核验员：</td>
					<td class="_" style="width:30%;"></td>
					<td style="min-width: 3em; max-width: 3em;">日期：</td>
					<td class="_" style="width:20%;"></td>
					<td style="min-width: 1em; max-width: 1em;">年</td>
					<td class="_" style="width:10%;"></td>
					<td style="min-width: 1em; max-width: 1em;">月</td>
					<td class="_" style="width:10%;"></td>
					<td style="min-width: 1em; max-width: 1em;">日</td>
				</tr>
			</table>
			<table style="width: 100%; margin-bottom: 5px;">
				<tr>
					<td style="min-width: 5em; max-width: 5em;">检定地点：</td>
					<td style="min-width: 5em; max-width: 5em;"><span style="font-family: SimSun;">□</span>本院：</td>
					<td class="_" style="width:50%;"></td>
					<td style="min-width: 5em; max-width: 5em;"><span style="font-family: SimSun;">□</span>现场：</td>
					<td class="_" style="width:50%;"></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<style>
	p.line{
		margin: 5px;
	}
	._{
		border-bottom: 1px solid black;
	}
	table.bordered{
		width: 100%;
	}
	table.bordered tr td{
		border: 1px solid black;
	}
</style>
</body>
</html>