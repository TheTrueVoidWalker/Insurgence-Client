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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.9986816407127583" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9338481424080209" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5248177754170851" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.5258130951865889" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.5768094749220407" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.24564852370666346" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7934349059755808"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4192256474315983" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15544516198817426">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.32890630916890196">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9665651938569073">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6469625266561441">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.9060924896512232"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.05516937955200474"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.29799194896530623"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13599269116625234"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.36819853673509795"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.6370221225114907"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.4276874736773413"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.17257486389046361"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.3194234448395461"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.5467712832931746"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.9198107948838765"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7056412492627"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.4848771262852003"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8011034753025521"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.4447914068159049"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.9144723819668268"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.6117150817846448"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.22938445780035965"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.6708428923114096"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
