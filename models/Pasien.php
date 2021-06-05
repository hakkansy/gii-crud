<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property string $id_kamar
 * @property int $id_pasien
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $no_hp
 * @property string $alamat
 *
 * @property KamarPasien $kamar
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kamar', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'agama', 'no_hp', 'alamat'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['id_kamar'], 'string', 'max' => 10],
            [['nama', 'agama', 'no_hp', 'alamat'], 'string', 'max' => 50],
            [['jenis_kelamin'], 'string', 'max' => 20],
            [['id_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => KamarPasien::className(), 'targetAttribute' => ['id_kamar' => 'id_kamar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kamar' => 'Id Kamar',
            'id_pasien' => 'Id Pasien',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'agama' => 'Agama',
            'no_hp' => 'No Hp',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Kamar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKamar()
    {
        return $this->hasOne(KamarPasien::className(), ['id_kamar' => 'id_kamar']);
    }
}
