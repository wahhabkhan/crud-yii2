<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Customer;

/**
 * CustomerSearch represents the model behind the search form of `common\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'application_ID', 'crm_no', 'created_on', 'created_by', 'branch_ID', 'ntn', 'first_name', 'middle_name', 'last_name', 'cnic_number', 'cnic_issue_date', 'cnic_expiry_date', 'mobile_num', 'residence_phn', 'official_phn', 'date_of_birth', 'family_id', 'father_first_name', 'father_middle_name', 'father_last_name', 'spouse_name', 'spouse_last_name', 'spouse_middle_name', 'mother_name', 'mother_middle_name', 'mother_last_name', 'next_kin_name', 'relationship', 'next_kin_nic', 'next_kin_b_form', 'next_kin_phn', 'next_kin_address', 'note', 'qualification_name', 'residing_date', 'name_of_org', 'residence_village_name', 'residence_address', 'residence_tehsil', 'residence_city_district', 'residence_elec_ref', 'residence_sui_gas_ref', 'perminent_address', 'perminent_tehsil', 'perminent_city_district', 'perminent_elec_ref', 'perminent_sui_gas_ref', 'perminent_village_name', 'business_village_name', 'business_sui_gas_ref', 'business_elec_ref', 'business_city_district', 'business_tehsil', 'business_address', 'religion_other', 'organization_name', 'designation', 'business_name'], 'safe'],
            [['sr', 'filer', 'title', 'marital_status', 'religion', 'education', 'housing_type', 'dependent_members', 'nature_of_employment', 'nature_of_business', 'ownership_type', 'business_type', 'preferred_mail', 'approved'], 'integer'],
            [['duration', 'monthly_salary'], 'number'],
            [['sms_notification'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Customer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'sr' => $this->sr,
            'created_on' => $this->created_on,
            'filer' => $this->filer,
            'title' => $this->title,
            'cnic_issue_date' => $this->cnic_issue_date,
            'cnic_expiry_date' => $this->cnic_expiry_date,
            'date_of_birth' => $this->date_of_birth,
            'marital_status' => $this->marital_status,
            'religion' => $this->religion,
            'education' => $this->education,
            'housing_type' => $this->housing_type,
            'dependent_members' => $this->dependent_members,
            'residing_date' => $this->residing_date,
            'nature_of_employment' => $this->nature_of_employment,
            'nature_of_business' => $this->nature_of_business,
            'ownership_type' => $this->ownership_type,
            'business_type' => $this->business_type,
            'duration' => $this->duration,
            'monthly_salary' => $this->monthly_salary,
            'preferred_mail' => $this->preferred_mail,
            'approved' => $this->approved,
            'sms_notification' => $this->sms_notification,
        ]);

        $query->andFilterWhere(['like', 'ID', $this->ID])
            ->andFilterWhere(['like', 'application_ID', $this->application_ID])
            ->andFilterWhere(['like', 'crm_no', $this->crm_no])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'branch_ID', $this->branch_ID])
            ->andFilterWhere(['like', 'ntn', $this->ntn])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'cnic_number', $this->cnic_number])
            ->andFilterWhere(['like', 'mobile_num', $this->mobile_num])
            ->andFilterWhere(['like', 'residence_phn', $this->residence_phn])
            ->andFilterWhere(['like', 'official_phn', $this->official_phn])
            ->andFilterWhere(['like', 'family_id', $this->family_id])
            ->andFilterWhere(['like', 'father_first_name', $this->father_first_name])
            ->andFilterWhere(['like', 'father_middle_name', $this->father_middle_name])
            ->andFilterWhere(['like', 'father_last_name', $this->father_last_name])
            ->andFilterWhere(['like', 'spouse_name', $this->spouse_name])
            ->andFilterWhere(['like', 'spouse_last_name', $this->spouse_last_name])
            ->andFilterWhere(['like', 'spouse_middle_name', $this->spouse_middle_name])
            ->andFilterWhere(['like', 'mother_name', $this->mother_name])
            ->andFilterWhere(['like', 'mother_middle_name', $this->mother_middle_name])
            ->andFilterWhere(['like', 'mother_last_name', $this->mother_last_name])
            ->andFilterWhere(['like', 'next_kin_name', $this->next_kin_name])
            ->andFilterWhere(['like', 'relationship', $this->relationship])
            ->andFilterWhere(['like', 'next_kin_nic', $this->next_kin_nic])
            ->andFilterWhere(['like', 'next_kin_b_form', $this->next_kin_b_form])
            ->andFilterWhere(['like', 'next_kin_phn', $this->next_kin_phn])
            ->andFilterWhere(['like', 'next_kin_address', $this->next_kin_address])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'qualification_name', $this->qualification_name])
            ->andFilterWhere(['like', 'name_of_org', $this->name_of_org])
            ->andFilterWhere(['like', 'residence_village_name', $this->residence_village_name])
            ->andFilterWhere(['like', 'residence_address', $this->residence_address])
            ->andFilterWhere(['like', 'residence_tehsil', $this->residence_tehsil])
            ->andFilterWhere(['like', 'residence_city_district', $this->residence_city_district])
            ->andFilterWhere(['like', 'residence_elec_ref', $this->residence_elec_ref])
            ->andFilterWhere(['like', 'residence_sui_gas_ref', $this->residence_sui_gas_ref])
            ->andFilterWhere(['like', 'perminent_address', $this->perminent_address])
            ->andFilterWhere(['like', 'perminent_tehsil', $this->perminent_tehsil])
            ->andFilterWhere(['like', 'perminent_city_district', $this->perminent_city_district])
            ->andFilterWhere(['like', 'perminent_elec_ref', $this->perminent_elec_ref])
            ->andFilterWhere(['like', 'perminent_sui_gas_ref', $this->perminent_sui_gas_ref])
            ->andFilterWhere(['like', 'perminent_village_name', $this->perminent_village_name])
            ->andFilterWhere(['like', 'business_village_name', $this->business_village_name])
            ->andFilterWhere(['like', 'business_sui_gas_ref', $this->business_sui_gas_ref])
            ->andFilterWhere(['like', 'business_elec_ref', $this->business_elec_ref])
            ->andFilterWhere(['like', 'business_city_district', $this->business_city_district])
            ->andFilterWhere(['like', 'business_tehsil', $this->business_tehsil])
            ->andFilterWhere(['like', 'business_address', $this->business_address])
            ->andFilterWhere(['like', 'religion_other', $this->religion_other])
            ->andFilterWhere(['like', 'organization_name', $this->organization_name])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'business_name', $this->business_name]);

        return $dataProvider;
    }
}
