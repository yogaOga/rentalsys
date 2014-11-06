<?php

/**
 * This is the model class for table "m_divisi".
 *
 * The followings are the available columns in table 'm_divisi':
 * @property integer $divisi_id
 * @property string $divisi_kode
 * @property string $divisi_name
 */
//class MDivisi extends CActiveRecord
class MDivisi extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_divisi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('divisi_kode', 'length', 'max'=>50),
			array('divisi_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('divisi_id, divisi_kode, divisi_name', 'safe', 'on'=>'search'),
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
			'divisi_id' => 'Divisi',
			'divisi_kode' => 'Divisi Kode',
			'divisi_name' => 'Divisi Name',
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

		$criteria->compare('divisi_id',$this->divisi_id);
		$criteria->compare('divisi_kode',$this->divisi_kode,true);
		$criteria->compare('divisi_name',$this->divisi_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MDivisi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
