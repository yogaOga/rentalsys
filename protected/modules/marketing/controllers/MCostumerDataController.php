<?php

class MCostumerDataController extends RController {

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
                'actions' => array('create', 'update', 'Add', 'title'),
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
        $model = new MCostumerData;
        $model->no_cmd = $this->noCMD();

        if (isset($_REQUEST['id'])) {
            $modelProspect = TProspect::model()->findByPk($_REQUEST['id']);
            $model->name_cmd = $modelProspect->company_name;
            $model->title_cmd = $modelProspect->company_title;
            $model->address_cmd = $modelProspect->company_address;
            $model->email_cmd = $modelProspect->email;
            $model->office_phone_cmd = $modelProspect->phone;
            $model->type_of_business = $modelProspect->l_business_type;
            $model->ownership = $modelProspect->l_ownership;
            $model->name_pic = $modelProspect->pic;
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['MCostumerData'])) {
            $model->attributes = $_POST['MCostumerData'];
            $model->create_at = date('d-M-Y');
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
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

        if (isset($_POST['MCostumerData'])) {
            $model->attributes = $_POST['MCostumerData'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
        $dataProvider = new CActiveDataProvider('MCostumerData');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new MCostumerData('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['MCostumerData']))
            $model->attributes = $_GET['MCostumerData'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return MCostumerData the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = MCostumerData::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param MCostumerData $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'mcostumer-data-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionAdd() {
        if (Yii::app()->request->isPostRequest) {
            $modDetail = new MCarRental;
            $mobil = MCars::model()->findByPk($_POST['id']);
            $tr .="<tr>";
            $tr .="<td>" . CHtml::activeTelField($modDetail, 'mobil_id', array('value' => $mobil->id)) . "</td>";

            $tr .="</tr>";

            echo CJSON::encode($tr);
            Yii::app()->end();
        }
    }

    public static function noCMD() {
        $sql = "SELECT count(no_cmd) As no_cmd FROM m_costumer_data";
        $noCMD = Yii::app()->db->createCommand($sql)->queryRow();
        $noCMD = 'CMD' . date('Ym') . '-'.(str_pad($noCMD['no_cmd'] + 1, 3, 0, STR_PAD_LEFT));
        return $noCMD;
    }

}
