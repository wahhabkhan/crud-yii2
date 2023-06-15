<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Account $model */
/** @var yii\widgets\ActiveForm $form */
?>



<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sr')->textInput() ?>

    <?= $form->field($model, 'account_types_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'effective_from')->textInput() ?>

    <?= $form->field($model, 'is_deleted')->textInput() ?>

    <?= $form->field($model, 'application_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'product_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scheme_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approved')->textInput() ?>

    <?= $form->field($model, 'branch_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supporting_document')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'signature_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dividend_account_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'introducer_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legacy_account_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_blob')->textInput() ?>

    <?= $form->field($model, 'profit_run_date')->textInput() ?>

    <?= $form->field($model, 'membership_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
