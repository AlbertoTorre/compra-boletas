<?php

/**
 * This is the model class for table "tbl_ws_response".
 *
 * The followings are the available columns in table 'tbl_ws_response':
 * @property integer $id
 * @property integer $function_id
 * @property integer $pelicula_id
 * @property integer $cinema_id
 * @property string $fecha
 * @property string $horario
 * @property integer $numero_sala
 * @property string $tipo_sala
 */
class WsResponse extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ws_response';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('function_id, pelicula_id, cinema_id, fecha, horario, numero_sala, tipo_sala', 'required'),
			array('function_id, pelicula_id, cinema_id, numero_sala', 'numerical', 'integerOnly'=>true),
			array('tipo_sala', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, function_id, pelicula_id, cinema_id, fecha, horario, numero_sala, tipo_sala', 'safe', 'on'=>'search'),
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
			'function_id' => 'Funcion',
			'pelicula_id' => 'Pelicula',
			'cinema_id' => 'Cinema',
			'fecha' => 'Fecha',
			'horario' => 'Horario',
			'numero_sala' => 'Numero Sala',
			'tipo_sala' => 'Tipo Sala',
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
		$criteria->compare('function_id',$this->function_id);
		$criteria->compare('pelicula_id',$this->pelicula_id);
		$criteria->compare('cinema_id',$this->cinema_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('horario',$this->horario,true);
		$criteria->compare('numero_sala',$this->numero_sala);
		$criteria->compare('tipo_sala',$this->tipo_sala,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WsResponse the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
