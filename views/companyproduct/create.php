<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Companyproduct */

$this->title = 'Add product';
$this->params['breadcrumbs'][] = ['label' => 'products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companyproduct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
