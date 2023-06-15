<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string $ID
 * @property int|null $sr
 * @property string $application_ID
 * @property string|null $crm_no
 * @property string|null $created_on
 * @property string|null $created_by
 * @property string $branch_ID
 * @property int|null $filer
 * @property string|null $ntn
 * @property int|null $title
 * @property string|null $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property string|null $cnic_number
 * @property string|null $cnic_issue_date
 * @property string|null $cnic_expiry_date
 * @property string|null $mobile_num
 * @property string|null $residence_phn
 * @property string|null $official_phn
 * @property string|null $date_of_birth
 * @property int|null $marital_status
 * @property int|null $religion
 * @property string|null $family_id
 * @property string|null $father_first_name
 * @property string|null $father_middle_name
 * @property string|null $father_last_name
 * @property string|null $spouse_name
 * @property string|null $spouse_last_name
 * @property string|null $spouse_middle_name
 * @property string|null $mother_name
 * @property string|null $mother_middle_name
 * @property string|null $mother_last_name
 * @property string|null $next_kin_name
 * @property string|null $relationship
 * @property string|null $next_kin_nic
 * @property string|null $next_kin_b_form
 * @property string|null $next_kin_phn
 * @property string|null $next_kin_address
 * @property string|null $note
 * @property int|null $education
 * @property string|null $qualification_name
 * @property int|null $housing_type
 * @property int|null $dependent_members
 * @property string|null $residing_date
 * @property string|null $name_of_org
 * @property int|null $nature_of_employment
 * @property int|null $nature_of_business
 * @property int|null $ownership_type
 * @property int|null $business_type
 * @property string|null $residence_village_name
 * @property string|null $residence_address
 * @property string|null $residence_tehsil
 * @property string|null $residence_city_district
 * @property string|null $residence_elec_ref
 * @property string|null $residence_sui_gas_ref
 * @property string|null $perminent_address
 * @property string|null $perminent_tehsil
 * @property string|null $perminent_city_district
 * @property string|null $perminent_elec_ref
 * @property string|null $perminent_sui_gas_ref
 * @property string|null $perminent_village_name
 * @property string|null $business_village_name
 * @property string|null $business_sui_gas_ref
 * @property string|null $business_elec_ref
 * @property string|null $business_city_district
 * @property string|null $business_tehsil
 * @property string|null $business_address
 * @property string|null $religion_other
 * @property string|null $organization_name
 * @property string|null $designation
 * @property string|null $business_name
 * @property float|null $duration
 * @property float|null $monthly_salary
 * @property int|null $preferred_mail
 * @property int|null $approved
 * @property bool|null $sms_notification
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'application_ID', 'branch_ID'], 'required'],
            [['sr', 'filer', 'title', 'marital_status', 'religion', 'education', 'housing_type', 'dependent_members', 'nature_of_employment', 'nature_of_business', 'ownership_type', 'business_type', 'preferred_mail', 'approved'], 'integer'],
            [['created_on', 'cnic_issue_date', 'cnic_expiry_date', 'date_of_birth', 'residing_date'], 'safe'],
            [['next_kin_address', 'note', 'residence_address', 'perminent_address', 'business_address'], 'string'],
            [['duration', 'monthly_salary'], 'number'],
            [['sms_notification'], 'boolean'],
            [['ID', 'application_ID', 'created_by', 'branch_ID', 'designation'], 'string', 'max' => 64],
            [['crm_no', 'ntn'], 'string', 'max' => 32],
            [['first_name'], 'string', 'max' => 256],
            [['middle_name', 'last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'spouse_name', 'spouse_last_name', 'spouse_middle_name', 'mother_name', 'mother_middle_name', 'mother_last_name', 'next_kin_name', 'residence_village_name', 'residence_tehsil', 'residence_city_district', 'residence_elec_ref', 'residence_sui_gas_ref', 'perminent_tehsil', 'perminent_city_district', 'perminent_elec_ref', 'perminent_sui_gas_ref', 'perminent_village_name', 'business_village_name', 'business_sui_gas_ref', 'business_elec_ref', 'business_city_district', 'business_tehsil'], 'string', 'max' => 100],
            [['cnic_number', 'next_kin_nic', 'next_kin_b_form', 'next_kin_phn'], 'string', 'max' => 45],
            [['mobile_num', 'residence_phn', 'official_phn'], 'string', 'max' => 20],
            [['family_id'], 'string', 'max' => 15],
            [['relationship'], 'string', 'max' => 50],
            [['qualification_name', 'religion_other'], 'string', 'max' => 200],
            [['name_of_org'], 'string', 'max' => 150],
            [['organization_name', 'business_name'], 'string', 'max' => 264],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'sr' => 'Sr',
            'application_ID' => 'Application ID',
            'crm_no' => 'Crm No',
            'created_on' => 'Created On',
            'created_by' => 'Created By',
            'branch_ID' => 'Branch ID',
            'filer' => 'Filer',
            'ntn' => 'Ntn',
            'title' => 'Title',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'cnic_number' => 'Cnic Number',
            'cnic_issue_date' => 'Cnic Issue Date',
            'cnic_expiry_date' => 'Cnic Expiry Date',
            'mobile_num' => 'Mobile Num',
            'residence_phn' => 'Residence Phn',
            'official_phn' => 'Official Phn',
            'date_of_birth' => 'Date Of Birth',
            'marital_status' => 'Marital Status',
            'religion' => 'Religion',
            'family_id' => 'Family ID',
            'father_first_name' => 'Father First Name',
            'father_middle_name' => 'Father Middle Name',
            'father_last_name' => 'Father Last Name',
            'spouse_name' => 'Spouse Name',
            'spouse_last_name' => 'Spouse Last Name',
            'spouse_middle_name' => 'Spouse Middle Name',
            'mother_name' => 'Mother Name',
            'mother_middle_name' => 'Mother Middle Name',
            'mother_last_name' => 'Mother Last Name',
            'next_kin_name' => 'Next Kin Name',
            'relationship' => 'Relationship',
            'next_kin_nic' => 'Next Kin Nic',
            'next_kin_b_form' => 'Next Kin B Form',
            'next_kin_phn' => 'Next Kin Phn',
            'next_kin_address' => 'Next Kin Address',
            'note' => 'Note',
            'education' => 'Education',
            'qualification_name' => 'Qualification Name',
            'housing_type' => 'Housing Type',
            'dependent_members' => 'Dependent Members',
            'residing_date' => 'Residing Date',
            'name_of_org' => 'Name Of Org',
            'nature_of_employment' => 'Nature Of Employment',
            'nature_of_business' => 'Nature Of Business',
            'ownership_type' => 'Ownership Type',
            'business_type' => 'Business Type',
            'residence_village_name' => 'Residence Village Name',
            'residence_address' => 'Residence Address',
            'residence_tehsil' => 'Residence Tehsil',
            'residence_city_district' => 'Residence City District',
            'residence_elec_ref' => 'Residence Elec Ref',
            'residence_sui_gas_ref' => 'Residence Sui Gas Ref',
            'perminent_address' => 'Perminent Address',
            'perminent_tehsil' => 'Perminent Tehsil',
            'perminent_city_district' => 'Perminent City District',
            'perminent_elec_ref' => 'Perminent Elec Ref',
            'perminent_sui_gas_ref' => 'Perminent Sui Gas Ref',
            'perminent_village_name' => 'Perminent Village Name',
            'business_village_name' => 'Business Village Name',
            'business_sui_gas_ref' => 'Business Sui Gas Ref',
            'business_elec_ref' => 'Business Elec Ref',
            'business_city_district' => 'Business City District',
            'business_tehsil' => 'Business Tehsil',
            'business_address' => 'Business Address',
            'religion_other' => 'Religion Other',
            'organization_name' => 'Organization Name',
            'designation' => 'Designation',
            'business_name' => 'Business Name',
            'duration' => 'Duration',
            'monthly_salary' => 'Monthly Salary',
            'preferred_mail' => 'Preferred Mail',
            'approved' => 'Approved',
            'sms_notification' => 'Sms Notification',
        ];
    }
}
