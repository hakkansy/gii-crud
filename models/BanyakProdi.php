<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banyak_prodi".
 *
 * @property int $id
 * @property int $id_jurusan
 * @property string $prodi
 * @property string $keterangan
 *
 * @property Jurusan $jurusan
 */
class BanyakProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banyak_prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jurusan', 'prodi', 'keterangan'], 'required'],
            [['id_jurusan'], 'integer'],
            [['prodi', 'keterangan'], 'string', 'max' => 50],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jurusan' => 'Id Jurusan',
            'prodi' => 'Prodi',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Jurusan]].
     *
     * @return \yii\db\ActiveQuery
     */


    public static function getBanyakProdiList($cat_id, $dependent = false)
    {
        $subCategory = self::find()
            ->where(['id_jurusan'=> $cat_id]);
        /*$subCategory = self::find() 
            ->select(['prodi as name','id'])
            ->where(['id_jurusan'=> $jurusanID])
            ->asArray()
            ->all();

        return $subCategory;*/

        if ($dependent == "") {
            return $subCategory->select(['id','prodi as name'])->asArray()->all();
        }else{
            return $subCategory->select(['prodi'])->indexBy('id')->column();
        }
    }
}
