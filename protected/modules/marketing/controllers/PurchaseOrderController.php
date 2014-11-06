<?php

class PurchaseOrderController extends RController {

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
                'actions' => array('create', 'update', 'lookupProspect', 'lookupvehicle', 'lookupPurchaseOrder'),
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
        $model = new PurchaseOrder;
        $autoNumber = $this->AutoNumber();

        $model->marketing_id = 1;
        $model->created_user = 1;
        $model->created_date = date('Y-m-d H:i:s');
        $prospect = "";
        $merk = "";
        $color = "";
        $year = "";
        $formType = "create";
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['PurchaseOrder'])) {
            $model->attributes = $_POST['PurchaseOrder'];
            $model->tender_no = $autoNumber["tenderNo"];
            $model->po_customer_no = $autoNumber["POCNo"];
            $model->po_system_no = $autoNumber["PONo"];
            $prospect = $_POST["prospect"];
            $merk = $_POST["merk"];
            $color = $_POST["color"];
            $year = $_POST["year"];
            if ($model->save()) {
                // $model = new PurchaseOrder('search');
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'prospect' => $prospect,
            'merk' => $merk,
            'color' => $color,
            'year' => $year,
            'formType' => $formType
        ));
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
        $model->updated_user = 1;
        $model->updated_date = date('Y-m-d H:i:s');
        $prospect = "";
        $merk = "";
        $color = "";
        $year = "";
        $formType = "update";
        if (isset($model->prospect)) {
            $prospect = $model->prospect->prospect_id;
        }
        if (isset($model->vehicle)) {
            $merk = $model->vehicle->merk;
            $color = $model->vehicle->color;
            $year = $model->vehicle->year;
        }
        if (isset($_POST['PurchaseOrder'])) {
            $model->attributes = $_POST['PurchaseOrder'];
            if ($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('update', array(
            'model' => $model,
            'prospect' => $prospect,
            'merk' => $merk,
            'color' => $color,
            'year' => $year,
            'formType' => $formType
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
        $dataProvider = new CActiveDataProvider('PurchaseOrder');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new PurchaseOrder('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['PurchaseOrder']))
            $model->attributes = $_GET['PurchaseOrder'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return PurchaseOrder the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = PurchaseOrder::model()->with('vehicle', 'prospect')->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param PurchaseOrder $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'purchase-order-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionLookUpProspect() {
        $prospect = $this->loadProspect();

        $this->renderPartial('_lookupProspect', array(
            'model' => $prospect,
        ));
    }

    public function actionLookUpPurchaseOrder() {
        $purchaseOrder = $this->loadAllPurchaseOrder();

        $this->renderPartial('_lookupPurchaseOrder', array(
            'model' => $purchaseOrder,
        ));
    }

    public function loadProspect() {
        $model = TProspect::model()->findAll();
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadAllPurchaseOrder() {
        $model = PurchaseOrder::model()->findAll();
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function actionLookUpVehicle() {
        $vehicle = $this->loadVehicle();

        $this->renderPartial('_lookupVehicle', array(
            'model' => $vehicle,
        ));
    }

    public function loadVehicle() {
        $model = Vehicle::model()->findAll();
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function AutoNumber() {
        $sql = "SELECT count(id) As kode FROM purchase_order";
        $AutoNumber = array();
        $noProspect = Yii::app()->db->createCommand($sql)->queryRow();
        $AutoNumber["tenderNo"] = 'TD' . date('d') . date('m') . date('Y') . '-' . (str_pad($noProspect['kode'] + 1, 2, 0, STR_PAD_LEFT));
        $AutoNumber["PONo"] = 'PO' . date('d') . date('m') . date('Y') . '-' . (str_pad($noProspect['kode'] + 1, 2, 0, STR_PAD_LEFT));
        $AutoNumber["POCNo"] = 'POC' . date('d') . date('m') . date('Y') . '-' . (str_pad($noProspect['kode'] + 1, 2, 0, STR_PAD_LEFT));
        return $AutoNumber;
    }

}
