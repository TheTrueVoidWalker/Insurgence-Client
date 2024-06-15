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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.825719226266028" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9735491213861709" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.677583280570347" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.380268717690303" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.9794067398567208" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.8734430393571362" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.18931819001712147"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4675430768953561" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7784374358602824">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9057497191973085">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.38690939712425165">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5134812628976442">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.875524759463421"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.4365212977537247"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.6807720818813687"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.445774638979642"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.49228985718132146"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.5489353540469692"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.4123626477400113"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.39155536944433056"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.3258552992613648"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.8422809693876996"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.21284087865210433"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7684960539324668"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7098262642825897"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.4176920782317832"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.2031330966167022"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.46561767620698036"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.9663446789204742"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.7625985459472819"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.2984223925714602"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
