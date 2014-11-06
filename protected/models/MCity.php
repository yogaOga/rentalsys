<?php

/**
 * This is the model class for table "m_city".
 *
 * The followings are the available columns in table 'm_city':
 * @property integer $id
 * @property integer $state_id
 * @property string $city_name
 * @property string $other_name
 * @property string $created_at
 * @property integer $created_by
 *
 * The followings are the available model relations:
 * @property MApplicant[] $mApplicants
 * @property MState $state
 * @property MEmployee[] $mEmployees
 */
class MCity extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_city';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('state_id, city_name, created_at, created_by', 'required'),
			array('state_id, created_by', 'numerical', 'integerOnly'=>true),
			array('city_name, other_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, state_id, city_name, other_name, created_at, created_by', 'safe', 'on'=>'search'),
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
			'mApplicants' => array(self::HAS_MANY, 'MApplicant', 'city_id'),
			'state' => array(self::BELONGS_TO, 'MState', 'state_id'),
			'mEmployees' => array(self::HAS_MANY, 'MEmployee', 'city_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'state_id' => 'State',
			'city_name' => 'City Name',
			'other_name' => 'Other Name',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
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
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('other_name',$this->other_name,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MCity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
