<?php

/**
 * This is the model class for table "m_cars".
 *
 * The followings are the available columns in table 'm_cars':
 * @property integer $id
 * @property integer $vehicle_id
 * @property integer $model_id
 * @property integer $type_id
 * @property integer $color_id
 * @property string $no_police
 * @property string $no_chasis
 * @property string $no_machine
 * @property string $no_stnk
 * @property integer $fuel_id
 * @property integer $kilometer
 * @property string $year
 * @property string $no_bpkb
 * @property string $year_of_manufacture
 * @property string $no_factory
 * @property string $date_of_purchase
 * @property integer $purchase_price
 * @property string $valid_stnk
 * @property string $expired_insurance
 * @property string $no_polis_insurance
 * @property string $state_car
 * @property string $transmission
 * @property integer $cylinder
 * @property string $stnk_address
 * @property integer $create_user
 * @property string $create_date
 */
class MCars extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_cars';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vehicle_id, model_id, type_id, color_id, no_police, create_user, create_date', 'required'),
			array('vehicle_id, model_id, type_id, color_id, fuel_id, kilometer, purchase_price, cylinder, create_user', 'numerical', 'integerOnly'=>true),
			array('no_police', 'length', 'max'=>50),
			array('no_chasis, no_machine, no_stnk, no_bpkb, no_factory, no_polis_insurance', 'length', 'max'=>100),
			array('year', 'length', 'max'=>4),
			array('state_car', 'length', 'max'=>30),
			array('transmission', 'length', 'max'=>10),
			array('year_of_manufacture, date_of_purchase, valid_stnk, expired_insurance, stnk_address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, vehicle_id, model_id, type_id, color_id, no_police, no_chasis, no_machine, no_stnk, fuel_id, kilometer, year, no_bpkb, year_of_manufacture, no_factory, date_of_purchase, purchase_price, valid_stnk, expired_insurance, no_polis_insurance, state_car, transmission, cylinder, stnk_address, create_user, create_date', 'safe', 'on'=>'search'),
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
			'vehicle_id' => 'Vehicle',
			'model_id' => 'Model',
			'type_id' => 'Type',
			'color_id' => 'Color',
			'no_police' => 'No Police',
			'no_chasis' => 'No Chasis',
			'no_machine' => 'No Machine',
			'no_stnk' => 'No Stnk',
			'fuel_id' => 'Fuel',
			'kilometer' => 'Kilometer',
			'year' => 'Year',
			'no_bpkb' => 'No Bpkb',
			'year_of_manufacture' => 'Year Of Manufacture',
			'no_factory' => 'No Factory',
			'date_of_purchase' => 'Date Of Purchase',
			'purchase_price' => 'Purchase Price',
			'valid_stnk' => 'Valid Stnk',
			'expired_insurance' => 'Expired Insurance',
			'no_polis_insurance' => 'No Polis Insurance',
			'state_car' => 'State Car',
			'transmission' => 'Transmission',
			'cylinder' => 'Cylinder',
			'stnk_address' => 'Stnk Address',
			'create_user' => 'Create User',
			'create_date' => 'Create Date',
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
		$criteria->compare('vehicle_id',$this->vehicle_id);
		$criteria->compare('model_id',$this->model_id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('color_id',$this->color_id);
		$criteria->compare('no_police',$this->no_police,true);
		$criteria->compare('no_chasis',$this->no_chasis,true);
		$criteria->compare('no_machine',$this->no_machine,true);
		$criteria->compare('no_stnk',$this->no_stnk,true);
		$criteria->compare('fuel_id',$this->fuel_id);
		$criteria->compare('kilometer',$this->kilometer);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('no_bpkb',$this->no_bpkb,true);
		$criteria->compare('year_of_manufacture',$this->year_of_manufacture,true);
		$criteria->compare('no_factory',$this->no_factory,true);
		$criteria->compare('date_of_purchase',$this->date_of_purchase,true);
		$criteria->compare('purchase_price',$this->purchase_price);
		$criteria->compare('valid_stnk',$this->valid_stnk,true);
		$criteria->compare('expired_insurance',$this->expired_insurance,true);
		$criteria->compare('no_polis_insurance',$this->no_polis_insurance,true);
		$criteria->compare('state_car',$this->state_car,true);
		$criteria->compare('transmission',$this->transmission,true);
		$criteria->compare('cylinder',$this->cylinder);
		$criteria->compare('stnk_address',$this->stnk_address,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('create_date',$this->create_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MCars the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
