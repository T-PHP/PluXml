<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=<?= $charset ?>" />
    <title><?= $titre ?></title>
    <link rel="stylesheet" type="text/css" href="theme/css/knacss.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="theme/css/theme.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="theme/fonts/fontello.css" media="screen" />
    <link rel="icon" href="theme/images/favicon.png" />
    <?= $custom_admincss ?>
    <?= $plugin_admincss ?>

    <script src="theme/js/functions.js"></script>
    <script src="theme/js/visual.js"></script>
    <script src="theme/js/mediasManager.js"></script>
    <script defer src="theme/js/multifiles.js"></script>

    <?= $hookAdminTopEndHead ?>
</head>

<body id="<?= $scriptName ?>">

	<header id="header" role="banner" class="autogrid pam header">
    	<div class="">
        	<ul class="unstyled">
           		<li class="inbl">
           			<a href="<?= $adminUrl ?>"><h1 class="h2 no-margin"><strong><?= $siteTitle ?></strong></h1></a>
           		</li>
           		<li class="inbl">
           			<small><a class="back-site" href="<?= $siteUrl ?>" title="<?= $siteTitle ?>"><?= $backToSite ?></a></small>
           		</li>
           		<?= $blogLink ?>
           	</ul>
    	</div>
    	<div class="txtright">
    		<img class="img-circle" src="<?= $profilPicture ?>">
           	<ul class="unstyled">
        		<li class="inbl">
        			<strong><?= $userName ?></strong>
        		</li>
        		<li class="inbl">
        			<small><a class="logout" href="<? $logOutUrl ?>" title="<?= $logOutTitle ?>"><?= $logOut ?></a></small>
        		</li>
        	</ul>
        </div>
	</header>

    <div class="flex-container">
    
        <aside class="mod w250p pam aside">
        	<nav id="navigation" role="navigation">
        		<ul id="responsive-menu" class="menu vertical expanded">
        			<?= $menuContent ?>
        		</ul>
        		<ul class="unstyled">
           			<li>
           				<small><a class="version" title="PluXml" href="http://www.pluxml.org">PluXml <?= $pluxmlVersion ?></a></small>
           				<?= $pluxmlMaj ?>
        			</li>
        		</ul>
        	</nav>
        </aside>

    	<main id="main" role="main" class="flex-item-fluid pam">
			<?= $adminMessage ?>
    		<?= $hookAdminTopBottom ?>

    		<?= $mainContent ?>

		</main>

	</div>

	<?= $hookAdminFootEndBody ?>

    <script src="<?php echo PLX_CORE ?>theme/js/drag-and-drop.js"></script>
    <script>
    	setMsg();
    	mediasManager.construct({
    		windowName : "<?php echo L_MEDIAS_TITLE ?>",
    		racine:	"<?php echo plxUtils::getRacine() ?>",
    		urlManager: "core/admin/medias.php"
    	});
    </script>

</body>
</html>