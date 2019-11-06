<?php

/**
 * This is the model class for table "tbl_buy".
 *
 * The followings are the available columns in table 'tbl_buy':
 * @property integer $id
 * @property integer $cinema_id
 * @property integer $room_id
 * @property string $title
 * @property string $movie_time
 * @property double $price
 *
 * The followings are the available model relations:
 * @property TblCinema $cinema
 * @property TblRoom $room
 */
class Buy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_buy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cinema_id, room_id, title, movie_time, price', 'required'),
			array('cinema_id, room_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('title', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cinema_id, room_id, title, movie_time, price', 'safe', 'on'=>'search'),
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
			'cinema' => array(self::BELONGS_TO, 'Cinema', 'cinema_id'),
			'room' => array(self::BELONGS_TO, 'Room', 'room_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cinema_id' => 'Teatro',
			'room_id' => 'Sala',
			'cinema.name' => 'Teatro',
			'room.name' => 'Sala',
			'title' => 'Título',
			'movie_time' => 'Duracion',
			'price' => 'Price',
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
		$criteria->compare('cinema_id',$this->cinema_id);
		$criteria->compare('room_id',$this->room_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('movie_time',$this->movie_time,true);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Buy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
