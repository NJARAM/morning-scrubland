<?php

use yii\helpers\Html;
use yii\grid\GridView;
// use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompanyproductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companyproduct-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],

        ],

    ]); ?>

</div>
