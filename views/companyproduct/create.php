<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Companyproduct */

$this->title = 'Add Item';
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companyproduct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
