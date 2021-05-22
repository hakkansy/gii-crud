<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "giibarang".
 *
 * @property int $id
 * @property string|null $kode_barang
 * @property string|null $nama_barang
 * @property string|null $satuan
 * @property int|null $id_jenis
 * @property int|null $id_supllier
 * @property float|null $harga
 * @property int|null $stok
 */
class Giibarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'giibarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis', 'id_supllier', 'stok'], 'integer'],
            [['harga'], 'number'],
            [['kode_barang'], 'string', 'max' => 10],
            [['nama_barang'], 'string', 'max' => 50],
            [['satuan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'satuan' => 'Satuan',
            'id_jenis' => 'Id Jenis',
            'id_supllier' => 'Id Supllier',
            'harga' => 'Harga',
            'stok' => 'Stok',
        ];
    }
}
