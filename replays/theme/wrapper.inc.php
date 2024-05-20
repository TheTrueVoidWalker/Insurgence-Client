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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.3664467148730044" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5005937179333881" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4558971716839497" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.8243918603264406" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.14376920621846478" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.20099327186726978" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6358012806041429"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9739239704300129" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9118470787037236">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7896280112197198">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.15997434209524863">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.2548447418610884">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.2634748419417856"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9111348293058081"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.9649705128889259"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5348653302727324"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.9020071742369242"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.46287907309686505"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.43454444392553637"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.22500552276421493"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.8976033569465862"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.5251487913208983"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.9094373636937776"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.49216974683466863"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7703637257672049"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.7201035025367504"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.767927017981217"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.4327991092681813"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.1394254611441812"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.7849898960261081"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.3598323722143766"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
