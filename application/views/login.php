<?php

$_GLOBAL_MSG = '';
$valid_1='';
$valid_2='hidden="true"';
$valid_3='';
$valid_4='Konfirmasi';
$valid_5='printCaptcha';
$valid_6='VisualCaptcha';
if (isset($_POST['form_submit']) && $_POST['form_submit'] == '1') {
	if (!validCaptcha('frm_sample')) {
		$_GLOBAL_MSG = 'Item Konfirmasi Salah!';
	} else {
		$_GLOBAL_MSG = 'Silahkan Login';
		$valid_1='index/login';
		$valid_2='';
		$valid_3='required="required"';
		$valid_4='login';
		$valid_5='ok';
		$valid_6='PT MULTIBRATA ANUGERAH UTAMA';
	}
}

if (isset($_REQUEST['css_type']) && $_REQUEST['css_type'] == '1') {
	$_FORM_TYPE = 1;//-- Vertical
} else {
	$_FORM_TYPE = 0;//-- Horizontal
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width">

	<title>PENGUPAHAN PROYEK PT MAU</title>

	<meta name="keywords" content="visualcaptcha, visual, jquery captcha, captcha, mobile-friendly, better captcha, fancy captcha, captcha alternative, jquery, jquery ui, drag, draggable, demo, retina, accessibility">
	<meta name="description" content="A cool visual drag-and-drop captcha jQuery plugin. Mobile-friendly. Retina-ready. Accessible.">
	<meta name="author" content="emotionLoop">

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?= Asset::js(array('jquery.min.js','jquery-ui.mincaptcha.js')); ?>
	<?= Asset::css(array('captcha.css')); ?>
	<?= Asset::icon('mau.png'); ?>
	
</head>
<body>
	<div id="logo">
		<div class="header">PENGUPAHAN PROYEK</div>
		<div class="subheader">PT MULTIBRATA ANUGERAH UTAMA</div>
	</div>
	<div id="wrapper" class="type-<?php echo $_FORM_TYPE; ?>">
		<div id="content">
<?php
			if (!empty($_GLOBAL_MSG)) {
?>
			<h3><?php echo $_GLOBAL_MSG; ?></h3>
<?php
			}
?>
			<form name="frm_sample" id="frm_sample" method="post" action="<?=$valid_1;?>">
				<input type="hidden" name="form_submit" value="1" readonly="readonly" required="required"/>
				<input type="hidden" name="css_type" value="<?php echo $_FORM_TYPE; ?>" readonly="readonly" />
				<p><label for="username"<?=$valid_2;?>>Username:</label> <input type="text" name="username" id="username" value="" size="27" <?=$valid_2;?> <?=$valid_3;?>/></p>
				<p><label for="password"<?=$valid_2;?>>Password:&nbsp;</label> <input type="password" name="password" id="password" value="" size="27" <?=$valid_2;?> <?=$valid_3;?>/></p>
				<?php $valid_5('frm_sample',$_FORM_TYPE); ?>
				<p class="submit"><button type="submit" name="submit" id="submit"><?=$valid_4?></button></p>
			</form>
		</div>
		<div id="footer">
		<p><h3><?=$valid_6;?></h3></p>
		</div>
	</div>
</body>
</html>
<?php

//-- These functions aren't needed, but we recommend you to use them (or similar), so you can start/get multiple captcha instances with two simple functions.

function printCaptcha($formId = NULL, $type = NULL, $fieldName = NULL, $accessibilityFieldName = NULL) {
	require_once('assets/visualcaptcha.class.php');
	
	$visualCaptcha = new \visualCaptcha\captcha($formId,$type,$fieldName,$accessibilityFieldName);
	$visualCaptcha->show();
}

function validCaptcha($formId = NULL, $type = NULL, $fieldName = NULL, $accessibilityFieldName = NULL) {
	require_once('assets/visualcaptcha.class.php');
	
	$visualCaptcha = new \visualCaptcha\captcha($formId,$type,$fieldName,$accessibilityFieldName);
	return $visualCaptcha->isValid();
}
function ok($formId = NULL, $type = NULL, $fieldName = NULL, $accessibilityFieldName = NULL) {
}
?>