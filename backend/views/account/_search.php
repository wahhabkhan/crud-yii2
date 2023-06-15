<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AccountSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="account-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'sr') ?>

    <?= $form->field($model, 'account_types_ID') ?>

    <?= $form->field($model, 'customer_ID') ?>

    <?= $form->field($model, 'account_number') ?>

    <?php // echo $form->field($model, 'account_title') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'effective_from') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'application_ID') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'product_ID') ?>

    <?php // echo $form->field($model, 'scheme_ID') ?>

    <?php // echo $form->field($model, 'approved') ?>

    <?php // echo $form->field($model, 'branch_ID') ?>

    <?php // echo $form->field($model, 'supporting_document') ?>

    <?php // echo $form->field($model, 'user_image') ?>

    <?php // echo $form->field($model, 'signature_image') ?>

    <?php // echo $form->field($model, 'dividend_account_ID') ?>

    <?php // echo $form->field($model, 'introducer_ID') ?>

    <?php // echo $form->field($model, 'legacy_account_number') ?>

    <?php // echo $form->field($model, 'user_blob') ?>

    <?php // echo $form->field($model, 'profit_run_date') ?>

    <?php // echo $form->field($model, 'membership_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
