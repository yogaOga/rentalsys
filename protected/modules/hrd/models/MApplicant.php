<?php

/**
 * This is the model class for table "m_applicant".
 *
 * The followings are the available columns in table 'm_applicant':
 * @property integer $id
 * @property string $applicant_no
 * @property string $first_name
 * @property string $last_name
 * @property string $nickname
 * @property string $birth_place
 * @property string $birth_date
 * @property string $gender
 * @property string $blood_type
 * @property string $nationality
 * @property string $street_address
 * @property integer $state_id
 * @property integer $city_id
 * @property string $postal_code
 * @property string $home_status
 * @property string $phone
 * @property string $mobile
 * @property string $photo_path
 * @property string $email
 * @property string $religion
 * @property string $hobby
 * @property string $driving_licence
 * @property string $marital_status
 * @property integer $children
 * @property string $emergency_person_name
 * @property string $emergency_relation
 * @property string $emergency_mobile
 * @property string $emergency_ext_reference
 * @property string $emergency_ext_address
 * @property string $emergency_ext_phone
 * @property string $emergency_int_reference
 * @property string $emergency_int_position
 * @property string $emergency_int_location
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * The followings are the available model relations:
 * @property HFamilyApplicant[] $hFamilyApplicants
 * @property HFormalEduApplicant[] $hFormalEduApplicants
 * @property HInformalEduApplicant[] $hInformalEduApplicants
 * @property HLanguageApplicant[] $hLanguageApplicants
 * @property HMedicalApplicant[] $hMedicalApplicants
 * @property HOccupationApplicant[] $hOccupationApplicants
 * @property MState $state
 * @property MCity $city
 * @property MEmployee[] $mEmployees
 */
//class MApplicant extends CActiveRecord
class MApplicant extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_applicant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('applicant_no, first_name, birth_place, birth_date, gender, blood_type, nationality, street_address, state_id, city_id, postal_code, home_status, religion, marital_status, created_at, created_by', 'required'),
			array('state_id, city_id, children, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('applicant_no, home_status, phone, mobile, marital_status, emergency_mobile, emergency_ext_phone', 'length', 'max'=>25),
			array('first_name, emergency_person_name, emergency_ext_reference, emergency_int_reference', 'length', 'max'=>60),
			array('last_name', 'length', 'max'=>100),
			array('nickname, emergency_relation, emergency_int_position, emergency_int_location', 'length', 'max'=>45),
			array('birth_place', 'length', 'max'=>50),
			array('gender, religion', 'length', 'max'=>15),
			array('blood_type, driving_licence', 'length', 'max'=>3),
			array('nationality', 'length', 'max'=>5),
			array('street_address', 'length', 'max'=>200),
			array('postal_code', 'length', 'max'=>10),
			array('photo_path, emergency_ext_address', 'length', 'max'=>255),
			array('email', 'length', 'max'=>150),
			array('hobby, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, applicant_no, first_name, last_name, nickname, birth_place, birth_date, gender, blood_type, nationality, street_address, state_id, city_id, postal_code, home_status, phone, mobile, photo_path, email, religion, hobby, driving_licence, marital_status, children, emergency_person_name, emergency_relation, emergency_mobile, emergency_ext_reference, emergency_ext_address, emergency_ext_phone, emergency_int_reference, emergency_int_position, emergency_int_location, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'hFamilyApplicants' => array(self::HAS_MANY, 'HFamilyApplicant', 'applicant_id'),
			'hFormalEduApplicants' => array(self::HAS_MANY, 'HFormalEduApplicant', 'applicant_id'),
			'hInformalEduApplicants' => array(self::HAS_MANY, 'HInformalEduApplicant', 'applicant_id'),
			'hLanguageApplicants' => array(self::HAS_MANY, 'HLanguageApplicant', 'applicant_id'),
			'hMedicalApplicants' => array(self::HAS_MANY, 'HMedicalApplicant', 'applicant_id'),
			'hOccupationApplicants' => array(self::HAS_MANY, 'HOccupationApplicant', 'applicant_id'),
			'state' => array(self::BELONGS_TO, 'MState', 'state_id'),
			'city' => array(self::BELONGS_TO, 'MCity', 'city_id'),
			'mEmployees' => array(self::HAS_MANY, 'MEmployee', 'applicant_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'applicant_no' => 'Applicant ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'nickname' => 'Nickname',
			'birth_place' => 'Birth Place',
			'birth_date' => 'Birth Date',
			'gender' => 'Gender',
			'blood_type' => 'Blood Type',
			'nationality' => 'Nationality',
			'street_address' => 'Street Address',
			'state_id' => 'State',
			'city_id' => 'City',
			'postal_code' => 'Postal Code',
			'home_status' => 'Home Status',
			'phone' => 'Phone',
			'mobile' => 'Mobile',
			'photo_path' => 'Photo',
			'email' => 'Email',
			'religion' => 'Religion',
			'hobby' => 'Hobby',
			'driving_licence' => 'Driving Licence',
			'marital_status' => 'Marital Status',
			'children' => 'Children',
			'emergency_person_name' => 'Person Name',
			'emergency_relation' => 'Relation',
			'emergency_mobile' => 'Mobile',
			'emergency_ext_reference' => 'External Reference',
			'emergency_ext_address' => 'Address',
			'emergency_ext_phone' => 'Phone',
			'emergency_int_reference' => 'Internal Reference',
			'emergency_int_position' => 'Position',
			'emergency_int_location' => 'Location',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('applicant_no',$this->applicant_no,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('birth_place',$this->birth_place,true);
		$criteria->compare('birth_date',$this->birth_date);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('blood_type',$this->blood_type,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('street_address',$this->street_address,true);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('home_status',$this->home_status,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('photo_path',$this->photo_path,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('hobby',$this->hobby,true);
		$criteria->compare('driving_licence',$this->driving_licence,true);
		$criteria->compare('marital_status',$this->marital_status,true);
		$criteria->compare('children',$this->children);
		$criteria->compare('emergency_person_name',$this->emergency_person_name,true);
		$criteria->compare('emergency_relation',$this->emergency_relation,true);
		$criteria->compare('emergency_mobile',$this->emergency_mobile,true);
		$criteria->compare('emergency_ext_reference',$this->emergency_ext_reference,true);
		$criteria->compare('emergency_ext_address',$this->emergency_ext_address,true);
		$criteria->compare('emergency_ext_phone',$this->emergency_ext_phone,true);
		$criteria->compare('emergency_int_reference',$this->emergency_int_reference,true);
		$criteria->compare('emergency_int_position',$this->emergency_int_position,true);
		$criteria->compare('emergency_int_location',$this->emergency_int_location,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MApplicant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
