<?php

/**
 * This is the model class for table "h_informal_edu_applicant".
 *
 * The followings are the available columns in table 'h_informal_edu_applicant':
 * @property integer $id
 * @property integer $applicant_id
 * @property string $join_date
 * @property string $course_name
 * @property string $level
 * @property string $city_country
 *
 * The followings are the available model relations:
 * @property MApplicant $applicant
 */
//class HInformalEduApplicant extends CActiveRecord
class HInformalEduApplicant extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_informal_edu_applicant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('applicant_id, join_date, course_name, level, city_country', 'required'),
			array('applicant_id', 'numerical', 'integerOnly'=>true),
			array('course_name, city_country', 'length', 'max'=>100),
			array('level', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, applicant_id, join_date, course_name, level, city_country', 'safe', 'on'=>'search'),
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
			'join_date' => 'Join Date',
			'course_name' => 'Course Name',
			'level' => 'Level',
			'city_country' => 'City/Country',
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
		$criteria->compare('join_date',$this->join_date,true);
		$criteria->compare('course_name',$this->course_name,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('city_country',$this->city_country,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HInformalEduApplicant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
