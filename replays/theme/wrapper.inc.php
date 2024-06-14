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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.27434266932805906" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.17004938433292005" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3377781192750706" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.7424565273711632" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.6571159662302464" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.6351688749619435" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5601150420281698"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6141403544489055" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2558207899102154">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.025280219614787214">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8580009474543122">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6247562478189992">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.2856526437487876"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5371214595219225"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.7471656202799022"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3729911342865637"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.28207393366012523"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.10469437275045945"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.8518404406106663"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.8949856933957043"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.2853602720474415"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.12552482457730907"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.14916244847800852"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.37808029668708976"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.9934385683000235"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.7509475195082902"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.7168501065689827"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.89916736705808"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.84983450553092"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.1732394788276106"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.17067967280762564"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
