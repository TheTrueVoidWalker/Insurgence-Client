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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.9056462561117851" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8355633355953902" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7526488241612306" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.46612171926454327" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.449084850510568" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.46758549757820855" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.148925082458629"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9626526422145303" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10187551867324318">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5008633641337368">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9667382749329549">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8098574541915504">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.046092534383873174"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.18012248469047543"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.036006471563404086"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.057239671027504935"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.2586037244821233"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.4605282812582412"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.4972721676382832"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7545143121674884"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5692650302406033"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.26965368798969913"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.7841864956776874"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7145560063165042"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.4238015498616172"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.5292357643647116"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.38459629260101846"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.026525603500054284"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.13494482925496243"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.4487821267151715"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.6542587238755848"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
