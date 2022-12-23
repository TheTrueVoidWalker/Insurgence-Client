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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.8555709385180297" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.755850298923866" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5384790392710945" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.024184740422188877" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.008549875509169969" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6749699901747364" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.23366350921343004"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9521545641394424" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23102652431009707">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3329656859163095">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9750930776466824">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5812906289605595">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7525665378066189"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.6344422055656391"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6527373519984709"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.38895647548203427"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.3782498409854349"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.31564489916541016"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8455766329667265"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.6281328389681795"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.6228443271400026"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7527983184128686"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.16623049476016427"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7227929025865949"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8898129986125785"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.2879576773658046"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.697473776033134"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.7933075652335173"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.700486516013777"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8137939758922859"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5508235609252996"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
