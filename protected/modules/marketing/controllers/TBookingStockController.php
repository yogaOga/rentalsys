<?php

class TBookingStockController extends RController {

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
                'actions' => array('create', 'update'),
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
        $model = new TBookingStock;
        $autoNumber = $this->AutoNumber();
        $model->Booking = "Automatic";
        $model->Booking_Date = date("Y-m-d");
        $model->Marketing_Officer = 1;

        $po = "";
        $vehicle = "";
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TBookingStock'])) {
            $date = date("Y-m-d");
            $model->Booking = $autoNumber["bookingNo"];
            $model->attributes = $_POST['TBookingStock'];
            $model->locked_date = date('Y-m-d', strtotime($date . ' + 7 days'));
            $po = $_POST["po"];
            $vehicle = $_POST["vehicle"];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_Booking_Stock));
        }

        $this->render('create', array(
            'model' => $model,
            'po' => $po,
            'vehicle' => $vehicle
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
        $po = "";
        $vehicle = "";
        if (isset($model->pOSystem)) {
            $po = $model->pOSystem->po_system_no;
            $_POST["po"] = $po;
        }

        if (isset($model->nomorPolisiKBMStockPool)) {
            $vehicle = $model->nomorPolisiKBMStockPool->plate_number;
        }
        if (isset($_POST['TBookingStock'])) {
            $model->attributes = $_POST['TBookingStock'];

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_Booking_Stock));
        }

        $this->render('update', array(
            'model' => $model,
            'po' => $po,
            'vehicle' => $vehicle
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
        $dataProvider = new CActiveDataProvider('TBookingStock');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TBookingStock('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TBookingStock']))
            $model->attributes = $_GET['TBookingStock'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TBookingStock the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TBookingStock::model()->with('moBooking', 'pOSystem', 'nomorPolisiKBMStockPool')->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TBookingStock $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tbooking-stock-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function AutoNumber() {
        $sql = "SELECT count(id) As kode FROM purchase_order";
        $AutoNumber = array();
        $noProspect = Yii::app()->db->createCommand($sql)->queryRow();
        $AutoNumber["bookingNo"] = 'BUP' . date('d') . date('m') . date('Y') . '-' . (str_pad($noProspect['kode'] + 1, 2, 0, STR_PAD_LEFT));

        return $AutoNumber;
    }

}
