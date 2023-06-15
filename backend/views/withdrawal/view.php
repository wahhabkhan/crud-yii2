<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Withdrawal $model */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Withdrawals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="withdrawal-view">

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
            'application_ID',
            'account_no',
            'crm_no',
            'transaction_no',
            'date',
            'branch_name',
            'branch_code',
            'amount',
            'cheque_no',
            'dated',
            'cheque_branch_name',
            'cheque_branch_code',
            'description:ntext',
            'branch_ID',
            'account_ID',
            'withdraw_fee',
            'created_on',
            'created_by',
            'approved',
            'posted',
            'current_balance',
            'timestamp',
            'post_run_ID',
            'account_type',
            'cheque_account_no',
            'cheque_account_title',
            'cheque_no_withdrawal',
            'cheque_date',
            'cheque_given_account_no',
            'cheque_given_account_title',
            'instrument',
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
