<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title><?php $view['slots']->output('title', 'PPI Skeleton Application') ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="PPI Skeleton Project">
        <meta name="viewport" content="width=device-width">

        <!-- CSS Stuff -->
        <link href="<?=$view['assets']->getUrl('components/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?=$view['assets']->getUrl('css/main.css');?>" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
        <?php $view['slots']->output('include_css'); ?>
        <!-- /CSS Stuff -->

        <!-- JS Head Stuff -->
        <script src="<?=$view['assets']->getUrl('components/modernizr/modernizr.js');?>"></script>
        <script type="text/javascript">
            var ppi = {
                baseUrl: '<?=$view['router']->generate('Homepage');?>'
            }
        </script>
        <?php $view['slots']->output('include_js_head'); ?>
        <!-- /JS Head Stuff -->
    </head>
    <body>
        <nav>
        </nav>
        <div>
            <?php $view['slots']->output('_content'); ?>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?=$view['assets']->getUrl('components/jquery/dist/jquery.min.js');?>"><\/script>')</script>
        <script src="<?=$view['assets']->getUrl('components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
        <?php $view['slots']->output('include_js_body'); ?>
    </body>
</html>
