<?php

/**
 * This is the model class for table "detail_co".
 *
 * The followings are the available columns in table 'detail_co':
 * @property integer $id
 * @property integer $co_id
 * @property integer $car_id
 * @property integer $qty
 * @property integer $rate
 * @property integer $contract_period
 * @property string $periode
 */
class DetailCo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detail_co';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('car_id', 'required'),
			array('co_id, car_id, qty, rate, contract_period', 'numerical', 'integerOnly'=>true),
			array('periode', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, co_id, car_id, qty, rate, contract_period, periode', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'co_id' => 'Co',
			'car_id' => 'Car',
			'qty' => 'Qty',
			'rate' => 'Rate',
			'contract_period' => 'Contract Period',
			'periode' => 'Periode',
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
		$criteria->compare('co_id',$this->co_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('contract_period',$this->contract_period);
		$criteria->compare('periode',$this->periode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetailCo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
