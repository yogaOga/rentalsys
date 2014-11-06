<?php

/**
 * This is the model class for table "marketing_plan".
 *
 * The followings are the available columns in table 'marketing_plan':
 * @property integer $id_marketing_plan
 * @property string $Nama_Marketing
 * @property string $Marketing_Items
 * @property string $Start_End_Date
 * @property string $Durasi_Pekerjaan
 * @property string $Skala_Prioritas
 * @property string $Estimasi_Hasil
 * @property string $Result_Final
 * @property string $Note_Manager
 */
class MarketingPlan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marketing_plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nama_Marketing, Estimasi_Hasil', 'required'),
			array('Nama_Marketing, Marketing_Items, Start_End_Date, Durasi_Pekerjaan, Skala_Prioritas, Estimasi_Hasil, Result_Final, Note_Manager', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_marketing_plan, Nama_Marketing, Marketing_Items, Start_End_Date, Durasi_Pekerjaan, Skala_Prioritas, Estimasi_Hasil, Result_Final, Note_Manager', 'safe', 'on'=>'search'),
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
			'id_marketing_plan' => 'Id Marketing Plan',
			'Nama_Marketing' => 'Nama Marketing',
			'Marketing_Items' => 'Marketing Items',
			'Start_End_Date' => 'Start End Date',
			'Durasi_Pekerjaan' => 'Durasi Pekerjaan',
			'Skala_Prioritas' => 'Skala Prioritas',
			'Estimasi_Hasil' => 'Estimasi Hasil',
			'Result_Final' => 'Result Final',
			'Note_Manager' => 'Note Manager',
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

		$criteria->compare('id_marketing_plan',$this->id_marketing_plan);
		$criteria->compare('Nama_Marketing',$this->Nama_Marketing,true);
		$criteria->compare('Marketing_Items',$this->Marketing_Items,true);
		$criteria->compare('Start_End_Date',$this->Start_End_Date,true);
		$criteria->compare('Durasi_Pekerjaan',$this->Durasi_Pekerjaan,true);
		$criteria->compare('Skala_Prioritas',$this->Skala_Prioritas,true);
		$criteria->compare('Estimasi_Hasil',$this->Estimasi_Hasil,true);
		$criteria->compare('Result_Final',$this->Result_Final,true);
		$criteria->compare('Note_Manager',$this->Note_Manager,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MarketingPlan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
