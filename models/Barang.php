<?php 
	namespace app\models;

	use yii\db\ActiveRecord;

	class Barang extends ActiveRecord{
		public static function tableName(){
			return 'barang';
		}
	public function rules(){
			return [
				[['kode_barang','nama_barang','satuan','id_jenis','id_supplier','harga','stok'], 'required'],
				[['kode_barang','nama_barang','satuan'],'string'],
				[['harga'],'double'],
				[['id_jenis','id_supplier'],'integer'],
			];
		}
	}
 ?>