<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Deposit $model */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Deposits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deposit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID], [
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
            'sr',
            'date',
            'timestamp',
            'application_ID',
            'account_no',
            'crm_no',
            'branch_ID',
            'transaction_no',
            'created_by',
            'created_on',
            'instrument',
            'amount',
            'cheque_no',
            'dated',
            'cheque_branch_name',
            'cheque_branch_code',
            'cheque_account_title',
            'cheque_account_no',
            'description:ntext',
            'account_ID',
            'deposit_fee',
            'chq_account_ID',
            'instrument_no',
            'approved',
            'deposit_branch_name',
            'deposit_branch_code',
            'posted',
            'current_balance',
            'is_run_profit',
            'post_run_ID',
            'interest',
            'other',
            'other_amount',
            'account_type',
            'loan_sanctioned:boolean',
            'is_dividend:boolean',
            'profit_run_ID',
            'ib_head_ofc_account_ID',
            'ib_head_ofc_instrument_ID',
            'ib_head_ofc_branch_ID',
            'ib_account_ID',
            'ib_instrument_ID',
            'ib_branch_ID',
            'ib_reference_ID',
        ],
    ]) ?>

</div>
