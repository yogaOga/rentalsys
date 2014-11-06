<?php

/**
 * This is the model class for table "tunjangan".
 *
 * The followings are the available columns in table 'tunjangan':
 * @property integer $id
 * @property string $tglawal
 * @property string $tglakhir
 * @property integer $nmtunjangan
 * @property double $nilai
 * @property string $catatan
 * @property string $status
 */
//class Tunjangan extends CActiveRecord
class Tunjangan extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tunjangan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nmtunjangan', 'numerical', 'integerOnly'=>true),
			array('nilai', 'numerical'),
			array('status', 'length', 'max'=>15),
			array('tglawal, tglakhir, catatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tglawal, tglakhir, nmtunjangan, nilai, catatan, status', 'safe', 'on'=>'search'),
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
			'tglawal' => 'Tglawal',
			'tglakhir' => 'Tglakhir',
			'nmtunjangan' => 'Nmtunjangan',
			'nilai' => 'Nilai',
			'catatan' => 'Catatan',
			'status' => 'Status',
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
		$criteria->compare('tglawal',$this->tglawal,true);
		$criteria->compare('tglakhir',$this->tglakhir,true);
		$criteria->compare('nmtunjangan',$this->nmtunjangan);
		$criteria->compare('nilai',$this->nilai);
		$criteria->compare('catatan',$this->catatan,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tunjangan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
