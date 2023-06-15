<?php

use common\models\Account;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\AccountSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Account', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'sr',
            'account_types_ID',
            'customer_ID',
            'account_number',
            //'account_title',
            //'status',
            //'effective_from',
            //'is_deleted',
            //'application_ID',
            //'created_by',
            //'created_on',
            //'timestamp',
            //'product_ID',
            //'scheme_ID',
            //'approved',
            //'branch_ID',
            //'supporting_document',
            //'user_image',
            //'signature_image',
            //'dividend_account_ID',
            //'introducer_ID',
            //'legacy_account_number',
            //'user_blob',
            //'profit_run_date',
            //'membership_number',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Account $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
