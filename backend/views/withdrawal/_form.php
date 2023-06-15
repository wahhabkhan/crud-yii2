<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Withdrawal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="withdrawal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sr')->textInput() ?>

    <?= $form->field($model, 'application_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'crm_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transaction_no')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'cheque_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dated')->textInput() ?>

    <?= $form->field($model, 'cheque_branch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_branch_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'branch_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'withdraw_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approved')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'current_balance')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'post_run_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_account_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_no_withdrawal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_date')->textInput() ?>

    <?= $form->field($model, 'cheque_given_account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_given_account_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instrument')->textInput() ?>

    <?= $form->field($model, 'ib_head_ofc_account_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ib_head_ofc_instrument_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ib_head_ofc_branch_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ib_account_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ib_instrument_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ib_branch_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ib_reference_ID')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
