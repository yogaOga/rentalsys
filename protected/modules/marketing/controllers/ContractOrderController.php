<?php

class ContractOrderController extends RController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights',
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'tambah'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('@'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
     public function actionCreate() {
        $model = new ContractOrder;
        $modelDetail = new DetailCo;
        $modelDetails = array(new DetailCo);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $model->MarketingID = 1;
       if (isset($_POST['ContractOrder'])) {
             $model->attributes = $_POST['ContractOrder'];
             $model->id_Contract_Order = $this->noCO;
             $model->MarketingID = 1;
             if (isset($_POST['DetailCo'])) {
                 $modelDetails = null;
                 foreach ($_POST['DetailCo'] as $key => $value) {
                       
                    $detail = new DetailCo();
                    $detail->attributes = $value;					
                	$modelDetails[] = $detail;
                }
             }
             
             // Validations
             $valid = $model->validate();
             foreach ($modelDetails as $data) {

                $valid = $data->validate() & $valid;
             }
             
             // Save Data
             if ($valid) {
                $transaction = $model->getDbConnection()->beginTransaction();
                try {
                    $model->save();
                    $model->refresh();
 
                    foreach ($modelDetails as $detail) {
						$detail->co_id = $model->id_Contract_Order;
						$detail->save();
                    }
                    $transaction->commit();
                } catch (Exception $e) {
                    $transaction->rollback();
                    throw new CHttpException(400, $e.'Data gagal disimpan.');
                }
 
 
 
                $this->redirect(array('index'));
            }
        
        }

        $this->render('create', array(
            'model' => $model,
            'modelDetail' => $modelDetail,
            'modelDetails' => $modelDetails,
        ));
    }

    public function actionTambah() {
        if (Yii::app()->request->isPostRequest) {
            $modelDetail = new DetailCo;
            $mobil = MCars::model()->findByPk($_POST['id']);
            $merk = MVehicle::model()->findByPk($mobil->vehicle_id);
            $modelMobil = MCarsModels::model()->findByPk($mobil->model_id);
            $tr = "<tr>";
            $tr .= "<td>" . CHtml::activeHiddenField($modelDetail, "[$mobil->id]car_id", array('class' => 'id', 'value' => $mobil->id))
                    . $mobil->no_police . "</td>";
            $tr .= "<td>" . $merk->name_vehicle . " / " . $modelMobil->model_name . "</td>";
            $tr .= "<td>" . $mobil->color_id . "</td>";
            $tr .= "<td>" . $mobil->year . "</td>";
            $tr .= "<td>" . CHtml::activeTextField($modelDetail, "[$mobil->id]qty",array('placeholder'=>'NUMBER OF UNITS')) . "</td>";
            $tr .= "<td>" . CHtml::activeTextField($modelDetail, "[$mobil->id]rate",array('placeholder'=>'RATE')) . "</td>";
            $tr .= "<td>" . CHtml::activeTextField($modelDetail, "[$mobil->id]contract_period",array('placeholder'=>'CONTRACT PERIOD')) . "</td>";
            $tr .= "<td>" . CHtml::link('batal','#',array('onclick'=>'batal(this)')) . "</td>";

            $tr .= "</tr>";
            echo CJSON::encode($tr);
            YII::app()->end();
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ContractOrder'])) {
            $model->attributes = $_POST['ContractOrder'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_Contract_Order));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('ContractOrder');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new ContractOrder('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ContractOrder']))
            $model->attributes = $_GET['ContractOrder'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ContractOrder the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ContractOrder::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ContractOrder $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'contract-order-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
     public function noCO() {
        $sql = "SELECT count(id) As kode FROM ContractOrder";
        $co = Yii::app()->db->createCommand($sql)->queryRow();
        $co = date('d') . date('m') . date('Y') . '-' . (str_pad($co['kode'] + 1, 2, 0, STR_PAD_LEFT));
        return $co;
    }
}