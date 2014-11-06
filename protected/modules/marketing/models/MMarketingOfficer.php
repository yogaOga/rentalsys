<?php

/**
 * This is the model class for table "m_marketing_officer".
 *
 * The followings are the available columns in table 'm_marketing_officer':
 * @property integer $id
 * @property string $mo_id
 * @property string $mo_name
 * @property string $created_at
 * @property integer $created_user
 *
 * The followings are the available model relations:
 * @property TPropect[] $tPropects
 */
class MMarketingOfficer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_marketing_officer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mo_id, mo_name, created_at, created_user', 'required'),
			array('created_user', 'numerical', 'integerOnly'=>true),
			array('mo_id', 'length', 'max'=>45),
			array('mo_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mo_id, mo_name, created_at, created_user', 'safe', 'on'=>'search'),
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
			'tPropects' => array(self::HAS_MANY, 'TPropect', 'm_marketing_officer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mo_id' => 'Mo',
			'mo_name' => 'Mo Name',
			'created_at' => 'Created At',
			'created_user' => 'Created User',
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
		$criteria->compare('mo_id',$this->mo_id,true);
		$criteria->compare('mo_name',$this->mo_name,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_user',$this->created_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MMarketingOfficer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
