<?php

/**
 * This is the model class for table "t_quotation".
 *
 * The followings are the available columns in table 't_quotation':
 * @property integer $id
 * @property integer $marketing_id
 * @property string $no_quotation
 * @property integer $customer_id
 * @property string $customer_name
 * @property string $phone
 * @property string $contact_person
 * @property string $note
 * @property integer $name_of_employer
 * @property integer $include_driver
 * @property integer $include_ppn
 * @property string $date
 * @property string $address
 * @property string $fax
 * @property string $handphone_customer
 * @property string $office_boss
 * @property string $hanphone
 * @property string $email
 * @property integer $create_user
 * @property string $create_date
 */
class TQuotation extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 't_quotation';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('marketing_id, no_quotation, customer_id', 'required'),
            array('marketing_id, customer_id, name_of_employer, include_driver, include_ppn, create_user', 'numerical', 'integerOnly'=>true),
            array('no_quotation, contact_person, office_boss, email', 'length', 'max'=>50),
            array('customer_name', 'length', 'max'=>100),
            array('phone', 'length', 'max'=>13),
            array('fax', 'length', 'max'=>20),
            array('handphone_customer, hanphone', 'length', 'max'=>15),
            array('note, date, address, create_date', 'safe'),
            array('email', 'email'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, marketing_id, no_quotation, customer_id, customer_name, phone, contact_person, note, name_of_employer, include_driver, include_ppn, date, address, fax, handphone_customer, office_boss, hanphone, email, create_user, create_date', 'safe', 'on'=>'search'),
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
            'marketing_id' => 'Marketing',
            'no_quotation' => 'No Quotation',
            'customer_id' => 'Customer',
            'customer_name' => 'Customer Name',
            'phone' => 'Phone',
            'contact_person' => 'Contact Person',
            'note' => 'Note',
            'name_of_employer' => 'Name Of Employer',
            'include_driver' => 'Include Driver',
            'include_ppn' => 'Include Ppn',
            'date' => 'Date',
            'address' => 'Address',
            'fax' => 'Fax',
            'handphone_customer' => 'Handphone Customer',
            'office_boss' => 'Office Boss',
            'hanphone' => 'Hanphone',
            'email' => 'Email',
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
        $criteria->compare('marketing_id',$this->marketing_id);
        $criteria->compare('no_quotation',$this->no_quotation,true);
        $criteria->compare('customer_id',$this->customer_id);
        $criteria->compare('customer_name',$this->customer_name,true);
        $criteria->compare('phone',$this->phone,true);
        $criteria->compare('contact_person',$this->contact_person,true);
        $criteria->compare('note',$this->note,true);
        $criteria->compare('name_of_employer',$this->name_of_employer);
        $criteria->compare('include_driver',$this->include_driver);
        $criteria->compare('include_ppn',$this->include_ppn);
        $criteria->compare('date',$this->date,true);
        $criteria->compare('address',$this->address,true);
        $criteria->compare('fax',$this->fax,true);
        $criteria->compare('handphone_customer',$this->handphone_customer,true);
        $criteria->compare('office_boss',$this->office_boss,true);
        $criteria->compare('hanphone',$this->hanphone,true);
        $criteria->compare('email',$this->email,true);
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
     * @return TQuotation the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
} 