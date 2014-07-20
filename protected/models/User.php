<?php

/**
 * This is the model class for table "sin_user".
 *
 * The followings are the available columns in table 'sin_user':
 * @property integer $id
 * @property string $name_th
 * @property string $surname_th
 * @property string $name_eng
 * @property string $surname_eng
 * @property integer $gender
 * @property string $bd_date
 * @property string $id_card
 * @property string $add_no
 * @property string $add_street
 * @property string $add_province
 * @property string $add_postcode
 * @property string $phone_number
 * @property string $mobile_number
 * @property string $email_address
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $receive_data
 * @property string $last_login_time
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sin_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_th, surname_th, name_eng, surname_eng, id_card, add_no, add_street, add_province, add_postcode, username, email, password', 'required'),
			array('gender, receive_data, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('name_th, surname_th, name_eng, surname_eng, id_card, add_no, add_street, add_province, add_postcode, phone_number, mobile_number, email_address, username, email, password', 'length', 'max'=>255),
			array('bd_date, last_login_time, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name_th, surname_th, name_eng, surname_eng, gender, bd_date, id_card, add_no, add_street, add_province, add_postcode, phone_number, mobile_number, email_address, username, email, password, receive_data, last_login_time, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'name_th' => 'Name Th',
			'surname_th' => 'Surname Th',
			'name_eng' => 'Name Eng',
			'surname_eng' => 'Surname Eng',
			'gender' => 'Gender',
			'bd_date' => 'Bd Date',
			'id_card' => 'Id Card',
			'add_no' => 'Add No',
			'add_street' => 'Add Street',
			'add_province' => 'Add Province',
			'add_postcode' => 'Add Postcode',
			'phone_number' => 'Phone Number',
			'mobile_number' => 'Mobile Number',
			'email_address' => 'Email Address',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'receive_data' => 'Receive Data',
			'last_login_time' => 'Last Login Time',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
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
		$criteria->compare('name_th',$this->name_th,true);
		$criteria->compare('surname_th',$this->surname_th,true);
		$criteria->compare('name_eng',$this->name_eng,true);
		$criteria->compare('surname_eng',$this->surname_eng,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('bd_date',$this->bd_date,true);
		$criteria->compare('id_card',$this->id_card,true);
		$criteria->compare('add_no',$this->add_no,true);
		$criteria->compare('add_street',$this->add_street,true);
		$criteria->compare('add_province',$this->add_province,true);
		$criteria->compare('add_postcode',$this->add_postcode,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('receive_data',$this->receive_data);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
