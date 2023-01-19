<?php

/**
 * This is the model class for table "temarios".
 *
 * The followings are the available columns in table 'temarios':
 * @property integer $ID
 * @property string $nombre
 * @property string $descripcion
 * @property integer $curso
 * @property string $duracion
 * @property string $video
 * @property string $presentacion
 * @property string $pdf
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $estado
 * @property string $imagen
 */
class Temarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'temarios';
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
			array('curso, estado', 'numerical', 'integerOnly'=>true),
			array('nombre, duracion, video, presentacion, pdf, imagen', 'length', 'max'=>50),
			array('descripcion, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, nombre, descripcion, curso, duracion, video, presentacion, pdf, fecha_creacion, fecha_actualizacion, estado, imagen', 'safe', 'on'=>'search'),
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
			'curso' => 'Curso',
			'duracion' => 'Duracion',
			'video' => 'Video',
			'presentacion' => 'Presentacion',
			'pdf' => 'Pdf',
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
		$criteria->compare('curso',$this->curso);
		$criteria->compare('duracion',$this->duracion,true);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('presentacion',$this->presentacion,true);
		$criteria->compare('pdf',$this->pdf,true);
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
	 * @return Temarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
