<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\WithdrawalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="withdrawal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'sr') ?>

    <?= $form->field($model, 'application_ID') ?>

    <?= $form->field($model, 'account_no') ?>

    <?= $form->field($model, 'crm_no') ?>

    <?php // echo $form->field($model, 'transaction_no') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'branch_name') ?>

    <?php // echo $form->field($model, 'branch_code') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'cheque_no') ?>

    <?php // echo $form->field($model, 'dated') ?>

    <?php // echo $form->field($model, 'cheque_branch_name') ?>

    <?php // echo $form->field($model, 'cheque_branch_code') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'branch_ID') ?>

    <?php // echo $form->field($model, 'account_ID') ?>

    <?php // echo $form->field($model, 'withdraw_fee') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'approved') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'current_balance') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'post_run_ID') ?>

    <?php // echo $form->field($model, 'account_type') ?>

    <?php // echo $form->field($model, 'cheque_account_no') ?>

    <?php // echo $form->field($model, 'cheque_account_title') ?>

    <?php // echo $form->field($model, 'cheque_no_withdrawal') ?>

    <?php // echo $form->field($model, 'cheque_date') ?>

    <?php // echo $form->field($model, 'cheque_given_account_no') ?>

    <?php // echo $form->field($model, 'cheque_given_account_title') ?>

    <?php // echo $form->field($model, 'instrument') ?>

    <?php // echo $form->field($model, 'ib_head_ofc_account_ID') ?>

    <?php // echo $form->field($model, 'ib_head_ofc_instrument_ID') ?>

    <?php // echo $form->field($model, 'ib_head_ofc_branch_ID') ?>

    <?php // echo $form->field($model, 'ib_account_ID') ?>

    <?php // echo $form->field($model, 'ib_instrument_ID') ?>

    <?php // echo $form->field($model, 'ib_branch_ID') ?>

    <?php // echo $form->field($model, 'ib_reference_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
