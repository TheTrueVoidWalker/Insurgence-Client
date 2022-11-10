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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.34112691001835627" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5517681307049744" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6010880786711781" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.3513180377480398" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.963199879325134" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.1493224544721441" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6607211202078234"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5387656720998868" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.47341160195372844">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38161654091695074">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8291569709612241">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6489613148445437">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5412129130802534"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.8146140557439903"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.18267923070081205"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.538182671896172"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.1418666259038064"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.5677188917786204"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8439506800098471"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.07106511081353895"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.3315709377016296"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7976484945431102"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.21883316377053452"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7424130785392493"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.46840225993000995"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.5623457758092418"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.36053760550677816"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6490722250021355"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.2648878962107075"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6785079577619648"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.4111415777550176"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
