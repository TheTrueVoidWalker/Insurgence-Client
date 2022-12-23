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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.24998297612311227" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.21788630387233865" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.45504766529395435" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.2592438468210123" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7044045340445491" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.8485161285902083" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.25755216764315136"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8399517907854692" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3547187802168288">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14047869213370245">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5581628046262332">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3908986789248383">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.20382295496510938"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.5693925330411937"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6535223734743234"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05110016260453132"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.8994534370051053"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.012903560003242776"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.023353562205074008"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.4040772178091425"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.9086999344496809"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7118126423593512"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.7271540038040725"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.3632784266379703"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.9753174928319492"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6235181367065399"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.29132415942968604"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.7522745233138761"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.6708868899119338"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.3445354938037446"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.36248954350617635"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
