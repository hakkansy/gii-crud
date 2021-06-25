<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banyak_mahasiswa".
 *
 * @property int $id
 * @property string $nama
 * @property string $nomor_bp
 * @property int|null $id_prodi
 * @property int|null $id_jurusan
 *
 * @property Jurusan $jurusan
 * @property BanyakProdi $prodi
 */
class BanyakMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banyak_mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nomor_bp'], 'required'],
            [['id_prodi', 'id_jurusan'], 'integer'],
            [['nama', 'nomor_bp'], 'string', 'max' => 50],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id']],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => BanyakProdi::className(), 'targetAttribute' => ['id_prodi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nomor_bp' => 'Nomor Bp',
            'id_prodi' => 'Id Prodi',
            'id_jurusan' => 'Id Jurusan',
        ];
    }

    /**
     * Gets query for [[Jurusan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['id' => 'id_jurusan']);
    }

    /**
     * Gets query for [[Prodi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(BanyakProdi::className(), ['id' => 'id_prodi']);
    }
}
