<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "informasi_ujian".
 *
 * @property int $nomor_pendaftaran
 * @property string $nama
 * @property string $kota_ujian
 * @property string $lokasi_ujian
 * @property string $id_sekolah
 *
 * @property LokasiSekolah $sekolah
 */
class InformasiUjian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informasi_ujian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kota_ujian', 'lokasi_ujian', 'id_sekolah'], 'required'],
            [['nama', 'kota_ujian', 'lokasi_ujian', 'id_sekolah'], 'string', 'max' => 50],
            [['id_sekolah'], 'exist', 'skipOnError' => true, 'targetClass' => LokasiSekolah::className(), 'targetAttribute' => ['id_sekolah' => 'id_sekolah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nomor_pendaftaran' => 'Nomor Pendaftaran',
            'nama' => 'Nama',
            'kota_ujian' => 'Kota Ujian',
            'lokasi_ujian' => 'Lokasi Ujian',
            'id_sekolah' => 'Id Sekolah',
        ];
    }

    /**
     * Gets query for [[Sekolah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSekolah()
    {
        return $this->hasOne(LokasiSekolah::className(), ['id_sekolah' => 'id_sekolah']);
    }
}
