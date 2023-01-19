<?php

/**
 * This is the model class for table "cursos".
 *
 * The followings are the available columns in table 'cursos':
 * @property integer $ID
 * @property string $nombre
 * @property string $descripcion
 * @property integer $plan_estudio
 * @property string $duracion
 * @property integer $cant_temario
 * @property integer $tutor
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $estado
 * @property string $imagen
 */
class Cursos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cursos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estado, imagen', 'required'),
			array('plan_estudio, cant_temario, tutor, estado', 'numerical', 'integerOnly'=>true),
			array('nombre, duracion, imagen', 'length', 'max'=>50),
			array('descripcion, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, nombre, descripcion, plan_estudio, duracion, cant_temario, tutor, fecha_creacion, fecha_actualizacion, estado, imagen', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'plan_estudio' => 'Plan Estudio',
			'duracion' => 'Duracion',
			'cant_temario' => 'Cant Temario',
			'tutor' => 'Tutor',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_actualizacion' => 'Fecha Actualizacion',
			'estado' => 'Estado',
			'imagen' => 'Imagen',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('plan_estudio',$this->plan_estudio);
		$criteria->compare('duracion',$this->duracion,true);
		$criteria->compare('cant_temario',$this->cant_temario);
		$criteria->compare('tutor',$this->tutor);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('imagen',$this->imagen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cursos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
