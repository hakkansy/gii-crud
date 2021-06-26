<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $id
 * @property string $KodeJurusan
 * @property string $NamaJurusan
 *
 * @property BanyakProdi[] $banyakProdis
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KodeJurusan', 'NamaJurusan'], 'required'],
            [['KodeJurusan'], 'string', 'max' => 20],
            [['NamaJurusan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'KodeJurusan' => 'Kode Jurusan',
            'NamaJurusan' => 'Nama Jurusan',
        ];
    }

    /**
     * Gets query for [[BanyakProdis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBanyakProdis()
    {
        return $this->hasMany(BanyakProdi::className(), ['id_jurusan' => 'id']);
    }

    public static function getJurusan()
    {
        return Self::find()->select(['NamaJurusan'])->indexBy('id')->column();
    }
}
