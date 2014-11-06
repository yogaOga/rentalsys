<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />


        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <!-- Main stylesheed  (EDIT THIS ONE) 
		 <link rel="stylesheet" href="css/960.gs.css" />
		-->
       

        <!-- jQuery AND jQueryUI 
                                https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js
                                https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js
        -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>

        <!-- jQuery Cookie - https://github.com/carhartl/jquery-cookie -->
        <script type="text/javascript" src="js/cookie/jquery.cookie.js"></script>

        <!-- jWysiwyg - https://github.com/akzhan/jwysiwyg/ -->
        <link rel="stylesheet" href="js/jwysiwyg/jquery.wysiwyg.old-school.css" />
        <script type="text/javascript" src="js/jwysiwyg/jquery.wysiwyg.js"></script>


        <!-- Tooltipsy - http://tooltipsy.com/ -->
        <script type="text/javascript" src="js/tooltipsy.min.js"></script>

        <!-- iPhone checkboxes - http://awardwinningfjords.com/2009/06/16/iphone-style-checkboxes.html -->
        <script type="text/javascript" src="js/iphone-style-checkboxes.js"></script>
        <script type="text/javascript" src="js/excanvas.js"></script>

        <!-- Load zoombox (lightbox effect) - http://www.grafikart.fr/zoombox -->
        <script type="text/javascript" src="js/zoombox/zoombox.js"></script>

        <!-- Charts - http://www.filamentgroup.com/lab/update_to_jquery_visualize_accessible_charts_with_html5_from_designing_with/ -->
        <script type="text/javascript" src="js/visualize.jQuery.js"></script>

        <!-- Uniform - http://uniformjs.com/ -->
        <script type="text/javascript" src="js/jquery.uniform.js"></script>


        <!-- Main Javascript that do the magic part (EDIT THIS ONE) -->
        <script type="text/javascript" src="js/main.js"></script>
        <?php
        /*         * */
        ?>
        <style>
            ::-webkit-scrollbar { 
                display: none; 
            }
        </style>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div id="head">
            <div class="left">
                <a href="#" class="button profile"><img src="img/icons/top/huser.png" alt="" /></a>
                Hi, 
                <a href="#"><?php echo Yii::app()->user->name; ?></a>
                |
                <?php echo CHtml::link('Logout', array('/site/logout')); ?>
            </div>
            <div class="right">
                <form action="<?php ?>" id="search" class="search placeholder">
                    <label>Looking for something ?</label>
                    <input type="text" value="" name="q" class="text"/>
                    <input type="submit" value="rechercher" class="submit"/>
                </form>
            </div>
        </div>
        <!-- sidebar -->
        <div id="sidebar">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => (isset($this->module->menu) ? $this->module->menu : MenuModules::menuModule()),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class' => 'nav pull-right',
                ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu',
                )
            ));
            ?>
            <a href="#collapse" id="menucollapse">&#9664; Collapse sidebar</a>

        </div>
        <!-- End of Sidebar -->

        <!-- Content -->
        <?php echo $content; ?>
        <!-- End of Content -->
    </body>
</html>
