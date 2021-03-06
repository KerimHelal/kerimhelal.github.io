<!DOCTYPE html>
<html class="background-100-e">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Fun House</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/animation.css" />
<link rel="stylesheet" href="css/slick.css" />
<link rel="stylesheet" href="css/funhouse-web.css" />
<link rel="stylesheet" href="css/bootstrap-custom.min.css" />
<link rel="stylesheet" href="css/style.min.css" />
<link rel="stylesheet" href="css/custom.css" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
</head>
<body class="state1 background-100-e">
<?php
$versionText='';
$fh = fopen('fhloader/version.txt','r');
while ($line = fgets($fh)) {
 $versionText=$line;
}
fclose($fh);
?>
<main>
  <div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">Go To <span class="highlight">Top</span></a></div>
  
  <!-- BEGIN: Top menu -->
  
  <nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
    <div class="container">
      <div class="navbar-header"> <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a> <a class="navbar-brand" href=""><img width="64" height="64" src="images/logo.png" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home" class="hover-effect"><i class="fa fa-home"></i></a></li>
          <li><a href="#store" class="hover-effect">Store</a></li>
          <li><a href="#about" class="hover-effect">Featured</a></li>
          <li><a href="#support" class="hover-effect">Support</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END: Top menu -->
  <ul id="dot-scroll" class="colors-e background-solid">
  </ul>
  <div class="overlay-window gallery-overlay colors-g background-95-g" data-overlay-zoom="#work .content">
    <div class="overlay-control background-90-b"> <a class="previos" href="#"></a> <a class="next" href="#"></a> <a class="cross" href="#"></a> </div>
    <div class="overlay-view"></div>
    <ul class="loader">
      <li class="background-highlight-e"></li>
      <li class="background-highlight-e"></li>
      <li class="background-highlight-e"></li>
    </ul>
  </div>
  <div class="overlay-window map-overlay colors-g background-95-g">
    <div class="overlay-control background-20-b"> <a class="cross" href="#"></a> </div>
    <div class="overlay-view">
      <div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
        <div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
        <div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
      </div>
    </div>
  </div>
  <div class="gate colors-e background-solid">
    <div class="gate-bar background-heading-e"></div>
    <ul class="loader">
      <li class="background-heading-e"></li>
      <li class="background-heading-e"></li>
      <li class="background-heading-e"></li>
    </ul>
  </div>
  <!-- BEGIN: Page content --> 
  <!--<div class="video-bg" data-video="images/video.mp4" data-mute="yes" data-volume="50" data-alternative="images/backgroundbg.jpg"></div>-->
  
  <section id="home">
    <div class="homebannerHeight"></div>
    <div class="view"> <img class="bg" src="images/picjumbo.com_IMG_5790.jpg" />
      <div class="content pane">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 colors-b">
              <div class="row">
                <div class="col-xs-12 banner-cell">
                  <h3 class="light-font-weight">8/21 PBE Update <br />
                    <span class="invisible">Change Log</span></h3>
                </div>
                <div class="col-xs-12 success heading-b banner-cell"> <a href="http://www.surrenderat20.net/2015/08/826-pbe-update.html?utm_source=feedburner&utm_medium=feed&utm_campaign=Feed%3A+SurrenderAt20+%28surrender+at+20%29" target="_blank">Read More</a></div>
              </div>
            </div>
            <div class="col-md-4 colors-c">
              <div class="row">
                <div class="col-xs-12 banner-cell">
                  <h3 class="light-font-weight"><a href="javascript:;" data-toggle="modal" data-target=".Changelog">Change Log <br />
                    <span class="invisible">Change Log</span></a></h3>
                </div>
                <div class="col-xs-12 warning heading-c banner-cell"> <a href="javascript:;" data-toggle="modal" data-target=".Changelog">Read More</a></div>
              </div>
            </div>
            <div class="col-md-4 colors-d">
              <div class="row">
                <div class="col-xs-12 banner-cell">
                  <h3 class="light-font-weight">FH Loader V <?php echo $versionText;?><br />
                    Download</h3>
                </div>
                <div class="col-xs-12 info heading-d banner-cell"> <a href="download.php">Download</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section> </section>
  <section id="store">
    <div class="view">
      <div class="content colors-e background-solid">
        <div class="container">
          <h1 class="text-center">STORE</h1>
          <div class="row">
            <div class="col-md-3 col-sm-6  col-xs-6">
              <div class="hover-overlay"> <img alt="Mike Johnson" src="images/1.jpg" title="Mike Johnson" class="fluid-width"> <a href="javascript:;" data-toggle="modal" data-target=".MainlinePopup">
                <div class="overlay background-90-b">
                  <div>
                    <p class="text-center text-uppercase heading-b fontsizethirty"> Free </p>
                    <div class="separator-small"></div>
                    <p class="text-center">Details </p>
                  </div>
                </div>
                </a> </div>
              <div class="caption">
                <p> <span class="title">Mainline Series</span> <br/>
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6  col-xs-6">
              <div class="hover-overlay"> <img alt="Jessica Specter" src="images/2-1.jpg" title="Jessica Specter" class="fluid-width"> <a href="javascript:;" data-toggle="modal" data-target=".KatarinaPopup">
                <div class="overlay background-90-b">
                  <div>
                    <p class="text-center text-uppercase heading-b fontsizethirty"> $25 </p>
                    <div class="separator-small"></div>
                    <p class="text-center">Details </p>
                  </div>
                </div>
                </a> </div>
              <div class="caption">
                <p> <span class="title">Jungle Series</span> <br/>
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6  col-xs-6">
              <div class="hover-overlay"> <img alt="Lynda Smith" src="images/3.jpg" title="Lynda Smith" class="fluid-width"> <a href="javascript:;" data-toggle="modal" data-target=".JunglePopup">
                <div class="overlay background-90-b">
                  <div>
                    <p class="text-center text-uppercase heading-b fontsizethirty"> $25 </p>
                    <div class="separator-small"></div>
                    <p class="text-center">Details </p>
                  </div>
                </div>
                </a> </div>
              <div class="caption">
                <p> <span class="title">Free Scripts</span> <br/>
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6  col-xs-6">
              <div class="hover-overlay"> <img alt="Lynda Smith" src="images/4.jpg" title="Lynda Smith" class="fluid-width"> <a href="javascript:;" data-toggle="modal" data-target=".TalonPopup">
                <div class="overlay background-90-b">
                  <div>
                    <p class="text-center text-uppercase heading-b fontsizethirty"> $25 </p>
                    <div class="separator-small"></div>
                    <p class="text-center">Details </p>
                  </div>
                </div>
                </a> </div>
              <div class="caption">
                <p> <span class="title">Soon tm</span> <br/>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="background-solidFeature">
    <div class="view">
      <div class="content colors-h">
        <div class="container">
          <h1 class="text-center">Featured </h1>
          <div class="col-md-6 tenMB"> <a target="_blank" href="http://elopower.com/" class="angled-img">
            <div class="img"> <img src="images/feature1.jpg" alt=""> </div>
            </a>
            <h3><span class="highlight">Featured</span></h3>
          </div>
          <div class="col-md-6 tenMB"> <a target="_blank" href="https://docs.google.com/forms/d/1unFjzPq9nM9pFHN9whqpfqUprL7SivkGIlUoBEwPhv0/viewform" class="angled-img">
            <div class="img"> <img src="images/feature2.jpg" alt=""> </div>
            </a>
            <h3><span class="highlight">Beta</span> Application</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="support" class="background-solidsupport">
    <div class="view">
      <div class="content colors-h">
        <div class="container">
          <h1 class="text-center">Support</h1>
          <div class="row icon-set">
            <div class="col-md-4 text-center">
              <p> <a href="javascript:;" data-toggle="modal" data-target=".MessagetheTeam"><i class="fa fa-envelope circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i></a> </p>
              <p class="title"><span class="underline-text">Message The Team</span></p>
            </div>
            <div class="col-md-4 text-center">
              <p> <a href="javascript:;" data-toggle="modal" data-target=".CommonProblemsandSolutions"><i class="fa fa-question circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i></a> </p>
              <p class="title"><span class="underline-text" >Common Problems and Solutions</span></p>
            </div>
            <div class="col-md-4 text-center">
              <p> <a href="index.html" target="_blank"><i class="fa fa-download circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i></a> </p>
              <p class="title"><span class="underline-text">FH Quick User Guide</span></p>
            </div>
          </div>
        </div>
      </div>
    </div><br />
  </section>
