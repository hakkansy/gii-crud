<?php 
	namespace app\controllers;
	use Yii;
	use yii\web\Controller;
	use yii\data\Pagination;
	use app\models\Supplier;

	class SupplierController extends Controller{
		public function actionIndex(){
			$query = Supplier::find();
			$pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
			]);
			$isiSupplier = $query->orderBy('id')
				->offset($pagination->offset)
				->limit($pagination->limit)
				->all();
			return $this->render('index',[
				'isiSupplier'=> $isiSupplier,
				'pagination'=>$pagination,
			]);
		}
		public function actionCreate(){
			$model = new Supplier();

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				// Jika submit dan save berhasil tampilkan pesan..
				Yii::$app->session->setFlash('success','Data berhasil disimpan');
				return $this->refresh();
			}

			return $this->render('create',[
				'model' => $model,
			]);
		}
		public function actionUpdate($id)
		{
			$model = Supplier::findOne($id);

			if ($model->load(Yii::$app->request->post()) &&  $model->save()) {
				Yii::$app->session->setFlash('success','Data berhasil dibuah!');
				return $this->refresh();
			}
			return $this->render('update',['model' => $model,
			]);
		}

		public function actionDelete($id){
			$model=Supplier::findOne($id);
			$model->delete();
			return $this->redirect(['index']);
		}
	}
 ?>