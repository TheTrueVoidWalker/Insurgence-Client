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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.40706399328611664" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.858978370627675" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7634147930587438" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9938810946911683" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.15553368386607946" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.80007029577785" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4013696376936955"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.995332042160957" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.36873886288204005">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05012663290647068">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9609560541315201">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5911750111325602">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.22913126460913458"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.7904673105279039"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.11826323657135096"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42289182187350893"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.7931054500151102"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.7528615481888703"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.9309884188227897"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.4298792187515714"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.2102191101466393"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7153814942565462"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5738997534364199"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.1171111130148097"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.24749084575556934"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.97925029325647"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.29933745101636355"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.13606173767390262"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.10815411333598401"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8505977246601668"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.27104598611934083"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
