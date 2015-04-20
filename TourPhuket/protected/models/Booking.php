<?php

/**
 * This is the model class for table "booking".
 *
 * The followings are the available columns in table 'booking':
 * @property integer $book_id
 * @property integer $tour_id
 * @property string $book_date
 * @property string $book_numpeople
 * @property integer $cus_id
 * @property string $book_tel
 */
class Booking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'booking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('book_id, tour_id, book_date, book_numpeople, cus_id, book_tel', 'required'),
			array('book_id, tour_id, cus_id', 'numerical', 'integerOnly'=>true),
			array('book_date, book_numpeople', 'length', 'max'=>256),
			array('book_tel', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('book_id, tour_id, book_date, book_numpeople, cus_id, book_tel', 'safe', 'on'=>'search'),
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
			'book_id' => 'Book',
			'tour_id' => 'Tour',
			'book_date' => 'Book Date',
			'book_numpeople' => 'Book Numpeople',
			'cus_id' => 'Cus',
			'book_tel' => 'Book Tel',
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

		$criteria->compare('book_id',$this->book_id);
		$criteria->compare('tour_id',$this->tour_id);
		$criteria->compare('book_date',$this->book_date,true);
		$criteria->compare('book_numpeople',$this->book_numpeople,true);
		$criteria->compare('cus_id',$this->cus_id);
		$criteria->compare('book_tel',$this->book_tel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Booking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