</main>
<style> 

#home {
    	text-shadow: 0 1px 2px rgba(0,0,0,0.5);
	box-shadow: 0 5px 15px rgba(0,0,0,0.5); padding-bottom:0px !important;
} 
</style>
<script src="js/less.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ripples.js"></script> 
<script src="js/tween.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/SmoothScroll.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/jqBootstrapValidation-1.3.7.min.js"></script> 
<script src="js/slick.min.js"></script> 
<script src="js/jquery.shuffle.min.js"></script> 
<script src="js/jquery.lettering.js"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/jquery.textillate.js"></script> 
<script src="js/prism.js"></script> 
<script>
$(document).ready(function() {
	try {
		 $('#home').ripples({
			resolution: 612,
			dropRadius: 90, //px
			perturbance: 0.04,
			height:1000,
		}); 
		 
	}
	catch (e) {
		$('.error').show().text(e);
	}

	$('.js-ripples-disable').on('click', function() {
		$('body, #home').ripples('destroy');
		$(this).hide();
	});

	$('.js-ripples-play').on('click', function() {
		$('body, #home').ripples('play');
	});

	$('.js-ripples-pause').on('click', function() {
		$('body, #home').ripples('pause');
	});

	// Automatic drops
	/*setInterval(function() {
		var $el = $('#home');
		var x = Math.random() * $el.outerWidth();
		var y = Math.random() * $el.outerHeight();
 		var strength = 0.04 + Math.random() * 0.04;

		$el.ripples('drop', x, y, dropRadius, strength);
	}, 400);*/
});
</script> 
<script>
		(function()
		{
			var disableMobileAnimations = true;
			var isWin = navigator.appVersion.indexOf("Win") !== -1;
			if (isWin) $('html').addClass('win');
			var ua = navigator.userAgent.toLowerCase();
			var isChrome = ua.indexOf('chrome') > -1;
			if (isChrome) $('html').addClass('chrome');
			var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
			if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
			var isSafari = !isChrome && ua.indexOf('safari') !== -1;
			if (isSafari) $('html').addClass('safari');
			var isMobile = Modernizr.touch;
			if (isMobile)
			{
				$('html').addClass('mobile');
				if (disableMobileAnimations) $('html').addClass('poor-browser');
			}
			else
			{
				$('html').addClass('non-mobile');
			}
			if (isWin && isSafari)
			{
				$('html').addClass('flat-animation');
			}
		})();
		</script> 
<script src="js/script-bundle.js"></script> 
<script>
		if (Function('/*@cc_on return document.documentMode===9@*/')())
		{
			$('html').addClass('ie9');
		}
		if (Function('/*@cc_on return document.documentMode===10@*/')())
		{
			$('html').addClass('ie10');
		}
		if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
		{
			$('html').addClass('ie11');
		}
		</script> 

<!-- change log popup-->

