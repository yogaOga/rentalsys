<?php

/**
 * This is the model class for table "ml_scale_of_priority".
 *
 * The followings are the available columns in table 'ml_scale_of_priority':
 * @property integer $id
 * @property string $scale_of_priority
 * @property string $description
 *
 * The followings are the available model relations:
 * @property TActivityPlan[] $tActivityPlans
 * @property TActivityPlan[] $tActivityPlans1
 */
class MlScaleOfPriority extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ml_scale_of_priority';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('scale_of_priority', 'required'),
			array('scale_of_priority', 'length', 'max'=>100),
			array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scale_of_priority, description', 'safe', 'on'=>'search'),
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
			'tActivityPlans' => array(self::HAS_MANY, 'TActivityPlan', 'final_result_id'),
			'tActivityPlans1' => array(self::HAS_MANY, 'TActivityPlan', 'scale_of_priority_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'scale_of_priority' => 'Scale Of Priority',
			'description' => 'Description',
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
		$criteria->compare('scale_of_priority',$this->scale_of_priority,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MlScaleOfPriority the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
