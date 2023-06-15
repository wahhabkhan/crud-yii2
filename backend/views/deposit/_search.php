<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\DepositSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="deposit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'sr') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'timestamp') ?>

    <?= $form->field($model, 'application_ID') ?>

    <?php // echo $form->field($model, 'account_no') ?>

    <?php // echo $form->field($model, 'crm_no') ?>

    <?php // echo $form->field($model, 'branch_ID') ?>

    <?php // echo $form->field($model, 'transaction_no') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <?php // echo $form->field($model, 'instrument') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'cheque_no') ?>

    <?php // echo $form->field($model, 'dated') ?>

    <?php // echo $form->field($model, 'cheque_branch_name') ?>

    <?php // echo $form->field($model, 'cheque_branch_code') ?>

    <?php // echo $form->field($model, 'cheque_account_title') ?>

    <?php // echo $form->field($model, 'cheque_account_no') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'account_ID') ?>

    <?php // echo $form->field($model, 'deposit_fee') ?>

    <?php // echo $form->field($model, 'chq_account_ID') ?>

    <?php // echo $form->field($model, 'instrument_no') ?>

    <?php // echo $form->field($model, 'approved') ?>

    <?php // echo $form->field($model, 'deposit_branch_name') ?>

    <?php // echo $form->field($model, 'deposit_branch_code') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'current_balance') ?>

    <?php // echo $form->field($model, 'is_run_profit') ?>

    <?php // echo $form->field($model, 'post_run_ID') ?>

    <?php // echo $form->field($model, 'interest') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'other_amount') ?>

    <?php // echo $form->field($model, 'account_type') ?>

    <?php // echo $form->field($model, 'loan_sanctioned')->checkbox() ?>

    <?php // echo $form->field($model, 'is_dividend')->checkbox() ?>

    <?php // echo $form->field($model, 'profit_run_ID') ?>

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
