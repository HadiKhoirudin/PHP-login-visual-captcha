/**
 * visualCaptchaHTML class by emotionLoop - 2013.03.28
 *
 * This class handles the JS for the main visualCaptcha class.
 *
 * This license applies to this file and others without reference to any other license.
 *
 * @author emotionLoop | http://emotionloop.com
 * @link http://visualcaptcha.net
 * @package visualCaptcha
 * @license GNU GPL v3
 * @version 4.0.3
 */
eval(function(p, a, c, k, e, d) {
  e = function(c) {
    return (c < a ? '' : e(c / a)) + String.fromCharCode(c % a + 161)
  };
  if (!''.replace(/^/, String)) {
    while (c--) {
      d[e(c)] = k[c] || e(c)
    }
    k = [function(e) {
      return d[e]
    }];
    e = function() {
      return '\[\xa1-\xff]+'
    };
    c = 1
  };
  while (c--) {
    if (k[c]) {
      p = p.replace(new RegExp(e(c), 'g'), k[c])
    }
  }
  return p
}('(¬($){¦ ¿=®;¦ Ç=®;¦ Í=®;¦ ¨=þ.÷.î();§(¨.©(\'ï\')!==-1||¨.©(\'ò\')!==-1||¨.©(\'¢¢\')!==-1||¨.©(\'ú\')!==-1||¨.©(\'Ð ù\')!==-1||¨.©(\'Ð ø\')!==-1||¨.©(\'ö\')!==-1||¨.©(\'û\')!==-1||¨.©(\'ü\')!==-1||¨.©(\'¢¡\')!==-1||¨.©(\'ÿ\')!==-1||¨.©(\'õ\')!==-1||¨.©(\'ý\')!==-1||¨.©(\'í\')!==-1||¨.©(\'ó\')!==-1){¿=È}§(¤.Ñ&&¤.Ñ>1){Ç=È}ñ{¦ ä=ô.ð(\'Ó\');§(ä.¢½){Í=È}}¢¶(e){}§(Ç){$(\'¢.¡-£ ³\').Ô(¬(¢µ,¹){§(!$(¹).Å(\'Ë\'))²;¦ Î=$(¹).Å(\'Ë\').¢´(/(.+)(\\.\\w{3,4})$/,"$1@¢²$2");$.¢³({¢·:Î,µ:"¢¸",¢¼:¬(){$(¹).Å(\'Ë\',Î)}})});$(\'¢.¡-£ > ¢.¡-«\').¢»(\'¢º\')}§(!Í){$(\'¢.¡-£ > .¡-°\').¢¹()}Á{$(\'¢.¡-£ > p.¡-° a\').è(\'Õ å\',¬(º){º.¢±();§(!$(\'¢.¡-£ > ¢.¡-°\').¢°(\':¢¨\')){$(\'¢.¡-£ > ¢.¡-° > Ó\').Ô(¬(){ª.¢§();ª.¢¦()});§(!$(\'#\'+¤.¥.a).±){¦ Ï=\'<Ê µ="¢¤" Ì="\'+¤.¥.a+\'" Â="\'+¤.¥.a+\'" ­="">\';$(\'¢.¡-£ > ¢.¡-° > p\').¢¥(Ï)}}$(\'¢.¡-£ > p.¡-¢©\').´().½(\'¸\');$(\'¢.¡-£ > ¢.¡-¯\').´().½(\'¸\');$(\'¢.¡-£ > ¢.¡-«\').´().½(\'¸\');$(\'¢.¡-£ > ¢.¡-°\').´().½(\'¸\')})}§(!¿){$(\'¢.¡-£ > ¢.¡-¯ > ³\').À({¢ª:0.6,¢£:\'¢®\'});$(\'¢.¡-£ > ¢.¡-¯\').·({Ò:¬(º,»){§(!$(\'#\'+¤.¥.n).±){² ®}§($(\'#\'+¤.¥.n).ê()==$(».À).¾(\'­\')){$(\'#\'+¤.¥.n).ë()}$(\'¢.¡-£ > ¢.¡-«\').·(\'¢­\')},ì:\'¢.¡-£ > ¢.¡-¯ > ³\'});$(\'¢.¡-£ > ¢.¡-«\').·({Ò:¬(º,»){§($(\'#\'+¤.¥.n).±){² ®}¦ ¼=\'<Ê µ="Ú" Ì="\'+¤.¥.n+\'" Â="\'+¤.¥.n+\'" ¶="¶" ­="\'+$(».À).¾(\'­\')+\'">\';$(\'#\'+¤.¥.f).ã(¼);$(ª).·(\'¢«\')},ì:\'¢.¡-£ > ¢.¡-¯ > ³\'})}Á{$(\'¢.¡-£ > ¢.¡-¯ > ³\').è(\'Õ å\',¬(){¦ Ù=$(\'¢.¡-£ > ¢.¡-«\').æ().Æ-5;¦ Ü=$(\'¢.¡-£ > ¢.¡-«\').æ().É;¦ Ø=$(\'¢.¡-£ > ¢.¡-«\').ç();¦ á=$(\'¢.¡-£ > ¢.¡-«\').é();¦ Ö=$(ª).ç();¦ à=$(ª).é();§($(ª).Ä(\'Ã\')==\'ß\'){§(!$(\'#\'+¤.¥.n).±){² ®}§($(\'#\'+¤.¥.n).ê()==$(ª).¾(\'­\')){$(\'#\'+¤.¥.n).ë()}$(ª).Ä({\'Ã\':\'¢¬\',\'Æ\':\'â\',\'É\':\'â\'})}Á{§($(\'#\'+¤.¥.n).±){² ®}¦ ¼=\'<Ê µ="Ú" Ì="\'+¤.¥.n+\'" Â="\'+¤.¥.n+\'" ¶="¶" ­="\'+$(ª).¾(\'­\')+\'">\';$(\'#\'+¤.¥.f).ã(¼);¦ Ý=×.Û(Ù+(Ø/2)-(Ö/2));¦ Þ=×.Û(Ü+(á/2)-(à/2));$(ª).Ä({\'Ã\':\'ß\',\'Æ\':Ý,\'É\':Þ})}})}})(¢¯);', 95, 124, 'eL|div|captcha|window|vCVals|var|if|uAgent|indexOf|this|where2go|function|value|false|possibilities|accessibility|length|return|img|stop|type|readonly|droppable|fast|element|event|ui|validElement|slideToggle|data|isMobile|draggable|else|id|position|css|attr|left|isRetina|true|top|input|src|name|supportsAudio|newImageSRC|validAccessibleElement|windows|devicePixelRatio|drop|audio|each|click|iwDim|Math|wDim|xPos|hidden|round|yPos|xPos2Go|yPos2Go|absolute|ihDim|hDim|auto|append|audioElement|touchstart|offset|width|on|height|val|remove|accept|smartphone|toLowerCase|iphone|createElement|try|ipad|mobile|document|symbian|bada|userAgent|ce|phone|android|meego|palm|pocketpc|navigator|nokia|blackberry|ipod|revert|text|after|play|load|visible|explanation|opacity|disable|relative|enable|invalid|jQuery|is|preventDefault|2x|ajax|replace|index|catch|url|HEAD|hide|retina|addClass|success|canPlayType'.split('|'), 0, {}))
