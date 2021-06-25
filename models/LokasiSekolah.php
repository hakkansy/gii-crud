<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lokasi_sekolah".
 *
 * @property string $id_sekolah
 * @property string $nama_sekolah
 * @property string $kota
 * @property string $alamat
 */
class LokasiSekolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lokasi_sekolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'nama_sekolah', 'kota', 'alamat'], 'required'],
            [['id_sekolah'], 'string', 'max' => 10],
            [['nama_sekolah', 'kota', 'alamat'], 'string', 'max' => 50],
            [['id_sekolah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sekolah' => 'Id Sekolah',
            'nama_sekolah' => 'Nama Sekolah',
            'kota' => 'Kota',
            'alamat' => 'Alamat',
        ];
    }
}
