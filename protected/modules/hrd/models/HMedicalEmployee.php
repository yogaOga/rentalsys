<?php

/**
 * This is the model class for table "h_medical_employee".
 *
 * The followings are the available columns in table 'h_medical_employee':
 * @property integer $id
 * @property integer $m_employee_id
 * @property integer $maag
 * @property integer $ginjal
 * @property integer $stress
 * @property integer $jantung
 * @property integer $tekanan_darah
 * @property integer $diabetes
 * @property integer $lever_hepatitis
 * @property integer $pusing_migren
 * @property integer $paruparu_asma
 * @property string $others
 * @property integer $days
 * @property integer $willing_out_of_town
 * @property integer $willing_overtime
 *
 * The followings are the available model relations:
 * @property MEmployee $mEmployee
 */
//class HMedicalEmployee extends CActiveRecord
class HMedicalEmployee extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_medical_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('m_employee_id', 'required'),
			array('m_employee_id, maag, ginjal, stress, jantung, tekanan_darah, diabetes, lever_hepatitis, pusing_migren, paruparu_asma, days, willing_out_of_town, willing_overtime', 'numerical', 'integerOnly'=>true),
			array('others', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, m_employee_id, maag, ginjal, stress, jantung, tekanan_darah, diabetes, lever_hepatitis, pusing_migren, paruparu_asma, others, days, willing_out_of_town, willing_overtime', 'safe', 'on'=>'search'),
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
			'mEmployee' => array(self::BELONGS_TO, 'MEmployee', 'm_employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'm_employee_id' => 'M Employee',
			'maag' => 'Maag',
			'ginjal' => 'Ginjal',
			'stress' => 'Stress',
			'jantung' => 'Jantung',
			'tekanan_darah' => 'Tekanan Darah',
			'diabetes' => 'Diabetes',
			'lever_hepatitis' => 'Lever Hepatitis',
			'pusing_migren' => 'Pusing Migren',
			'paruparu_asma' => 'Paruparu Asma',
			'others' => 'Others',
			'days' => 'Days',
			'willing_out_of_town' => 'Willing Out Of Town',
			'willing_overtime' => 'Willing Overtime',
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
		$criteria->compare('m_employee_id',$this->m_employee_id);
		$criteria->compare('maag',$this->maag);
		$criteria->compare('ginjal',$this->ginjal);
		$criteria->compare('stress',$this->stress);
		$criteria->compare('jantung',$this->jantung);
		$criteria->compare('tekanan_darah',$this->tekanan_darah);
		$criteria->compare('diabetes',$this->diabetes);
		$criteria->compare('lever_hepatitis',$this->lever_hepatitis);
		$criteria->compare('pusing_migren',$this->pusing_migren);
		$criteria->compare('paruparu_asma',$this->paruparu_asma);
		$criteria->compare('others',$this->others,true);
		$criteria->compare('days',$this->days);
		$criteria->compare('willing_out_of_town',$this->willing_out_of_town);
		$criteria->compare('willing_overtime',$this->willing_overtime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HMedicalEmployee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
