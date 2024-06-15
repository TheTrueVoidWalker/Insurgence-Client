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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.9808146200133556" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.15571483224809968" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.16404091809224286" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.9555021499867733" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.006101949567601794" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.7133938389391421" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4986611346376226"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.002534721830230735" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28278770643127804">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8049222858637428">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5919786774903475">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.25365031949263517">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.11410734538111544"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5964569772628519"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.5459230012613352"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3686108948563356"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.6586552248356741"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.20025691646988708"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.42535817215253835"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.9613415793175546"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.9032856811605328"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.5953168316071218"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.39150668465824134"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.5503635931449504"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.22091231509814135"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.3637575998263334"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.0522335063680861"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.3761707768072231"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.3042742167441075"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.7485066141060184"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.9278606325150653"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
