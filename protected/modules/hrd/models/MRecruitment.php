<?php

/**
 * This is the model class for table "h_recruitment".
 *
 * The followings are the available columns in table 'h_recruitment':
 * @property integer $recruitment_id
 * @property string $year_recruitment
 * @property string $name
 * @property integer $office
 * @property integer $departemen
 * @property integer $seksi
 * @property integer $divisi
 * @property integer $occuption
 * @property string $type_selection
 * @property string $media_promotion
 * @property string $note
 */
//class MRecruitment extends CActiveRecord
class MRecruitment extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_recruitment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('year_recruitment, name', 'required'),
			array('office, departemen, seksi, divisi, occuption', 'numerical', 'integerOnly'=>true),
			array('year_recruitment', 'length', 'max'=>4),
			array('name, type_selection, media_promotion', 'length', 'max'=>100),
			array('note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('recruitment_id, year_recruitment, name, office, departemen, seksi, divisi, occuption, type_selection, media_promotion, note', 'safe', 'on'=>'search'),
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
			'recruitment_id' => 'Recruitment',
			'year_recruitment' => 'Tahun Rekrutment',
			'name' => 'Nama Sesi Penerimaan',
			'office' => 'Usulan Kantor',
			'departemen' => 'Departemen',
			'seksi' => 'Seksi',
			'divisi' => 'Divisi',
			'occuption' => 'Usulan Jabatan',
			'type_selection' => 'Jenis Seleksi',
			'media_promotion' => 'Media Promosi',
			'note' => 'Catatan',
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

		$criteria->compare('recruitment_id',$this->recruitment_id);
		$criteria->compare('year_recruitment',$this->year_recruitment,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('office',$this->office);
		$criteria->compare('departemen',$this->departemen);
		$criteria->compare('seksi',$this->seksi);
		$criteria->compare('divisi',$this->divisi);
		$criteria->compare('occuption',$this->occuption);
		$criteria->compare('type_selection',$this->type_selection,true);
		$criteria->compare('media_promotion',$this->media_promotion,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MRecruitment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
