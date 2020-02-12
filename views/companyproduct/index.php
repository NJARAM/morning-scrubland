<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompanyproductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Add product';
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
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'lpo_number',
            'lpo_date',
            'item_description',
            'unit_of_issue',
            //'quantity',
            //'unit_price',
            //'total_cost',
            //'PL4A_No',
            //'Item_category',
            //'Vehicle_No',
            //'Requisioner',
            //'Directors',
            //'Department',
            //'Authorised_By',
            //'Procurement_Method',
            //'Supplier',
            //'Invoice_no',
            //'Scheme_Applied',
            //'AGPO_No',
            //'Invoice_Date',
            //'Invoice_Amount',
            //'Delivery_Note_No',
            //'Status',
            //'Quote',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


    <table class="table table-striped" id="station-list">
    </table>
    <script>
        $(function(){
            $('#station-list').DataTable( {
                data: <?=json_encode($modelArray)?>,
                dom: 'Bfrtip',
                "pageLength": 20,
                order: [[ 0, "desc" ]],
                /*drawCallback: function () {
                  var api = this.api();
                  $( api.table().footer() ).html(
                    api.column( 2, {page:'current'} ).data().sum()
                  );
                },*/
                buttons: [
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [0,1,2,3,4]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0,1,2,3,4]
                        }
                    }
                ],
                columnDefs: [
                    {
                        /* "targets": [ 0 ],
                        "visible": false, Date Company Name Description Audit Category
                        "searchable": false*/
                    },
                ],
                columns: [
                    { title: "#" },
                    { title: "LPO NUMBER" },
                    { title: "LPO DATE" },
                    //{ title: "Project Type" },
                    { title: "ITEM DESCRIPTION" },
                    { title: "UNIT OF ISSUE" },
                    { title: "QUANTITY" },
                    { title: "UNIT PRICE" },
                    { title: "TOTAL COST" },
                    { title: "" },

                ]
            } );

        });
    </script>

</div>
