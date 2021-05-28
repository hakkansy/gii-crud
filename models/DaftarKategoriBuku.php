<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftar_kategori_buku".
 *
 * @property int $id
 * @property string $nama
 *
 * @property DaftarBuku[] $daftarBukus
 */
class DaftarKategoriBuku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daftar_kategori_buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * Gets query for [[DaftarBukus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDaftarBukus()
    {
        return $this->hasMany(DaftarBuku::className(), ['kategori_id' => 'id']);
    }
}
