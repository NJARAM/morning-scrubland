<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompanyproductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companyproduct-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'lpo_number') ?>

    <?= $form->field($model, 'lpo_date') ?>

    <?= $form->field($model, 'item_description') ?>

    <?= $form->field($model, 'unit_of_issue') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'total_cost') ?>

    <?php // echo $form->field($model, 'PL4A_No') ?>

    <?php // echo $form->field($model, 'Item_category') ?>

    <?php // echo $form->field($model, 'Vehicle_No') ?>

    <?php // echo $form->field($model, 'Requisioner') ?>

    <?php // echo $form->field($model, 'Directors') ?>

    <?php // echo $form->field($model, 'Department') ?>

    <?php // echo $form->field($model, 'Authorised_By') ?>

    <?php // echo $form->field($model, 'Procurement_Method') ?>

    <?php // echo $form->field($model, 'Supplier') ?>

    <?php // echo $form->field($model, 'Invoice_no') ?>

    <?php // echo $form->field($model, 'Scheme_Applied') ?>

    <?php // echo $form->field($model, 'AGPO_No') ?>

    <?php // echo $form->field($model, 'Invoice_Date') ?>

    <?php // echo $form->field($model, 'Invoice_Amount') ?>

    <?php // echo $form->field($model, 'Delivery_Note_No') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Quote') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
