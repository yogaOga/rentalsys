<?php

/**
 * This is the model class for table "h_kandidat".
 *
 * The followings are the available columns in table 'h_kandidat':
 * @property integer $kandidat_id
 * @property string $kode_kandidat
 * @property string $nama_kandidat
 * @property string $tempatlahir
 * @property string $tgllahir
 * @property integer $agama
 * @property string $kelamin
 * @property string $goldarah
 * @property string $kacamata
 * @property double $plus
 * @property double $minus
 * @property double $cylindris
 * @property string $statusnikah
 * @property string $alamat
 * @property string $kota
 * @property string $propinsi
 * @property integer $kodepos
 * @property string $telp
 * @property string $hp
 * @property string $noktp
 * @property string $tgldikeluarkan
 * @property string $berlakuktp
 * @property string $nosim
 * @property string $tgldikeluarkansim
 * @property string $berlakusim
 * @property string $email
 * @property string $photo
 * @property string $catatan
 * @property string $userinput
 * @property string $tglinput
 */
//class HKandidat extends CActiveRecord
class HKandidat extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_kandidat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_kandidat', 'required'),
			array('agama, kodepos', 'numerical', 'integerOnly'=>true),
			array('plus, minus, cylindris', 'numerical'),
			array('kode_kandidat, tempatlahir, statusnikah, kota, propinsi, noktp, nosim, email, photo, userinput', 'length', 'max'=>100),
			array('nama_kandidat', 'length', 'max'=>200),
			array('kelamin', 'length', 'max'=>50),
			array('goldarah', 'length', 'max'=>5),
			array('kacamata', 'length', 'max'=>10),
			array('telp, hp', 'length', 'max'=>15),
			array('tgllahir, alamat, tgldikeluarkan, berlakuktp, tgldikeluarkansim, berlakusim, catatan, tglinput', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kandidat_id, kode_kandidat, nama_kandidat, tempatlahir, tgllahir, agama, kelamin, goldarah, kacamata, plus, minus, cylindris, statusnikah, alamat, kota, propinsi, kodepos, telp, hp, noktp, tgldikeluarkan, berlakuktp, nosim, tgldikeluarkansim, berlakusim, email, photo, catatan, userinput, tglinput', 'safe', 'on'=>'search'),
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
			'kandidat_id' => 'Kandidat',
			'kode_kandidat' => 'Kode Kandidat',
			'nama_kandidat' => 'Nama Kandidat',
			'tempatlahir' => 'Tempat lahir',
			'tgllahir' => 'Tgl Lahir',
			'agama' => 'Agama',
			'kelamin' => 'Kelamin',
			'goldarah' => 'Gol Darah',
			'kacamata' => 'Kacamata',
			'plus' => 'Plus',
			'minus' => 'Minus',
			'cylindris' => 'Cylindris',
			'statusnikah' => 'Status Nikah',
			'alamat' => 'Alamat',
			'kota' => 'Kota',
			'propinsi' => 'Propinsi',
			'kodepos' => 'Kodepos',
			'telp' => 'Telp',
			'hp' => 'Hp',
			'noktp' => 'No KTP',
			'tgldikeluarkan' => 'Tgl Dikeluarkan',
			'berlakuktp' => 'Berlaku KTP',
			'nosim' => 'No SIM',
			'tgldikeluarkansim' => 'Tgl Dikeluarkan SIM',
			'berlakusim' => 'Berlaku SIM',
			'email' => 'Email',
			'photo' => 'Photo',
			'catatan' => 'Catatan',
			'userinput' => 'Userinput',
			'tglinput' => 'Tglinput',
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

		$criteria->compare('kandidat_id',$this->kandidat_id);
		$criteria->compare('kode_kandidat',$this->kode_kandidat,true);
		$criteria->compare('nama_kandidat',$this->nama_kandidat,true);
		$criteria->compare('tempatlahir',$this->tempatlahir,true);
		$criteria->compare('tgllahir',$this->tgllahir,true);
		$criteria->compare('agama',$this->agama);
		$criteria->compare('kelamin',$this->kelamin,true);
		$criteria->compare('goldarah',$this->goldarah,true);
		$criteria->compare('kacamata',$this->kacamata,true);
		$criteria->compare('plus',$this->plus);
		$criteria->compare('minus',$this->minus);
		$criteria->compare('cylindris',$this->cylindris);
		$criteria->compare('statusnikah',$this->statusnikah,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('propinsi',$this->propinsi,true);
		$criteria->compare('kodepos',$this->kodepos);
		$criteria->compare('telp',$this->telp,true);
		$criteria->compare('hp',$this->hp,true);
		$criteria->compare('noktp',$this->noktp,true);
		$criteria->compare('tgldikeluarkan',$this->tgldikeluarkan,true);
		$criteria->compare('berlakuktp',$this->berlakuktp,true);
		$criteria->compare('nosim',$this->nosim,true);
		$criteria->compare('tgldikeluarkansim',$this->tgldikeluarkansim,true);
		$criteria->compare('berlakusim',$this->berlakusim,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('catatan',$this->catatan,true);
		$criteria->compare('userinput',$this->userinput,true);
		$criteria->compare('tglinput',$this->tglinput,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HKandidat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
