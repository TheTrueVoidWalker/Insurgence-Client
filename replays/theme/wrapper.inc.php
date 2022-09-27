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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.18324145835239114" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2070265133360456" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5659080197948263" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6540300861493027" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.09801652219603851" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.3983923026904592" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8666305100520386"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.04903670617842493" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9433362633731175">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8893869064585673">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2663543629449059">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9693791119652386">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.754113732391835"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.7317541253005677"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.822457511365511"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5381033272019045"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.2236413220181519"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.905000488826615"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.02562795224628589"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7360712724308427"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.29797279399471477"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.07173214967345531"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8097705325777156"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.9994763297979012"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.26211588994681234"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.4837224218405065"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.3385868586529013"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9572837168380366"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.3805780125857512"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.7054486427896784"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.028535106560857226"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
