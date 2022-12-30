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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.05660575363271003" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9063811191488127" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5831345856370032" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.8390312993617988" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.8370760184629049" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.20563271089489188" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7906269023809671"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.46999913760280077" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4913655295916026">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.900775299878287">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2397483169106387">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5103311954816105">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5843442875538785"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.2852778873447468"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.5971504767928353"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14433681460294467"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.1637517911265598"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.27782324423521354"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.03136532332330044"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.8608054608439129"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.50059680104692"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.9250826466172479"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.036125468924362636"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.07796132103343245"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.34399655594260103"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.09896174943564628"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.08047417824208591"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.5406006014249121"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.8032504708328669"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.5473106856692447"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.1881871752274773"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
