<?php

namespace app\controllers;

use Yii;
use app\models\Divisiones;
use app\models\DivisionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mPDF;
use yii\db\Query;
use yii\helpers\Html;

/**
 * DivisionesController implements the CRUD actions for Divisiones model.
 */
class DivisionesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Divisiones models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DivisionesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Divisiones model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Divisiones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Divisiones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Divisiones model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Divisiones model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Divisiones model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Divisiones the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Divisiones::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


public function actionPdfasistencia($id)
        {


		$mpdf=new mPDF();
        $mpdf->AddPage('utf-8','A4-V','V','',15,15,35,15,9,9,'V'); 
		

		 if (isset($_GET['id'])) {

				$query = new Query; //->join('INNER JOIN', 't_cuentas', 't_cuentas_personas.idcuenta = t_cuentas.id')
				$query->select(['alumnos.nombre as nombrealumno', 'divisiones.nombre as nombredivision'])->from('alumnos')->join('INNER JOIN', 'divisiones', 'divisiones.id = alumnos.iddivision')->where('iddivision='.$_GET['id']);
				$command = $query->createCommand();
				$data = $command->queryAll();

					 //$html = '<h1>CUENTA: Top ' . $this->limit . ' cuentas</h1>';
					 $html = '<table>';
					$primer_linea=true;
					 foreach ($data as $row) {
						if($primer_linea) { 
							$primer_linea=false;
							$html = '<table border=1><tr><td colspan=1><h3>Division:'.$row['nombredivision'].' </h3></td><td>__/__/_____</td><td>__/__/_____</td><td>__/__/_____</td><td>__/__/_____</td><td>__/__/_____</td><td>__/__/_____</td><td>__/__/_____</td><td>__/__/_____</td></tr>';
						}
						 $html .= '<tr>';

						 $html .= '<td>' . $row['nombrealumno'] . '</td>';
						 $html .= '<td></td>';
						 $html .= '<td></td>';
						 $html .= '<td></td>';
						 $html .= '<td></td>';
						 $html .= '<td></td>';
						 $html .= '<td></td>';
						 $html .= '<td></td>';
						 $html .= '<td></td>';


					 }
					 $html .= '</tr></table>';
					$mpdf->WriteHTML($html);
					//return Html::encode($html);
		}
		$mpdf->Output();
        exit;




        }
}
