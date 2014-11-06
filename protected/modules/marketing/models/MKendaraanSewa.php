<?php

/**
 * This is the model class for table "m_kendaraan_sewa".
 *
 * The followings are the available columns in table 'm_kendaraan_sewa':
 * @property integer $kendaraansewa_id
 * @property string $no_cmd
 * @property integer $mobil_id
 * @property string $unit
 * @property integer $klas_driver
 * @property integer $rental_rates
 * @property string $contract_periode
 */
class MKendaraanSewa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_kendaraan_sewa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_cmd', 'required'),
			array('mobil_id, klas_driver, rental_rates', 'numerical', 'integerOnly'=>true),
			array('no_cmd', 'length', 'max'=>20),
			array('unit, contract_periode', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kendaraansewa_id, no_cmd, mobil_id, unit, klas_driver, rental_rates, contract_periode', 'safe', 'on'=>'search'),
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
			'kendaraansewa_id' => 'Kendaraansewa',
			'no_cmd' => 'No Cmd',
			'mobil_id' => 'Mobil',
			'unit' => 'Unit',
			'klas_driver' => 'Klas Driver',
			'rental_rates' => 'Rental Rates',
			'contract_periode' => 'Contract Periode',
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

		$criteria->compare('kendaraansewa_id',$this->kendaraansewa_id);
		$criteria->compare('no_cmd',$this->no_cmd,true);
		$criteria->compare('mobil_id',$this->mobil_id);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('klas_driver',$this->klas_driver);
		$criteria->compare('rental_rates',$this->rental_rates);
		$criteria->compare('contract_periode',$this->contract_periode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MKendaraanSewa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
