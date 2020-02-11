<?php

if(Yii::$app->user->identity->guest== 1){

    $menuItems = [

//        ['label' => 'Home', 'url' => ['/site/index']],
//
//        ['label' => 'About', 'url' => ['/site/about']],

        ['label' => 'Login', 'url' => ['/site/login']],



    ];

}else{

    $menuItems = [

        ['label' => 'Items', 'url' => ['/companyproduct/index']],





    ];

}



NavBar::begin([

    'brandLabel' => 'POG',

    'brandUrl' => Yii::$app->homeUrl,

    'options' => [

        'class' => 'navbar-inverse navbar-fixed-top',

    ],

]);

echo Nav::widget([

    'options' => ['class' => 'navbar-nav navbar-right'],

    'items' => $menuItems,

    Yii::$app->user->isGuest ?

        ['label' => 'Login', 'url' => ['/site/login']] :

        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',

            'url' => ['/site/logout'],

            'linkOptions' => ['data-method' => 'post']],

]);

NavBar::end();

?>


