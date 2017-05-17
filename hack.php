<!DOCTYPE html>
<html>
<head>
	<title>作业下载程序</title>
</head>
<body style="text-align: center;">
	<form action="hack.php" method="post" style="font-size: 25px;">
		<input type="checkbox" name="number[]" id="1" value="1"><label for="1">实验一</label><br>
		<input type="checkbox" name="number[]" id="2" value="2"><label for="2">实验二</label><br>
		<input type="checkbox" name="number[]" id="3" value="3"><label for="3">实验三</label><br>
		<input type="checkbox" name="number[]" id="4" value="4"><label for="4">实验四</label><br>
		<input type="checkbox" name="number[]" id="5" value="5"><label for="5">实验五</label><br>
		<input type="checkbox" name="number[]" id="6" value="6"><label for="6">实验六</label><br>
		<input type="checkbox" name="number[]" id="7" value="7"><label for="7">实验七</label><br>
		<input type="checkbox" name="number[]" id="8" value="8"><label for="8">实验八</label><br><br>
		<input type="submit" value="下载" style="font-size: 20px; padding-left: 10px; padding-right: 10px;">
	</form>
</body>
</html>


<?php 

if(isset($_POST['number']))
{
	echo '<br><br>';
	$number = $_POST['number'];
	foreach ($number as $val) {
		echo "尝试下载实验{$val}<br>";
		download($val);
	}
}

function download($number)
{
	$nums = array(
		'2015214251',
		'2015214236',
		'2015214242',
		'2015214253',
		'2015214235',
		'2015214254',
		'2015214239',
		'2015214246',
		'2015214237',
		'2015214234',
		'2015214252',
		'2015214248',
		'2015214250',
		'2015214247',
		'2015214245',
		'2015214241',
		'2015214243',
		'2015214244',
		'2015214240',
		'2015214249',
		'2015214238',
		'2015214268',
		'2015214272',
		'2015214270',
		'2015214262',
		'2015214277',
		'2015214278',
		'2015214264',
		'2015214274',
		'2015214275',
		'2015214276',
		'2015214271',
		'2015214263',
		'2015214293',
		'2015214288',
		'2015214291',
		'2015214295',
		'2015214294',
		'2015214286',
		'2015214266',
		'2015214261',
		'2015214265',
		'2015214273',
		'2015214267',
		'2015214269',
		'2015214297',
		'2015214289',
		'2015214292',
		'2015214302',
		'2015214285',
		'2015214299',
		'2015214298',
		'2015214287',
		'2015214300',
		'2015214301',
		'2015214290',
		'2015214296',
		'2015214317',
		'2015214326',
		'2015214310',
		'2015214323',
		'2015214312',
		'2015214318',
		'2015224258',
		'2015224255',
		'2015224260',
		'2015224259',
		'2015224257',
		'2015224256',
		'2015214322',
		'2015214314',
		'2015214319',
		'2015214315',
		'2015214324',
		'2015214321',
		'2015224279',
		'2015224281',
		'2015224280',
		'2015224282',
		'2015224284',
		'2015224283',
		'2015214320',
		'2015214313',
		'2015214325',
		'2015214309',
		'2015214316',
		'2015214311',
		'2015224307',
		'2015224305',
		'2015224304',
		'2015224308',
		'2015224306',
		'2015224303',
		'2015224330',
		'2015224331',
		'2015224328',
		'2015224329',
		'2015224332',
		'2015224327',
		'2015224333'
	);

	$names = array(
		'延发平',
		'张晓东',
		'李嘉华',
		'杨炳烨',
		'王凯伦',
		'王伟通',
		'刘连',
		'任新振',
		'刘宇翔',
		'邓俊兵',
		'李永杰',
		'刘亿龙',
		'刘中元',
		'申子良',
		'徐朔',
		'邬成浩',
		'林宗涛',
		'刘博开',
		'王唯丞',
		'安忠明',
		'张智博',
		'龚超伟',
		'马宇龙',
		'董埕丞',
		'张硕耕',
		'曹运鸿',
		'李子凡',
		'张博宇',
		'周云',
		'陈凌宇',
		'陈立攀',
		'焦晗',
		'孙绳宇',
		'张鑫',
		'胡家麟',
		'段连鹏',
		'焦中昊',
		'蔡志梅',
		'张超',
		'章雨杭',
		'王雪峰',
		'王冠群',
		'刘霖',
		'戴张磊',
		'李德帅',
		'寇兆奎',
		'刘桐旭',
		'张洪睿',
		'杨波',
		'马天昊',
		'朱立豪',
		'郭雷',
		'曹兴鼎',
		'胡谦',
		'李艾青',
		'孙明雨',
		'姜凯元',
		'江涛',
		'唐学俊',
		'谷田',
		'李鑫',
		'张鑫',
		'徐志远',
		'唐慧媛',
		'石建鑫',
		'俞海涓',
		'张润萍',
		'白月娇',
		'石可欣',
		'董泽凯',
		'朱江',
		'陈文昕',
		'李咏华',
		'周洋',
		'王东浩',
		'麻一帆',
		'关馨雨',
		'翟祎笑',
		'杨祉坤',
		'何云莲',
		'张冠莹',
		'黄祖强',
		'季天爵',
		'李秋雨',
		'相宁',
		'于新阳',
		'王琛',
		'陈玉钊',
		'王琳',
		'孙雅楠',
		'周娅娅',
		'赵雪梅',
		'孙齐浓',
		'王诺',
		'袁丽伟',
		'孙宏波',
		'张逸晨',
		'韦莹莹',
		'张金璐',
		'唐丽'
	);

	for($i = 0, $len = count($nums); $i < $len; $i++)
	{
		$url = "http://222.27.161.245/sybg/report/.net/{$number}/{$names[$i]}-{$nums[$i]}.doc";
		echo "<iframe style='display:none' src='{$url}'></iframe>";
		echo "<iframe style='display:none' src='{$url}x'></iframe></td>";
	}
}
?>