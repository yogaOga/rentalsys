<?php

/**
 * This is the model class for table "h_family_applicant".
 *
 * The followings are the available columns in table 'h_family_applicant':
 * @property integer $id
 * @property integer $applicant_id
 * @property string $name
 * @property string $relation
 * @property string $place_birth
 * @property string $date_birth
 * @property string $gender
 * @property string $job
 *
 * The followings are the available model relations:
 * @property MApplicant $applicant
 */
//class HFamilyApplicant extends CActiveRecord
class HFamilyApplicant extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
        public $updateType;
        public function tableName()
	{
		return 'h_family_applicant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('applicant_id, name, relation, place_birth, date_birth, gender, job', 'required'),
			array('applicant_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('relation, job', 'length', 'max'=>45),
			array('place_birth', 'length', 'max'=>60),
			array('gender', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, applicant_id, name, relation, place_birth, date_birth, gender, job', 'safe', 'on'=>'search'),
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
			'applicant' => array(self::BELONGS_TO, 'MApplicant', 'applicant_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'applicant_id' => 'Applicant',
			'name' => 'Name',
			'relation' => 'Relation',
			'place_birth' => 'Place Birth',
			'date_birth' => 'Date Birth',
			'gender' => 'Gender',
			'job' => 'Job',
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
		$criteria->compare('applicant_id',$this->applicant_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('relation',$this->relation,true);
		$criteria->compare('place_birth',$this->place_birth,true);
		$criteria->compare('date_birth',$this->date_birth,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('job',$this->job,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HFamilyApplicant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
