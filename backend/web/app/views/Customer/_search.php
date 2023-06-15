<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\CustomerSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'sr') ?>

    <?= $form->field($model, 'application_ID') ?>

    <?= $form->field($model, 'crm_no') ?>

    <?= $form->field($model, 'created_on') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'branch_ID') ?>

    <?php // echo $form->field($model, 'filer') ?>

    <?php // echo $form->field($model, 'ntn') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'middle_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'cnic_number') ?>

    <?php // echo $form->field($model, 'cnic_issue_date') ?>

    <?php // echo $form->field($model, 'cnic_expiry_date') ?>

    <?php // echo $form->field($model, 'mobile_num') ?>

    <?php // echo $form->field($model, 'residence_phn') ?>

    <?php // echo $form->field($model, 'official_phn') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'family_id') ?>

    <?php // echo $form->field($model, 'father_first_name') ?>

    <?php // echo $form->field($model, 'father_middle_name') ?>

    <?php // echo $form->field($model, 'father_last_name') ?>

    <?php // echo $form->field($model, 'spouse_name') ?>

    <?php // echo $form->field($model, 'spouse_last_name') ?>

    <?php // echo $form->field($model, 'spouse_middle_name') ?>

    <?php // echo $form->field($model, 'mother_name') ?>

    <?php // echo $form->field($model, 'mother_middle_name') ?>

    <?php // echo $form->field($model, 'mother_last_name') ?>

    <?php // echo $form->field($model, 'next_kin_name') ?>

    <?php // echo $form->field($model, 'relationship') ?>

    <?php // echo $form->field($model, 'next_kin_nic') ?>

    <?php // echo $form->field($model, 'next_kin_b_form') ?>

    <?php // echo $form->field($model, 'next_kin_phn') ?>

    <?php // echo $form->field($model, 'next_kin_address') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'qualification_name') ?>

    <?php // echo $form->field($model, 'housing_type') ?>

    <?php // echo $form->field($model, 'dependent_members') ?>

    <?php // echo $form->field($model, 'residing_date') ?>

    <?php // echo $form->field($model, 'name_of_org') ?>

    <?php // echo $form->field($model, 'nature_of_employment') ?>

    <?php // echo $form->field($model, 'nature_of_business') ?>

    <?php // echo $form->field($model, 'ownership_type') ?>

    <?php // echo $form->field($model, 'business_type') ?>

    <?php // echo $form->field($model, 'residence_village_name') ?>

    <?php // echo $form->field($model, 'residence_address') ?>

    <?php // echo $form->field($model, 'residence_tehsil') ?>

    <?php // echo $form->field($model, 'residence_city_district') ?>

    <?php // echo $form->field($model, 'residence_elec_ref') ?>

    <?php // echo $form->field($model, 'residence_sui_gas_ref') ?>

    <?php // echo $form->field($model, 'perminent_address') ?>

    <?php // echo $form->field($model, 'perminent_tehsil') ?>

    <?php // echo $form->field($model, 'perminent_city_district') ?>

    <?php // echo $form->field($model, 'perminent_elec_ref') ?>

    <?php // echo $form->field($model, 'perminent_sui_gas_ref') ?>

    <?php // echo $form->field($model, 'perminent_village_name') ?>

    <?php // echo $form->field($model, 'business_village_name') ?>

    <?php // echo $form->field($model, 'business_sui_gas_ref') ?>

    <?php // echo $form->field($model, 'business_elec_ref') ?>

    <?php // echo $form->field($model, 'business_city_district') ?>

    <?php // echo $form->field($model, 'business_tehsil') ?>

    <?php // echo $form->field($model, 'business_address') ?>

    <?php // echo $form->field($model, 'religion_other') ?>

    <?php // echo $form->field($model, 'organization_name') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'business_name') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'monthly_salary') ?>

    <?php // echo $form->field($model, 'preferred_mail') ?>

    <?php // echo $form->field($model, 'approved') ?>

    <?php // echo $form->field($model, 'sms_notification')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
