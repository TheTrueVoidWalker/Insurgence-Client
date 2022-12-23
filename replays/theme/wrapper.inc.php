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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.04677596205741752" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4332110062751078" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9392294387472293" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.988638447365888" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.6505066956772381" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9447751838235314" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8149634040783595"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7156322702322055" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11286395576878183">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3946273097846362">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.126158040790338">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5287657687744911">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.8412675188370178"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.01300994461924132"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6130557400038215"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21837933746130433"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.004045565670772522"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.17677034236542433"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.1053662554780681"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.2949405294943508"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5794585669341195"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.22576843486927656"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.10988064936445507"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.8223851879248634"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.027551983328894414"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.11387476729032042"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.4994029281434951"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6380455203634037"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.680797511142357"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.4487634301119898"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.4494700058031571"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
