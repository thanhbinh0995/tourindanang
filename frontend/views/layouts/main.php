<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Type;
use yii\widgets\Menu;
use common\widgets\HelloWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody();
   echo HelloWidget::widget(['content' => $content]);
?>

    <div id="footer" role="contentinfo">
        <div class="container_12 clearfix">

            <div id="footer-widget-area" class="visible-desktop clearfix" role="complementary">
            </div>
            <div id="footer-menu" class="grid_12" role="complementary">
                <div class="footer-menu">
                    <ul id="menu-footer" class="menu">
                        <li id="menu-item-280" class="menu-item menu-item-type-taxonomy menu-item-object-duration menu-item-280"><a href="../duration/day-tour/index">Day tour</a>
                        </li>
                        <li id="menu-item-282" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-282"><a href="index">Package tours</a>
                        </li>
                        <li id="menu-item-281" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-281"><a href="../guide/index">Things to do</a>
                        </li>
                        <li id="menu-item-284" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-284"><a href="../destination/da-nang/index">Da Nang tours</a>
                        </li>
                        <li id="menu-item-658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658"><a href="http://tourinhanoi.com/">Hanoi tours</a>
                        </li>
                        <li id="menu-item-657" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-657"><a href="../contact-us/index">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="social-links bottom medium-icon">
                    <ul>
                        <li><a class="url_facebook" href="http://www.facebook.com/AproTravel" title="Facebook" target="_blank">Facebook</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="site-info" class="grid_6">
                &copy; 2017<a href="/site" title="tour in Danang" rel="home">
        tour in Danang</a>
            </div>
        </div>
        <div class="back-to-top"><a href="#masthead"><span class="icon-chevron-up"></span> TOP</a>
        </div>
    </div>
<?php $this->endBody() ?>
<script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.tabs .tab-links a').on('click', function(e) {
                var currentAttrValue = jQuery(this).attr('href');

                // Show/Hide Tabs
                jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                // Change/remove current tab to active
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                e.preventDefault();
            });
            var element = jQuery('.info,.error,.success').clone(true);
            element.appendTo('#message');
        });
    </script>
</div>
</body>
</html>
<?php $this->endPage() ?>
