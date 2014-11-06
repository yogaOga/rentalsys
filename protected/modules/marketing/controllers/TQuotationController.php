<?php

class TQuotationController extends RController {

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
                'actions' => array('create', 'update','LookupCar','printQuotation','Pdf'),
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
         $model = new TQuotation;
        $modelDetail = new TDetailquotation;
        $modelDetails = array(new TDetailquotation);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $model->date = date('Y-m-d');
       if (isset($_POST['TQuotation'])) {
             $model->attributes = $_POST['TQuotation'];
             
             
             if (isset($_POST['TDetailquotation'])) {
                 $modelDetails = null;
                 foreach ($_POST['TDetailquotation'] as $key => $value) {
                       
                    $detail = new TDetailquotation();
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
						$detail->quotation_id = $model->id;
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

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TQuotation'])) {
            $model->attributes = $_POST['TQuotation'];
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
        $dataProvider = new CActiveDataProvider('TQuotation');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TQuotation('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TQuotation']))
            $model->attributes = $_GET['TQuotation'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TQuotation the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TQuotation::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TQuotation $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tquotation-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    public function actionLookupCar(){
        $this->layout = '\\layaouts\frameDalog';
        $car = new MCars;
        $this->renderPartial('_lookupCar',array('car'=>$car));
    }
     public function noQuotation() {
        $sql = "SELECT count(id) As kode FROM t_quotation";
        $noProspect = Yii::app()->db->createCommand($sql)->queryRow();
        $noProspect = date('d') . date('m') . date('Y') . '-' . (str_pad($noProspect['kode'] + 1, 2, 0, STR_PAD_LEFT));
        return $noProspect;
    }
    public function actionprintQuotation(){
        $model = new TQuotation;
        $this->renderPartial('quotation_01A', array('model'=>$model));
    }
     public function actionPdf()
	{
		$this->renderPartial('html2pdf');
	}
}
