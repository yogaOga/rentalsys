<?php

class TBookingKendaraanController extends RController {

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
        $model = new TBookingKendaraan;
        $autoNumber = $this->AutoNumber();
        $model->ID_Custumer = "Automatic";
        $model->No_Booking = "Automatic";
        $model->Marketing_Officer = 1;
        $poc = "";
        $pos = "";
        $vehicle = "";
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TBookingKendaraan'])) {
            $model->attributes = $_POST['TBookingKendaraan'];
            $model->ID_Custumer = $autoNumber["customerNo"];
            $model->No_Booking = $autoNumber["bookingNo"];
            $poc = $_POST["poc"];
            $pos = $_POST["po"];
            $vehicle = $_POST["vehicle"];
            if ($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('create', array(
            'model' => $model,
            'poc' => $poc,
            'pos' => $pos,
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
        $poc = "";
        $pos = "";
        $vehicle = "";

        if (isset($model->pOSystem)) {
            $pos = $model->pOSystem->po_system_no;
            $poc = $model->pOSystem->po_customer_no;
        }

        if (isset($model->nomorPolisiKBMGS)) {
            $vehicle = $model->nomorPolisiKBMGS->plate_number;
        }
        if (isset($_POST['TBookingKendaraan'])) {
            $model->attributes = $_POST['TBookingKendaraan'];
            if ($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('update', array(
            'model' => $model,
            'poc' => $poc,
            'pos' => $pos,
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
        $dataProvider = new CActiveDataProvider('TBookingKendaraan');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TBookingKendaraan('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TBookingKendaraan']))
            $model->attributes = $_GET['TBookingKendaraan'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TBookingKendaraan the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TBookingKendaraan::model()->with('pOSystem', 'nomorPolisiKBMGS')->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TBookingKendaraan $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tbooking-kendaraan-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function AutoNumber() {
        $sql = "SELECT count(id) As kode FROM purchase_order";
        $AutoNumber = array();
        $noProspect = Yii::app()->db->createCommand($sql)->queryRow();
        $AutoNumber["customerNo"] = 'CUST' . date('d') . date('m') . date('Y') . '-' . (str_pad($noProspect['kode'] + 1, 2, 0, STR_PAD_LEFT));
        $AutoNumber["bookingNo"] = 'BGS' . date('d') . date('m') . date('Y') . '-' . (str_pad($noProspect['kode'] + 1, 2, 0, STR_PAD_LEFT));

        return $AutoNumber;
    }

}
