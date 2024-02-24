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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.7156684449234789" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5468891624172918" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5727777078708653" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.35492316097465837" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.502221022231164" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.4178678620169085" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9581321622840653"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6933841920411714" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.020543009762908016">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8555995746485676">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8263319794801682">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.10791970190308975">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.9487209594623944"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9696959337494131"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.20911708446903798"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06692109842804816"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.9761801796556437"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.6005636982039471"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.41871357495366546"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.8935772284446095"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.7541998992143375"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.55907257404254"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.7069404101756838"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.8428944256786126"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.45462239877080646"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.24873323554019322"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.0811469997441936"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.5755536222088242"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.899158165670193"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.2794269560563216"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.7403463256209359"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
