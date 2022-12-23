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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.48221034325615797" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.167428079600485" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6724625814387879" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.639656561068221" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5294039884484751" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.514102537118831" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.3709149784107719"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6631632394511349" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4754602380687696">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.769975195376247">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.4078589476484138">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7972802377456807">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.26611910775645686"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.46718370897715245"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6639754298438076"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5965972276642713"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.00856544982812113"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.04179353277406883"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.43102817555424466"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.3200608738890758"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.25562328043593796"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.18320456076152913"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.547857629060065"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.9352786903185"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.6513713327849293"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6749671573718965"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6413688278887135"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.750950549154974"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.25896825188369155"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.02672690368882491"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.10412029839733128"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