<div class="modal fade Changelog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="colorwhite">×</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">FH Loader Change Log</h4>
      </div>
      <div class="modal-body">
        <main class="popup_content">
          <section id="0" class="090">
            <h1>0.90</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Now you can select the Default distance to ignore a selected target (in FH Global Settings)</li>
              <li>Cleaned some code</li>
              <li>Fixed a really random bug chat spam at load script</li>
              <li>Disabled internally DPrediction &amp; HPrediction until authors fix the bugs</li>
              <li>Minor bugfixes and some improvements on some FH champions</li>
            </ul>
          </section>
          <section id="1" class="085-86-87-88-89">
            <h1>0.85-86-87-88-89</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed some minor problems with encoder &amp; compatibility issues</li>
            </ul>
            <h4>Rengar</h4>
            <ul class="Rengar">
              <li>Fixed minor bugs</li>
            </ul>
          </section>
          <section id="2" class="084">
            <h1>0.84</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Added Titanic Hydra + reset AA after proc it on Rollin'</li>
              <li>Fixed a bug casting heal at base</li>
              <li>Added HPrediction and DPrediction support!</li>
              <li>Updated guide, affecting target selector &amp; predictions part: http://forum.botoflegends.com/topic/76868-</li>
            </ul>
            <h4>Lee Sin</h4>
            <ul class="LeeSin">
              <li>Reworked INSEC, now works both ways properly: selecting two points or only target (using insec to mouse)</li>
              <li>Minor fixes</li>
            </ul>
            <h4>Rengar</h4>
            <ul class="Rengar">
              <li>Added to Jungle Series! (Beta)</li>
            </ul>
          </section>
          <section id="3" class="083">
            <h1>0.83</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Cleaned some code</li>
              <li>Changed target selector for be more friendly: Check the FH Quick Guide for understand it!</li>
            </ul>
            <h4>Lee Sin</h4>
            <ul class="LeeSin">
              <li>Improved INSEC a lot! Added also a new option to insec to Mouse</li>
              <li>Added new passive management system!</li>
              <li>Added Q-Smite option for cast Q if 1 minion is bocking the path</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Automatic Integration with orbwalkers! No longer need disable rollin' &amp; unbind sac</li>
            </ul>
          </section>
          <section id="4" class="082">
            <h1>0.82</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Replaced old inbuilt VPrediction version with the last version</li>
              <li>Preset for support other predictions [other predictions are not enabled yet]</li>
              <li>Reseted all FH Trials</li>
              <li>All updated to patch 5.16 (bol might have still minor issues)</li>
              <li>Added PagSeguro as new payment option</li>
            </ul>
            <h4>Lee Sin</h4>
            <ul class="LeeSin">
              <li>Improved the RQQ combo</li>
              <li>Now lane clear will focus crab minion instead of dragon (if you select it, clicking it)</li>
              <li>Minor fixes</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Fixed minor bugs</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Fixed for new patch and riot changes</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Fixed for new patch</li>
            </ul>
          </section>
          <section id="5" class="081">
            <h1>0.81</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Cleaned all old laggy fps draw functions for predicted damage, now have perfect performance</li>
            </ul>
            <h4>Lee Sin</h4>
            <ul class="LeeSin">
              <li>Improved jungle steal function, now works even if we dont have smite (nice if enemy have smite cooldown too)</li>
              <li>Fixed a small bug with tiamat/hydra</li>
              <li>Improved &amp; Fixed menu: More clarity on the on/off options</li>
              <li>Fixed usage of R as spell interruptor</li>
              <li>Fixed a bug with wards on the ward jump function</li>
              <li>Fixed some insec bugs (remember you need click target and then an ally, minion or tower for insec direction)</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Fixed a bug on menu</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>The warning message now will auto close after 60 seconds</li>
            </ul>
          </section>
          <section id="6" class="080">
            <h1>0.80</h1>
            <h4>General</h4>
            <ul class="General">
              <li>RELEASED LEE SIN ON FH JUNGLE SERIES !</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Fixed a small bug on autokill which activates R by error</li>
            </ul>
            <h4>KhaZix</h4>
            <ul class="KhaZix">
              <li>Fixed a small bug with double jump + smite</li>
            </ul>
            <h4>Katarina</h4>
            <ul class="Katarina">
              <li>Stop breaking ultimate with the inbuilt mini Spells dodge</li>
            </ul>
          </section>
          <section id="7" class="079">
            <h1>0.79</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a bug with SAC - reset spells (Fiora E, Nidalee Q, Talon Q, etc)</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Fixed the auto hydra activation even with no enemies near</li>
              <li>Some minor bug fixes</li>
            </ul>
            <h4>KhaZix</h4>
            <ul class="KhaZix">
              <li>Fixed double jump on same 'dead' target</li>
              <li>Added a new draw option for show invisible time</li>
            </ul>
          </section>
          <section id="8" class="078">
            <h1>0.78</h1>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Fixed the random spam bug !</li>
            </ul>
          </section>
          <section id="9" class="077">
            <h1>0.77</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Added SAC-FH exclusive API integration. If you have a chat spam with SAC, get latest SAC version!</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Some bug fixes</li>
            </ul>
            <h4>Nidalee</h4>
            <ul class="Nidalee">
              <li>Fixed a small bug disabling swap to cougar form if Q is on cooldown and enemy in W range</li>
            </ul>
            <h4>Talon</h4>
            <ul class="Talon">
              <li>Added option to disable W in combo</li>
            </ul>
          </section>
          <section id="10" class="076">
            <h1>0.76</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Some changes on orbwalk, now the extra delay on AA works properly</li>
              <li>Fixed auto potions, now prioritzes properly them</li>
              <li>Some minor global bug fixes</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Improved W parry function with Evadeee integration</li>
              <li>Fixed the spam chat vs Pantheon!</li>
              <li>New option for use Q as gap closer even if will not hit a vital mark</li>
              <li>New option for save Q Evadeee when Riposte cd, against CC champs (morgana, lux ...)</li>
              <li>Improved her orbwalker preventing stuttering using Rollin'</li>
            </ul>
            <h4>Irelia</h4>
            <ul class="Irelia">
              <li>Added an option for specific when cast R using lane clear (minimum minions around)</li>
            </ul>
            <h4>KhaZix</h4>
            <ul class="KhaZix">
              <li>Fixed a weird random nil spam chat bug with double jump</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Fixed a bug with akali R on smart mode</li>
            </ul>
          </section>
          <section id="11" class="075">
            <h1>0.75</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Added on global FH Settings: Full support for Smite! Now script will use Chilling Smite &amp; Challenging Smite</li>
              <li>Fixed an small bug with auto smite jungle buff monsters</li>
              <li>Some minor global bug fixes</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Improved W parry function</li>
              <li>Fixed a bug on the forced W key</li>
              <li>New option for parry AA damage if it does more than a configurable % damage (auto adjusted for critical AA's)</li>
            </ul>
            <h4>Nidalee</h4>
            <ul class="Nidalee">
              <li>Added an option for disable auto R swap in lane clear</li>
            </ul>
          </section>
          <section id="12" class="074">
            <h1>0.74</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Added on global FH Settings an option for use inbuilt orbwalker with others like SAC (so you can use SAC for farm and inbuilt one for combo),</li>
              <li>if you enable the inbuilt orbwalker with others, remember UNBIND combo mode on the external one (SAC, MMA, SXO)</li>
              <li>Minor bug fixes</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Added an option to force use W, so in combo if you feel you want use it for damage/slow, you can press it instead of be saved for parry CC</li>
              <li>Fixed flee mode</li>
            </ul>
            <h4>KhaZix</h4>
            <ul class="KhaZix">
              <li>Improved some damage calculations</li>
            </ul>
            <h4>Nidalee</h4>
            <ul class="Nidalee">
              <li>Fixed the Toggle Q in harass</li>
            </ul>
          </section>
          <section id="13" class="073">
            <h1>0.73</h1>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Fixed a small bug</li>
            </ul>
          </section>
          <section id="14" class="072">
            <h1>0.72</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a bug with a global draw</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Fixed the bug that makes you move across the map, one 'getdistance' was wrong</li>
              <li>Improved some spells to parry, like riven third Q</li>
              <li>Improved the obrwalk position, to no 'stick inside' enemy</li>
              <li>Minor bugfixes</li>
            </ul>
            <h4>KhaZix</h4>
            <ul class="KhaZix">
              <li>Fixed ALL reported bugs</li>
              <li>Added all suggested new options (except some draws and use smite on enemy, soon)</li>
            </ul>
            <h4>Nidalee</h4>
            <ul class="Nidalee">
              <li>Fixed ALL reported bugs</li>
              <li>Added all suggested new options (except some draws and jungle snipe, soon)</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Fixed a typo on the harass mode</li>
            </ul>
          </section>
          <section id="15" class="071">
            <h1>0.71</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed IsKeyDown random problem that some users had</li>
              <li>Improved inbuilt move function</li>
              <li>Improved Stream mode for use it on all scripts, so setting true on FHL is enough</li>
              <li>Improved target selector, now if you have the option 'focus selected target' enable, you will not switch to other target</li>
              <li>Improved detection of recall</li>
              <li>Improved detection of yasuo wall for avoid cast skillshots at it</li>
              <li>Cleaned some functions &amp; code</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Rework is here! All changed according to her new play stile &amp; spells (Beta)</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Improved his harass mode</li>
              <li>Added a new option for auto cast Q vs enemy gap closers, if you will get a shield with it</li>
            </ul>
            <h4>Fizz</h4>
            <ul class="Fizz">
              <li>Changed a bit prediction for his R (still WIP)</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Increased default timer text size on soldiers</li>
              <li>Reactivated trap enemy into walls (was disabled due to bol old bugs)</li>
              <li>Added option to auto push enemy into our tower range</li>
              <li>Fixed azir long flee mode bug</li>
            </ul>
            <h4>NEW FUN HOUSE</h4>
            <ul class="NEWFUNHOUSE">
              <li>We want to give a BIG gift to our clients, so we are rearranging our scripts.</li>
              <li>Instead of buy them as standalone, now will be binded in packages!</li>
              <li></li>
              <li>New packages are:</li>
              <li>FH Jungle: Evelynn Trundle KhaZix Nidalee (+2 more soon) --&gt; ALL this scripts for just $15</li>
              <li>FH Mainline: Azir Fiora Ryze Akali Urgot Irelia Fizz --&gt; ALL this scripts for just $15</li>
              <li>If you already own 1 script , you will be inside the whole bundle.</li>
              <li>If you own one or more scripts from each bundle, you will have access to both.</li>
              <li></li>
              <li>Added nidalee for free for all users on the Jungle package</li>
              <li>Added khazix for free for all users on the Jungle package</li>
              <li>Added a new menu for see easier who is our target</li>
              <li>Added a mini skillshot drawer (if you can, use Evadeee instead!)</li>
              <li>Added a new jungle menu for auto smite (WIP)</li>
              <li>Added a new exclusive integration between FH and Evadeee with: Irelia, Fiora, Akali, Fizz &amp; Katarina</li>
            </ul>
          </section>
          <section id="16" class="070">
            <h1>0.70</h1>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Fixed a random case where script might not cast E, breaking insec&amp;quick dash</li>
            </ul>
          </section>
          <section id="17" class="069">
            <h1>0.69</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Added BilgeWater special minions</li>
            </ul>
            <h4>Fizz</h4>
            <ul class="Fizz">
              <li>Q spell now take into account enemy hitbox (somehow was removed, now is back)</li>
              <li>Added forced long range R (own menu|experimental|disabled by default)</li>
            </ul>
          </section>
          <section id="18" class="068">
            <h1>0.68</h1>
            <h4>General</h4>
            <ul class="General">
              <li>We reset all the trials on our champions scripts 48h ago (in case you didn't see it)</li>
              <li>Minor bug with auth should be fixed now if you're on trial mode</li>
              <li>Minor bug on target selector</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>NEW: Insec &amp; Quick Dash !</li>
              <li>We reworked from 0 our code, so it will perform much better,</li>
              <li>might still need some minor tweak, but in overall insec/dash will be much more smooth!</li>
            </ul>
          </section>
          <section id="19" class="067">
            <h1>0.67</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Minor updates on all our scripts - updated for Patch 5.14</li>
              <li>If scripts don't work on your region, please wait for a BoL update</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Updated her R stacks packet</li>
            </ul>
            <h4>Evelynn</h4>
            <ul class="Evelynn">
              <li>Adjusted new Q damage from this patch</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Adjusted new Q&amp;E damage from this patch + new passive duration</li>
            </ul>
          </section>
          <section id="20" class="066">
            <h1>0.66</h1>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Reverted last patch changes. As seems new version give more problems than solutions.</li>
              <li>However we are still looking hard at this for get the perfect solution for everyone!</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Added an experimental mode for use SAC for farming but inbuild orbwalker for Combo.</li>
              <li>Reason is that sac doesnt detect ryze comboing and make it stutters. No enable if you're not sure.</li>
              <li>If you enable it, remember unbind combo SAC mode from -spacebar-</li>
            </ul>
          </section>
          <section id="21" class="065">
            <h1>0.65</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Minor updates on all our others scripts</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Hard code &amp; checks on Insec, as is high related with the ping. Should work good now.</li>
            </ul>
            <h4>Fizz</h4>
            <ul class="Fizz">
              <li>Tweaked E &amp; R, should be a bit more accurate now</li>
            </ul>
          </section>
          <section id="22" class="064">
            <h1>0.64</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Minor updates on all our scripts - working with Patch 5.13</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Added a timer on soldiers, for know when they will expire</li>
              <li>Minor bugfix on insec</li>
              <li>Added option to use toggle mode (if you enable it, you need reload with F9x2)</li>
              <li>Added azir slider for those with unique ping, can adjust latency for perfect EQ &amp; Insec timing</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Updated R stacks packet</li>
            </ul>
          </section>
          <section id="23" class="063">
            <h1>0.63</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Support Yasuo wall! So if an enemy is behind a yasuo wall, we will not waste our spells!! (wip)</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Added a new initial message that explains how to avoid having troubles (you need unique keys on some functions)</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Added a new slider with a minimum distance for R minion jump (config resetted)</li>
              <li>Added a new option for force R if we are under 50% health (on smart mode)</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Improved AA stuck on combo</li>
            </ul>
            <h4>Talon</h4>
            <ul class="Talon">
              <li>Forced Q if you use SAC (still not as good as builtin Rollin' resets)</li>
            </ul>
          </section>
          <section id="24" class="062">
            <h1>0.62</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Added full support to all orbwalkers: SAC, SXO &amp; MMA (you need configure keybinders on our menu)</li>
              <li>Fixed auto heal being casted on dead allies</li>
              <li>Minor general improvements</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>High improvements on INSEC</li>
              <li>Added new mana slider, for avoid over cast W with low mana (saving mana for Q)</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Updated packets with R stacks for patch 5.12</li>
              <li>Tweaked last hit &amp; lane clear</li>
            </ul>
            <h4>Irelia</h4>
            <ul class="Irelia">
              <li>Fixed irelia E as spell interruptor</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Added a toggle option for quick enable/disable auto W parry</li>
            </ul>
            <h4>Fizz</h4>
            <ul class="Fizz">
              <li>Improved inbuild E dodge</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Improved lane clear, last hit &amp; AA stuck in combo</li>
              <li>Adapated Q &amp; W damage and passive to current patch 5.12</li>
              <li>Improved ryze stacks draws: now red=bad green=good white=pentakill time</li>
            </ul>
          </section>
          <section id="25" class="061">
            <h1>0.61</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Auto level activated, bol is now updated so you can enable again that function</li>
              <li>Fixed an small bug that might freeze game on old computers</li>
              <li>Minor general improvements</li>
            </ul>
            <h4>Irelia</h4>
            <ul class="Irelia">
              <li>Fixed a problem with R on lane clear</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>AA animation break on combo should be fixed now</li>
            </ul>
            <h4>Maokai</h4>
            <ul class="Maokai">
              <li>Added an option to disable/enable W in combo</li>
            </ul>
          </section>
          <section id="26" class="060">
            <h1>0.60</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Disabled auto level globally as some people forgot to do it manually</li>
            </ul>
            <h4>Talon</h4>
            <ul class="Talon">
              <li>Fixed a bug casting W spell</li>
            </ul>
          </section>
          <section id="27" class="059">
            <h1>0.59</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a 'char const*' bug if you had other scripts loaded</li>
            </ul>
          </section>
          <section id="28" class="058">
            <h1>0.58</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Added a new free champion, Talon, topic will be created soon</li>
              <li>All our champions have been tested&amp;fixed and are working with Patch 5.11</li>
              <li>As BoL is still not fully updated, you guys need disable auto level function or will bugsplat</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Closest target fixes</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>R stacks packet updated to patch 5.11</li>
            </ul>
            <h4>Katarina</h4>
            <ul class="Katarina">
              <li>Adapted to patch 5.11 E changes</li>
            </ul>
          </section>
          <section id="29" class="057">
            <h1>0.57</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a bug on target selector, now will work much better</li>
            </ul>
            <h4>Irelia</h4>
            <ul class="Irelia">
              <li>Updated E animation cancel</li>
            </ul>
          </section>
          <section id="30" class="056">
            <h1>0.56</h1>
            <h4>General</h4>
            <ul class="General">
              <li>FREE TRIAL 24h ENABLED ON ALL FH SCRIPTS. FINALLY!</li>
              <li>Fixed immunetable spam bug (if you get it again, then is cause by other script)</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>INSEC improved!</li>
              <li>Added auto barrier</li>
              <li>New (beta) option for reflect Sion R</li>
              <li>New option for cast R - panic mode</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Q now ignores collision if we are with 5 stacks (resetting rest of our spells -&gt; PentaKill !)</li>
            </ul>
            <h4>Urgot</h4>
            <ul class="Urgot">
              <li>Small improvement on Q lock range</li>
            </ul>
            <h4>Katarina</h4>
            <ul class="Katarina">
              <li>Beta (report any bug): Reworked combo + ks mode, now combo order should be correct</li>
              <li>now humanizer should work (still fast, but as human-like with smart cast)</li>
            </ul>
            <h4>Fizz</h4>
            <ul class="Fizz">
              <li>Jungle steal spam fixed</li>
              <li>Fizz prevent Q dive under tower on low levels</li>
              <li>NOTE: with lasts changes, If you have a fizz spam chat, please get a clean bol studio folder!</li>
            </ul>
          </section>
          <section id="31" class="055">
            <h1>0.55</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a bug with latest bol update from yesterday, that might break the script</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Dash soldier choise fixed</li>
            </ul>
          </section>
          <section id="32" class="054">
            <h1>0.54</h1>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Now uses previous soldiers for dashes/insec instead of creating new W</li>
              <li>Fixed Q max range in prediction</li>
              <li>Minor fixes</li>
              <li>INSEC: IMPROVED! Now script can drift like faker!</li>
              <li>Allows curved dashes/insec with soldiers already on the field. Currently limited to 90 degrees curves maximum</li>
            </ul>
          </section>
          <section id="33" class="053">
            <h1>0.53</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a minor bug on target selector</li>
              <li>Increased range of BOTRK and BWG from 450 to 550 - patch 5.10</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Updated R stacks packet - patch 5.10</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Changed Q damage - patch 5.10 buff</li>
              <li>Updated passive stacks - patch 5.10 buff</li>
            </ul>
          </section>
          <section id="34" class="052">
            <h1>0.52</h1>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Improved Insec</li>
              <li>The random message -property X is read only- should be fixed now</li>
            </ul>
            <h4>Urgot</h4>
            <ul class="Urgot">
              <li>Added a new option on Q lane clear&amp;harass: now you can use it always or only if AA is not ready</li>
            </ul>
          </section>
          <section id="35" class="051">
            <h1>0.51</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a shared bug in OnDraw callback</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Improved Smart Combo checks</li>
            </ul>
            <h4>Irelia</h4>
            <ul class="Irelia">
              <li>Fixed a bug with patch 5.9</li>
            </ul>
            <h4>Urgot</h4>
            <ul class="Urgot">
              <li>Added a new option on Q last hit: now you can use it always or only if AA is not ready</li>
            </ul>
            <h4>Katarina</h4>
            <ul class="Katarina">
              <li>Tweaked E humanizer</li>
            </ul>
          </section>
          <section id="36" class="050">
            <h1>0.50</h1>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Added an option to cast or not R (in smart way combo) under enemy tower, configurable</li>
              <li>Improved logic for cast R using the Smart Way Combo</li>
            </ul>
          </section>
          <section id="37" class="049">
            <h1>0.49</h1>
            <h4>General</h4>
            <ul class="General">
              <li>All of our champions are now fully compatible with patch 5.9</li>
              <li>VPrediction is now built into FH Loader</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Adapted to changes in patch 5.9</li>
              <li>Fixed R stacks packet</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Tweaked Q range and prediction</li>
            </ul>
          </section>
          <section id="38" class="048">
            <h1>0.48</h1>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Fixed a critical bug where soldiers would often not attack enemies in range</li>
              <li>Fixed a bug drawing soldier ranges</li>
            </ul>
          </section>
          <section id="39" class="047">
            <h1>0.47</h1>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a small random bug with orbwalking on all of our scripts</li>
              <li>Cleaned some shared functions</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Fixed an error with a random nil value spam on chat doing Insec</li>
              <li>Fixed a bug casting W outside range</li>
              <li>Fixed a bug with the auto combo system casting ult randomly</li>
            </ul>
          </section>
          <section id="40" class="046">
            <h1>0.46</h1>
            <p>Hi guys! This time we bring you a new MAJOR update with tons of improvements for all of our champs! With this v0.46, we fixed all critical bugs and also added most of your suggestions! (Sadly, some of them will need wait for BoL 2 as BoL 1 performance is limited)</p>
            <h4>General</h4>
            <ul class="General">
              <li>Fixed a bug with enemy turrets, that indirectly fixes all bugs related to this (fiora W under enemy tower, irelia Q under enemy tower, etc)</li>
              <li>Fixed a bug with minions that affected minions table if you did a F9x2</li>
              <li>ADDED STREAM MODE! Now you can disable all draws and messages in game from our script! Stream on youtube, ustream, etc as a legit player :D</li>
            </ul>
            <h4>Akali</h4>
            <ul class="Akali">
              <li>Fixed flee mode</li>
              <li>Moved shroud timer from drawing above your champion to drawing on the shroud</li>
              <li>Improved logic on E</li>
            </ul>
            <h4>Azir</h4>
            <ul class="Azir">
              <li>Fixed E spell checks, and indirectly ALL bugs related to that E bug!!! (dash, flee, etc)</li>
              <li>Improved insec</li>
              <li>Fixed the chat spam when you choose cast W on prediction mode instead of max range</li>
              <li>Improved flee mode, taking into account latency</li>
              <li>Fixed a bug with ult while try to pin enemy into walls</li>
            </ul>
            <h4>Evelynn</h4>
            <ul class="Evelynn">
              <li>Improved performance</li>
            </ul>
            <h4>Fiora</h4>
            <ul class="Fiora">
              <li>Fixed ignite overkill while ulting</li>
              <li>Added harass mode (to the disappointment of ikita)</li>
              <li>Added more dangerous spells to dodge with ultimate</li>
              <li>Added a new option to follow some enemy dashes!! (a wild Ezreal will jump away? No problem! Now we will jump with him with our R!)</li>
            </ul>
            <h4>Fizz</h4>
            <ul class="Fizz">
              <li>Fixed jump bug on some spots</li>
              <li>Tweaked R checks</li>
              <li>Added option to disable ult casting on selected enemies</li>
            </ul>
            <h4>Irelia</h4>
            <ul class="Irelia">
              <li>Added an option to delay Q in lane clear and last hit (if you enable it and set too high, you will miss minions, so be smart)</li>
              <li>Added an option to last hit/lane clear for block our Q if minion is under enemy tower</li>
            </ul>
            <h4>Katarina</h4>
            <ul class="Katarina">
              <li>Added draw for estimated damage so you can see if you can kill enemy or not</li>
              <li>Fixed some peculiar auto ks bugs</li>
              <li>Fixed random W</li>
              <li>Improved combo checks</li>
              <li>Added harass as toggle</li>
            </ul>
            <h4>Maokai</h4>
            <ul class="Maokai">
              <li>Fixed some minor bugs</li>
            </ul>
            <h4>Ryze</h4>
            <ul class="Ryze">
              <li>Some minor combo fixes</li>
              <li>Added a new draw to show your current stacks easily for better management</li>
            </ul>
            <h4>Trundle</h4>
            <ul class="Trundle">
              <li>Fixed a bug where script was not casting W on lane clear</li>
              <li>Added a hotkey for casting an Instant Pillar E behind enemy</li>
              <li>Improved E logic in combo</li>
            </ul>
            <h4>Urgot</h4>
            <ul class="Urgot">
              <li>Improved performance</li>
            </ul>
          </section>
        </main>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>

<!-- message the team popup starts -->

<div class="modal fade MessagetheTeam" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="colorwhite">×</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Send us a message</h4>
      </div>
      <div class="modal-body">
        <main id="main">
          <section>
            <form method="post" name="sendmessagetoteam" class="colors-h">
              <p>
                <input name="email" type="email" placeholder="E-Mail" required="required">
              </p>
              <p>
                <textarea name="msg" cols="55" rows="5" placeholder="Message" required="required"></textarea>
              </p>
              <div class="row">
                <p class="col-md-3 pull-right">
                  <input id="button" type="submit" name="submit" value="Submit Form">
                </p>
              </div>
            </form>
          </section>
        </main>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>
<!-- message the team popup ends --> 

<!-- common problems and solutions popup starts -->
<div class="modal fade CommonProblemsandSolutions" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="colorwhite">×</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Send us a message</h4>
      </div>
      <div class="modal-body">
        <main class="popup_content">
          <section>
            <h4>HOW REDEEM YOUR CODE</h4>
            <p>You will get an email in your paypal email after your purchase with a redeem code and instructions [check spam box too]. Just follow the link and put there your redeem code and your bol username, and you will be added. Next just download the FH Loader from this same page.
              In case you don't receive any email after 3 hours, please send us a message including your bol username, your paypal email and the scripts names.</p>
            <h4>HOW TO FIX: If you are stuck on 'Validating FH license' and script don't validate you</h4>
            <p>For this, you need reset your internet explorer settings
              1-open internet explorer &gt; tools &gt; internet options &gt; advanced &gt; hit both reset buttons
              2-restart pc</p>
            <h4>HOW TO FIX: Bugsplats on Windows 8-8.1-10</h4>
            <a target="_blank" href="http://forum.botoflegends.com/topic/68743-solve-bugsplats-and-callback-error/">http://forum.botoflegends.com/topic/68743-solve-bugsplats-and-callback-error/</a>
            <h4>HOW TO FIX: Errors just after new Riot Patch</h4>
            <p>Sadly, after a new riot patch, bol studio needs to be updated by their admins, so script will not work properly until they fix BoL.</p>
            <h4>HOW TO FIX: Bugsplats due to FHAA</h4>
            <p>If you don't like, you have fps drops or you have bugsplats and want disable 100% FHAA, edit the Fun House Loader and change this line at top: _G.loadFHAA = true  changing true to false.</p>
            <h4>HOW TO FIX: Errors with Sandboxie</h4>
            <p>If you are using Sandboxie, please clear your cache (right click &gt; Defaultbox &gt; Delete contents). Then with Sanboxie closed, put the new Fun House Loader in your BoL folder, else Sanboxie might corrupt the file if you do it while is running. Also remember that scripts auto update not works with Sanboxie, so for new updates you will need download them manually.</p>
            <h4>HOW TO FIX: Seems like servers are down, please check firewall settings or try again later</h4>
            <p>Edit the Fun House Loader, and change this line at the top: _G.FixAuthProblems = false   changing the false for true</p>
            <h4>HOW TO FIX: Errors with config</h4>
            <p>Please go to your Common folder (inside BoL/Scripts) and delete all the content inside. Then redownload script from this web. As sometimes bol can corrupt it.</p>
            <h4>HOW TO FIX: Bugsplat doing alt+tab</h4>
            <p>Please set your game in Borderless or Windowed mode.</p>
            <h4>HOW TO FIX: What if i run out of VIP?</h4>
            <p>At this moment, if your vip sub expires, you will still be able to use all of ours FH scripts. But for be sure you will have on the future, that's why we posted them on Vip section.</p>
            <h4>HOW TO FIX: For all the other bugs</h4>
            <p>Please first go to %appdata% and delete there the BoL folder, then redownload a <a target="_blank" href="http://forum.botoflegends.com/topic/42250-bol-10-updated-folder-appdatalibsreloggerlibupdater-dll-pre-req-installer-last-update-05042015/">CLEAN</a> new bol studio folder, redownload our script again, and ONLY tick on Bol Studio our script, for be sure the bugs you are having are due to our script, and not due to others. Also be sure that bol studio dont have any box ticked in. <a target="_blank" href="http://forum.botoflegends.com/topic/42250-bol-10-updated-folder-appdatalibsreloggerlibupdater-dll-pre-req-installer-last-update-05042015/">CLEAN</a> </p>
          </section>
        </main>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>
<!-- common problems and solutions popup ends --> 

<!-- mainline popup starts -->
<div class="modal fade MainlinePopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="colorwhite">×</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Mainline</h4>
      </div>
      <div class="modal-body">
        <main class="popup_content">
          <section>
            <p class="pull-right"> <a id="forumButton" target="_blank" href="http://forum.botoflegends.com/topic/75654-" class="map-open button background-lite-b border-heading-b heading-b">Support Thread</a> <a id="buyButton" target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=QZ7PZLP54JFPY" class="map-open button background-lite-b border-heading-b heading-b">$15 Buy</a></p>
          </section>
          <div class="clear"></div>
          <section>
            <h4>Key Features</h4>
            <ul id="KeyFeatures">
              <li>Include: Azir Fiora Ryze Akali Urgot Irelia Fizz</li>
              <li><a href="https://www.youtube.com/playlist?list=PLVuKNCNnILjUuIx3Cjir95w3im7lVXFGh" target="_blank">Small videos preview: Here</a></li>
            </ul>
          </section>
          <section>
            <p> Includes our Rollin' OrbWalker and our leading custom target selection solution </p>
          </section>
          <hr/>
          <footer>
            <p id="hint">After purchasing and redeeming your code, download FH Loader to use</p>
          </footer>
        </main>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>
<!-- mainline popup ends --> 

<!-- katarina popup starts -->
<div class="modal fade KatarinaPopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="colorwhite">×</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Katarina</h4>
      </div>
      <div class="modal-body">
        <main class="popup_content">
          <section>
            <p class="pull-right"> <a id="forumButton" target="_blank" href="http://forum.botoflegends.com/topic/59948-" class="map-open button background-lite-b border-heading-b heading-b">Support Thread</a> <a id="buyButton" target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=QZ7PZLP54JFPY" class="map-open button background-lite-b border-heading-b heading-b">$15 Buy</a> </p>
          </section>
          <div class="clear"></div>
          <section>
            <h4>Key Features</h4>
            <ul id="KeyFeatures">
              <li>Dynamic combo according to spells, distance, etc</li>
              <li>Ultra fast KS mode</li>
              <li>Precise R usage - anti R break system</li>
              <li>Advanced jump (flee) mode</li>
            </ul>
          </section>
          <section>
            <h4>Draws</h4>
            <ul id="Draws">
              <li>Spell ranges</li>
              <li>Kill time approximation on target</li>
            </ul>
          </section>
          <section>
            <p> Includes our Rollin' OrbWalker and our leading custom target selection solution </p>
          </section>
          <hr />
          <footer>
            <p class="text-center"> Download FH Loader to use </p>
          </footer>
        </main>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>
<!-- katarina popup ends --> 

<!-- jungle popup starts -->
<div class="modal fade JunglePopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="colorwhite">×</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Jungle</h4>
      </div>
      <div class="modal-body">
        <main class="popup_content">
          <section>
            <p class="pull-right"> <a id="forumButton" target="_blank" href="http://forum.botoflegends.com/topic/75657-" class="map-open button background-lite-b border-heading-b heading-b">Support Thread</a> <a id="buyButton" target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SXNJ83PT4V5NJ" class="map-open button background-lite-b border-heading-b heading-b">$15 Buy</a></p>
          </section>
          <div class="clear"></div>
          <section>
            <h4>Key Features</h4>
            <ul id="KeyFeatures">
              <li>Include: Lee Sin Evelynn Trundle KhaZix Nidalee (+1 new soon)</li>
              <li><a href="https://www.youtube.com/playlist?list=PLVuKNCNnILjW0yjqNb5lmOVeQHkca3_hg" target="_blank">Small videos preview: Here</a></li>
            </ul>
          </section>
          <section>
            <p>Includes our Rollin' OrbWalker and our leading custom target selection solution</p>
          </section>
          <hr />
          <footer>
            <p class="text-center">After purchasing and redeeming your code, download FH Loader to use</p>
          </footer>
        </main>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>
<!-- jungle popup ends --> 

<!-- talon popup starts -->
<div class="modal fade TalonPopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="colorwhite">×</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Talon</h4>
      </div>
      <div class="modal-body">
        <main class="popup_content">
          <section>
            <p class="pull-right"><a id="forumButton" target="_blank" href="http://forum.botoflegends.com/topic/67737-" class="map-open button background-lite-b border-heading-b heading-b">Support Thread</a> <a id="buyButton" target="_blank" href="download.ashx" class="map-open button background-lite-b border-heading-b heading-b">Free</a> </p>
          </section>
          <div class="clear"></div>
          <section>
            <h4>Key Features</h4>
            <ul id="KeyFeatures">
              <li>Dynamic combo according to spells, distance, etc</li>
              <li>Ultra fast KS mode</li>
              <li>Fully configurable R</li>
              <li>Perfect AA-Q-AA reset</li>
            </ul>
          </section>
          <section>
            <h4>Draws</h4>
            <ul id="Draws">
              <li>Spell ranges</li>
              <li>Estimated damage for kill enemy</li>
            </ul>
          </section>
          <section>
            <p> Includes our Rollin' OrbWalker and our leading custom target selection solution </p>
          </section>
          <hr/>
          <footer>
            <p class="text-center"> Download FH Loader to use </p>
          </footer>
        </main>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>
<!-- talon popup ends -->

</body>
</html>