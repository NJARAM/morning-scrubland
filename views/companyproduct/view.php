<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Companyproduct */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Item', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="companyproduct-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'lpo_number',
            'lpo_date',
            'item_description',
            'unit_of_issue',
            'quantity',
            'unit_price',
            'total_cost',
            'PL4A_No',
            'Item_category',
            'Vehicle_No',
            'Requisioner',
            'Directors',
            'Department',
            'Authorised_By',
            'Procurement_Method',
            'Supplier',
            'Invoice_no',
            'Scheme_Applied',
            'AGPO_No',
            'Invoice_Date',
            'Invoice_Amount',
            'Delivery_Note_No',
            'Status',
            'Quote',
        ],
    ]) ?>

</div>
