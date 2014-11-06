<?php

class TProspectController extends RController {

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
                'actions' => array('create', 'update', 'details', 'IL', 'lookup'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'noProspect', 'noProspectHistory'),
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
        $model = new TProspect;
        $history = new TProspectHistory;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        $model->marketing_id = 1;
        if (isset($_POST['TProspect'], $_POST['TProspectHistory'])) {
            CActiveForm::validate(array($model, $history));
            $model->attributes = $_POST['TProspect'];
            $model->prospect_id = $this->noProspect();
            $model->create_user = 1;
            $model->marketing_id = 1;
            $history->attributes = $_POST['TProspectHistory'];
            $history->prospect_id = $model->prospect_id;
            $history->history_id = 1;
            $history->create_at = date("Y-m-d H:i:s");
            $valid = $model->validate();
            $valid = $history->validate() && $valid;
            if ($valid) {
                if ($model->save()) {
                    $history->prospect_id = $model->prospect_id;
                    $history->history_id = 1;
                    $history->create_at = date("Y-m-d H:i:s");
                    $history->save(false);
                    $this->redirect(
                            array('update',
                                'id' => $model->id)
                    );
                }
            }
        }

        $this->render('create', array(
            'model' => $model,
            'history' => $history,
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
        $history = TProspectHistory::model()->findAllByAttributes(array('prospect_id' => $model->prospect_id));
        //$history = TProspectHistory::model()->findByAttributes(array('prospect_id'=>$model->prospect_id));
        // $history = TProspectHistory::model()->findByAttributes(array('prospect_id'=>$model->prospect_id));
        //    $history->prospect_id = $id;
        $modHistory = new TProspectHistory;
        if (isset($_POST['TProspect'])) {
            $model->attributes = $_POST['TProspect'];
            if ($model->save())
                $this->redirect(array('update', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
            'history' => $history,
            'modHistory' => $modHistory,
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
    public function actionLookup() {
        $model = new TProspect('searchLookup');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TProspect']))
            $model->attributes = $_GET['TProspect'];

        $this->render('lookup', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TProspect('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TProspect']))
            $model->attributes = $_GET['TProspect'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TProspect the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TProspect::model()->findByPk(array('id' => $id));
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadModelHistory($id) {
        $history = TProspectHistory::model()->findAllByAttributes(array('prospect_id' => $id));
        if ($history === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $history;
    }

    /**
     * Performs the AJAX validation.
     * @param TProspect $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tprospect-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionDetails($id) {
        // $this->layout = '//layouts/main';
        $model = TProspect::model()->findByPk($id);
        $modHistory = new TProspectHistory;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $modHistory->prospect_id = $model->prospect_id;
        if (isset($_POST['TProspectHistory'])) {
            $modHistory->attributes = $_POST['TProspectHistory'];
            if ($modHistory->save())
                $this->redirect(array('update', 'id' => $model->id));
        }

        $this->render('updateHistory', array(
            'model' => $model,
            'modHistory' => $modHistory
        ));
    }

    public function actionIL() {
        $model = TProspect::model()->findAll();
        $this->renderPartial('Introduce_Letter', array('model' => $model));
    }

    public function noProspect() {
        $sql = "SELECT count(id) As kode FROM t_prospect";
        $noProspect = Yii::app()->db->createCommand($sql)->queryRow();
        $noProspect = 'CPR' . date('Ym') . '-' . (str_pad($noProspect['kode'] + 1, 3, 0, STR_PAD_LEFT));
        return $noProspect;
    }

    public function noProspectHistory() {
        $sql = "SELECT count(id) As kode FROM t_prospect_history";
        $noHistory = Yii::app()->db->createCommand($sql)->queryRow();
        $noHistory = date('d') . date('m') . date('Y') . '-' . (str_pad($noHistory['kode'] + 1, 2, 0, STR_PAD_LEFT));
        return $noHistory;
    }

}
