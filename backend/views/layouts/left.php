<?php 
use common\components\Util;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Util::getUrlImage(Yii::$app->user->identity->avatar) ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username   ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    [
                        'label' => Yii::t('app', 'User'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List User'), 'icon' => 'fa fa-circle-o', 'url' => ['/user'],],
                            ['label' => Yii::t('app', 'Create User'), 'icon' => 'fa fa-circle-o', 'url' => ['/user/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Tour'),
                        'icon' => 'fa fa-map',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Tour'), 'icon' => 'fa fa-circle-o', 'url' => ['/tour'],],
                            ['label' => Yii::t('app', 'Create Tour'), 'icon' => 'fa fa-circle-o', 'url' => ['/tour/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Hotel'),
                        'icon' => 'fa fa-asterisk',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Hotel'), 'icon' => 'fa fa-circle-o', 'url' => ['/hotel'],],
                            ['label' => Yii::t('app', 'Create Hotel'), 'icon' => 'fa fa-circle-o', 'url' => ['/hotel/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Price'),
                        'icon' => 'fa fa-file-excel-o',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Price'), 'icon' => 'fa fa-circle-o', 'url' => ['/price'],],
                            ['label' => Yii::t('app', 'Create Price'), 'icon' => 'fa fa-circle-o', 'url' => ['/price/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Motel'),
                        'icon' => 'fa fa-asterisk',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Motel'), 'icon' => 'fa fa-circle-o', 'url' => ['/motel'],],
                            ['label' => Yii::t('app', 'Create Motel'), 'icon' => 'fa fa-circle-o', 'url' => ['/motel/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Address'),
                        'icon' => 'fa fa-asterisk',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Address'), 'icon' => 'fa fa-circle-o', 'url' => ['/address'],],
                            ['label' => Yii::t('app', 'Create Address'), 'icon' => 'fa fa-circle-o', 'url' => ['/address/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Image'),
                        'icon' => 'fa fa-asterisk',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Image'), 'icon' => 'fa fa-circle-o', 'url' => ['/image'],],
                            ['label' => Yii::t('app', 'Create Image'), 'icon' => 'fa fa-circle-o', 'url' => ['/image/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Type'),
                        'icon' => 'fa fa-asterisk',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Type'), 'icon' => 'fa fa-circle-o', 'url' => ['/type'],],
                            ['label' => Yii::t('app', 'Create Type'), 'icon' => 'fa fa-circle-o', 'url' => ['/type/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Tour Address'),
                        'icon' => 'fa fa-asterisk',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Tour Address'), 'icon' => 'fa fa-circle-o', 'url' => ['/tour-address'],],
                            ['label' => Yii::t('app', 'Create Tour Address'), 'icon' => 'fa fa-circle-o', 'url' => ['/tour-address/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Tour Type'),
                        'icon' => 'fa fa-asterisk',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Tour Type'), 'icon' => 'fa fa-circle-o', 'url' => ['/tour-type'],],
                            ['label' => Yii::t('app', 'Create Tour Type'), 'icon' => 'fa fa-circle-o', 'url' => ['/tour-type/create'],],
                        ],
                    ],
                    
                    ['label' => 'Login', 'icon' => 'fa  fa-sign-out', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
