<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Customer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sr')->textInput() ?>

    <?= $form->field($model, 'application_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'crm_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filer')->textInput() ?>

    <?= $form->field($model, 'ntn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnic_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnic_issue_date')->textInput() ?>

    <?= $form->field($model, 'cnic_expiry_date')->textInput() ?>

    <?= $form->field($model, 'mobile_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence_phn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'official_phn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'marital_status')->textInput() ?>

    <?= $form->field($model, 'religion')->textInput() ?>

    <?= $form->field($model, 'family_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spouse_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spouse_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spouse_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_kin_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_kin_nic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_kin_b_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_kin_phn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_kin_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'education')->textInput() ?>

    <?= $form->field($model, 'qualification_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'housing_type')->textInput() ?>

    <?= $form->field($model, 'dependent_members')->textInput() ?>

    <?= $form->field($model, 'residing_date')->textInput() ?>

    <?= $form->field($model, 'name_of_org')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nature_of_employment')->textInput() ?>

    <?= $form->field($model, 'nature_of_business')->textInput() ?>

    <?= $form->field($model, 'ownership_type')->textInput() ?>

    <?= $form->field($model, 'business_type')->textInput() ?>

    <?= $form->field($model, 'residence_village_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'residence_tehsil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence_city_district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence_elec_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence_sui_gas_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perminent_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'perminent_tehsil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perminent_city_district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perminent_elec_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perminent_sui_gas_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perminent_village_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_village_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_sui_gas_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_elec_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_city_district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_tehsil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'religion_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'monthly_salary')->textInput() ?>

    <?= $form->field($model, 'preferred_mail')->textInput() ?>

    <?= $form->field($model, 'approved')->textInput() ?>

    <?= $form->field($model, 'sms_notification')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
