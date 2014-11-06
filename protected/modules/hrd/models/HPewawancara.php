<?php

/**
 * This is the model class for table "h_pewawancara".
 *
 * The followings are the available columns in table 'h_pewawancara':
 * @property integer $id
 * @property integer $recruitment_id
 * @property integer $kantor_id
 * @property integer $departement_id
 * @property integer $seksi_id
 * @property integer $divisi_id
 * @property integer $jabatan_id
 * @property string $nmpewawancara
 * @property string $catatan
 */
//class HPewawancara extends CActiveRecord
class HPewawancara extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_pewawancara';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('recruitment_id, kantor_id, departement_id, seksi_id, divisi_id, jabatan_id', 'numerical', 'integerOnly'=>true),
			array('nmpewawancara', 'length', 'max'=>100),
			array('catatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, recruitment_id, kantor_id, departement_id, seksi_id, divisi_id, jabatan_id, nmpewawancara, catatan', 'safe', 'on'=>'search'),
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
			'recruitment_id' => 'Recruitment',
			'kantor_id' => 'Kantor',
			'departement_id' => 'Departement',
			'seksi_id' => 'Seksi',
			'divisi_id' => 'Divisi',
			'jabatan_id' => 'Jabatan',
			'nmpewawancara' => 'Nmpewawancara',
			'catatan' => 'Catatan',
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
		$criteria->compare('recruitment_id',$this->recruitment_id);
		$criteria->compare('kantor_id',$this->kantor_id);
		$criteria->compare('departement_id',$this->departement_id);
		$criteria->compare('seksi_id',$this->seksi_id);
		$criteria->compare('divisi_id',$this->divisi_id);
		$criteria->compare('jabatan_id',$this->jabatan_id);
		$criteria->compare('nmpewawancara',$this->nmpewawancara,true);
		$criteria->compare('catatan',$this->catatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HPewawancara the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
