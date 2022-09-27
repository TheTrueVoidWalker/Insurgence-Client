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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.7325663917583525" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5754572350734812" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.866937036261926" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.7097513652640481" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5222915326758635" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9032324362715629" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.42622614632228606"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.23395689659044083" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44551863006944536">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.049063595663606074">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9869627366629494">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9132622601119889">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.2376750901936895"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.20871029817075115"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.9292358031165018"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8049900637121563"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.7676989917932522"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.23391714015045983"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6482714836373917"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.23722465461184106"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.22012372365421196"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.22528651230939545"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.31810621200031197"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.8109942261915952"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.20675416762175258"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6627372889085807"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.00560338616837619"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.697552216393005"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.2959635221521577"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6272168577556825"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.36029359298355"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
