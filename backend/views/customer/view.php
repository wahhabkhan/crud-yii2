<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Customer $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="customer-view">

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
            'crm_no',
            'created_on',
            'created_by',
            'branch_ID',
            'filer',
            'ntn',
            'title',
            'first_name',
            'middle_name',
            'last_name',
            'cnic_number',
            'cnic_issue_date',
            'cnic_expiry_date',
            'mobile_num',
            'residence_phn',
            'official_phn',
            'date_of_birth',
            'marital_status',
            'religion',
            'family_id',
            'father_first_name',
            'father_middle_name',
            'father_last_name',
            'spouse_name',
            'spouse_last_name',
            'spouse_middle_name',
            'mother_name',
            'mother_middle_name',
            'mother_last_name',
            'next_kin_name',
            'relationship',
            'next_kin_nic',
            'next_kin_b_form',
            'next_kin_phn',
            'next_kin_address:ntext',
            'note:ntext',
            'education',
            'qualification_name',
            'housing_type',
            'dependent_members',
            'residing_date',
            'name_of_org',
            'nature_of_employment',
            'nature_of_business',
            'ownership_type',
            'business_type',
            'residence_village_name',
            'residence_address:ntext',
            'residence_tehsil',
            'residence_city_district',
            'residence_elec_ref',
            'residence_sui_gas_ref',
            'perminent_address:ntext',
            'perminent_tehsil',
            'perminent_city_district',
            'perminent_elec_ref',
            'perminent_sui_gas_ref',
            'perminent_village_name',
            'business_village_name',
            'business_sui_gas_ref',
            'business_elec_ref',
            'business_city_district',
            'business_tehsil',
            'business_address:ntext',
            'religion_other',
            'organization_name',
            'designation',
            'business_name',
            'duration',
            'monthly_salary',
            'preferred_mail',
            'approved',
            'sms_notification:boolean',
        ],
    ]) ?>

</div>
