<?php
/**
 * visualCaptchaHTML class by emotionLoop - 2013.03.28
 *
 * This class handles the HTML for the main visualCaptcha class.
 *
 * This license applies to this file and others without reference to any other license.
 *
 * @author emotionLoop | http://emotionloop.com
 * @link http://visualcaptcha.net
 * @package visualCaptcha
 * @license GNU GPL v3
 * @version 4.0.3
 */
namespace visualCaptcha;

class html {
	
	public function __construct() {
	}
	
	public static function get( $type, $fieldName, $accessibilityFieldName, $formId, $captchaText, $options, $optionsProperties, $jsFile, $cssFile ) {
		$html = '';
		
		$limit = count($options);
		
		ob_start();
?>
<script>
window.vCVals = {
	'f': '<?php echo $formId; ?>',
	'n': '<?php echo $fieldName; ?>',
	'a': '<?php echo $accessibilityFieldName; ?>'
};
</script>
<link rel="stylesheet" href="<?php echo $cssFile; ?>">
<div class="eL-captcha type-<?php echo $type; ?> clearfix">
	<p class="eL-explanation type-<?php echo $type; ?>"><?php echo '<align="center">Sebelum Anda dapat login, Silahkan konfirmasikan bahwa Anda adalah Manusia. <br> Untuk mengkonfirmasikannya letakan '; ?> <strong><?php echo $captchaText; ?></strong> <?php echo 'kedalam lingkaran di bawah ini, dan klik tombol konfirmasi!'; ?>.</p>
	<div class="eL-possibilities type-<?php echo $type; ?> clearfix">
<?php
		for ($i=0;$i<$limit;$i++) {
			$name = $options[$i];
			$image = $optionsProperties[$name][0];
			$text = $optionsProperties[$name][1];
?>
		<img src="<?php echo $image; ?>" class="vc-<?php echo $name; ?>" data-value="<?php echo $name; ?>" alt="" title="">
<?php
		}
?>
	</div>
	<div class="eL-where2go type-<?php echo $type; ?> clearfix">
	</div>
</div>
<script src="<?php echo $jsFile; ?>"></script>
<?php
		$html = ob_get_clean();
		return $html;
	}
}
?>