<?php

class MComplainExistingCustomerController extends RController {

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
                'actions' => array('create', 'update', 'add'),
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
        $model = new MComplainExistingCustomer;
        $complains = array();
        $check = '';
        if (!Yii::app()->user->hasState("complains")) {
            Yii::app()->user->setState("complains", $complains);
        } else {
            $complains = Yii::app()->user->getState("complains", $complains);
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $model->created_user = 1;
        $model->created_date = date('Y-m-d H:i:s');
        $model->marketing_officer = 1;

        if (isset($_POST['MComplainExistingCustomer'])) {
            $model->attributes = $_POST['MComplainExistingCustomer'];

            if (isset($_GET["type"]) && $_GET["type"] == "add") {
                $complains[] = $model;
                Yii::app()->user->setState("complains", $complains);
            } else if (isset($_GET["type"]) && $_GET["type"] == "delete") {
                $check = "masuk";
                $complains[$_GET["idx"]] = null;
                $newComplain = array();
                foreach ($complains as $complain) {
                    if (isset($complain) && $complain != null)
                        $newComplain[] = $complain;
                }
                $complains = $newComplain;
                Yii::app()->user->setState("complains", $complains);
            } else if (isset($_GET["type"]) && $_GET["type"] == "submit") {
                $check = count($complains);
                if (count($complains) > 0) {
                    foreach ($complains as $complain) {
                        $complain->periode = $model->periode;
                        $complain->branch = $model->branch;
                        $complain->marketing_officer = $model->marketing_officer;
                        $complain->created_user = $model->created_user;
                        $complain->created_date = $model->created_date;
                        $complain->marketing_officer = $model->marketing_officer;
                        $complain->save(false);
                    }

                    Yii::app()->user->setState("complains", null);
                    //if ($model->save())
                    $this->redirect($this->createAbsoluteUrl("mComplainExistingCustomer/admin"));
                }
            }
        } else {
            if (isset($_GET["type"]) && $_GET["type"] == "delete") {
                $check = "masuk";
                $complains[$_GET["idx"]] = null;
                $newComplain = array();
                foreach ($complains as $complain) {
                    if (isset($complain) && $complain != null)
                        $newComplain[] = $complain;
                }
                $complains = $newComplain;
                Yii::app()->user->setState("complains", $complains);
            } else
                Yii::app()->user->setState("complains", null);
        }
        //$check = $_POST['MComplainExistingCustomer']["MComplainExistingCustomer[marketing_officer]"];
        $this->render('create', array(
            'model' => $model,
            'complains' => $complains,
            'check' => $check
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
        if (isset($_POST['MComplainExistingCustomer'])) {
            $model->attributes = $_POST['MComplainExistingCustomer'];
            if ($model->save())
                $this->redirect(array('admin'));
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
        $dataProvider = new CActiveDataProvider('MComplainExistingCustomer');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new MComplainExistingCustomer('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['MComplainExistingCustomer']))
            $model->attributes = $_GET['MComplainExistingCustomer'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return MComplainExistingCustomer the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = MComplainExistingCustomer::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param MComplainExistingCustomer $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'mcomplain-existing-customer-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
