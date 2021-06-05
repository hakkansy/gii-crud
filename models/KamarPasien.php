<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kamar_pasien".
 *
 * @property string $id_kamar
 * @property int $lantai
 * @property string $tipe_kamar
 *
 * @property Pasien[] $pasiens
 */
class KamarPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kamar_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kamar', 'lantai', 'tipe_kamar'], 'required'],
            [['lantai'], 'integer'],
            [['id_kamar'], 'string', 'max' => 10],
            [['tipe_kamar'], 'string', 'max' => 50],
            [['id_kamar'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kamar' => 'Id Kamar',
            'lantai' => 'Lantai',
            'tipe_kamar' => 'Tipe Kamar',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['id_kamar' => 'id_kamar']);
    }
}
