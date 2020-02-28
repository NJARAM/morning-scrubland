<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;



/* @var $this yii\web\View */
/* @var $model app\models\Companyproduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companyproduct-form">

    <?php $form = ActiveForm::begin(); ?>.
    <div class="row" >

    </div>

    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'lpo_number')->textInput() ?>
        </div>

        <div class="col-md-6" >
            <?php echo '<label class="control-label">LPO Date</label>';
            echo DatePicker::widget([
                'model' => $model,
                'attribute' => 'lpo_date',
                // 'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
            ]);?>
        </div>

    </div>

    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'item_description')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'unit_of_issue')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'quantity')->textInput() ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'unit_price')->textInput() ?>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6" >
            <?='';// $form->field($model, 'total_cost')->textInput() ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'PL4A_No')->textInput() ?>
        </div>

    </div>




    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'Item_category')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'Vehicle_No')->textInput() ?>
        </div>

    </div>


    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'Requisioner')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'Directors')->textInput(['maxlength' => true]) ?>
        </div>

    </div>


    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'Department')
                ->dropdownList(['1' => 'Tourism', '2' => 'AD','3' => 'Rhino', '4' => 'PAC','5' => 'Buildings', '6' => 'Fence','7' => 'Procurement', '8' => 'Accounts','9' => 'Human Capital', '10' => 'Roads','11' => 'Customer Care', '12' => 'Administration','13' => 'ICT', '14' => 'Telecom','15' => 'RPU', '16' => 'Intelligence','17' => 'Education', '18' => 'Research', '19' => 'Ngong', '20' => 'Machakos','21' => 'Makueni', '22' => 'Ngurumani','23' => 'Workshop', '24' => 'Eastgate','25' => 'Other'], ['prompt' => '---Select Data---']) ?>
        </div>


        <div class="col-md-6" >
            <?= $form->field($model, 'Supplier')
                ->dropdownList(['1' => 'Admiral trading co. ltd', '2' => 'Toyota Kenya Limited','3' => 'Merida Spares', '4' => ' Dapny Limited','5' => 'National Oil Corporation,', '6' => ' Duke energy products & Company','7' => ' Starbell Agencies', '8' => 'Tanar Suppliers','9' => 'Upper Land petrol station', '10' => 'Aquara Aqencies','11' => 'Sagoo Holdings', '12' => 'City engineering hydraulic','13' => ' Cherik enterprises', '14' => 'Wire products ltd','15' => 'Kenol Kobil', '16' => 'Kansai plascom','17' => 'Samco auto parts', '18' => 'Autostyle Performance Limited', '19' => 'Nairobi Crankshaft center', '20' => 'Ministry of transport','21' => 'Jaidah motors ltd', '22' => 'E. A drillicon ltd','23' => 'Chloride Oxide', '24' => 'Badgas autospares','25' => 'Andy Ventures','26' => 'Anitaan agencies','27' => 'Roots general suppliers','28' => ' Elwalk printers','29' => 'Other'], ['prompt' => '---Select Data---']) ?>
        </div>


    </div>

    <div class="row"> 

    <div class="col-md-6" id="OtherDeparmentsId" style="display: none">
            <?= $form->field($model, 'OtherDeparments')->textInput(['maxlength' => true]) ?>
        </div>

        <div  class="col-md-6" id="OtherSuppliersId" style="display: none">
            <?= $form->field($model, 'OtherSuppliers')->textInput(['maxlength' => true]) ?>
        </div>
    
    </div>


    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'Procurement_Method') ->dropdownList(['1' => 'Open Tender', '2' => 'Low value','3' => 'Profoma', '4' => 'Restricted Tender','5' => 'Direct Procurement', '6' => 'Force Account','7' => 'Request for Quotation','8' => 'Other'], ['prompt' => '---Select Data---']) ?>
        </div>


        <div class="col-md-6" >
            <?= $form->field($model, 'Authorised_By')->textInput() ?>
        </div>

    </div>


    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'Invoice_no')->textInput() ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'Scheme_Applied') ->dropdownList(['1' => 'Youth', '2' => 'Women','3' => 'PWD', '4' => 'Open to All','5' => 'Other'], ['prompt' => '---Select Data---']) ?>

        </div>

    </div>



    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'AGPO_No')->textInput() ?>
        </div>

        <div class="col-md-6" >
            <?php echo '<label class="control-label">Invoice Date</label>';
                                          echo DatePicker::widget([
                                                              'model' => $model,
                                                               'attribute' => 'Invoice_Date',
                                                                 //'language' => 'ru',
                                                          'dateFormat' => 'yyyy-MM-dd',
]);?>
        </div>

    </div>



    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'Invoice_Amount')->textInput() ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'Delivery_Note_No')->textInput() ?>
        </div>

    </div>


    <div class="row" >
        <div class="col-md-6" >
            <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6" >
            <?= $form->field($model, 'Quote')->textInput(['maxlength' => true]) ?>
        </div>

    </div>






    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<script>
    $(document).ready(function(){
        $('#companyproduct-supplier').on('change', function(e) {
            var supplier= $('#companyproduct-supplier').val();
            if(supplier==29)
            {
                $('#OtherSuppliersId').show();
            }
            else{
                $('#OtherSuppliersId').hide();

            }

        });
    });



    $(document).ready(function(){
        $('#companyproduct-department').on('change', function(e) {
            var Department= $('#companyproduct-department').val();
            if(Department==25)
            {
                $('#OtherDeparmentsId').show();
            }
            else{
                $('#OtherDeparmentsId').hide();
            }
        });
    });
</script>

