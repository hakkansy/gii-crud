<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "giisupplier".
 *
 * @property int $id
 * @property string|null $nama_supplier
 * @property string|null $notelp
 * @property string|null $email
 * @property string|null $alamat
 */
class Giisupplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'giisupplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_supplier'], 'string', 'max' => 50],
            [['notelp', 'email', 'alamat'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_supplier' => 'Nama Supplier',
            'notelp' => 'Notelp',
            'email' => 'Email',
            'alamat' => 'Alamat',
        ];
    }
}
