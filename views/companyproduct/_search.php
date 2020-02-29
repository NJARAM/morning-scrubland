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
    ]);
     ?>
<div class="row ">   
<div class="col-md-10 ">   

</div>
<div class="col-md-2 ">   
<?= $form->field($model, 'globalsearch')->textInput()->label('Search Box') ?>
</div>
</div>

   
 

    <?php ActiveForm::end(); ?>

</div>
