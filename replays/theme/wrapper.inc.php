<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6987129510968257" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7220888094625286" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4310312738452926" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6717389214129561" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.27001708778096956" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6506190637124691" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6521206225156602"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9820483900113997" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.43666806182535756">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07355124060078433">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3000669711258688">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.06253281888979867">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5500958934429518"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.3982024160830697"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.4691746911123855"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6204138413163294"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.8594054257430987"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.07101527647433081"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.9288853574052602"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.9515361843859806"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.3275361422091252"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.06086441122550856"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.4614156681689088"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.6896354896022547"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.2868438437478724"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.020299433190768656"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.43316353985419576"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.827413644643096"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.6326074734104283"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.023096736423003916"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.6394104993287386"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
