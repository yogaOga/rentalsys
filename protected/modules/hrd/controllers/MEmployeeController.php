<?php

class MEmployeeController extends RController {

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
    // Changed with RIGHTS Access Control
    /*
      public function accessRules()
      {
      return array(
      array('allow',  // allow all users to perform 'index' and 'view' actions
      'actions'=>array('index','view'),
      'users'=>array('@'),
      ),
      array('allow', // allow authenticated user to perform 'create' and 'update' actions
      'actions'=>array('create','update','print'),
      'users'=>array('@'),
      ),
      array('allow', // allow admin user to perform 'admin' and 'delete' actions
      'actions'=>array('admin','delete'),
      'users'=>array('@'),
      ),
      array('deny',  // deny all users
      'users'=>array('@'),
      ),
      );
      }
     */

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
        $model = new MEmployee;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['MEmployee'])) {
            $model->attributes = $_POST['MEmployee'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', "Data saved!");
                $this->redirect(array('admin'));
            }
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
        $model->applicant_no = $model->applicant->applicant_no;
        $modelMedicalEmp = HMedicalEmployee::model()->find('m_employee_id = '.$model->id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
        $this->performAjaxValidation($modelMedicalEmp);

        if (isset($_POST['MEmployee'])) {
            $transaction = $model->getDbConnection()->beginTransaction();
            if ($_POST['HMedicalEmployee']) {
                $modelMedicalEmp->attributes = $_POST['HMedicalEmployee'];
            }


            try {
                $model->save();
                $modelMedicalEmp->save();
                // $modelFamilyApp->save();

                $transaction->commit();
                Yii::app()->user->setFlash('success', "Data saved!");
                $this->redirect(array('update', 'id' => $model->id));
            } catch (Exception $exc) {
                $transaction->rollback();
                Yii::app()->user->setFlash('error', "Data error!" . $exc);
                $this->redirect(array('update', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'modelMedicalEmp' => $modelMedicalEmp,
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
        if (!isset($_GET['ajax'])) {
            Yii::app()->user->setFlash('success', "Data saved!");
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('MEmployee');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new MEmployee('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['MEmployee']))
            $model->attributes = $_GET['MEmployee'];
        //$model->applicant_no = $_GET['applicant_no'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return MEmployee the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = MEmployee::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param MEmployee $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'memployee-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Print Function.
     */
    public function actionPrint() {
        $this->renderPartial('print');
    }
    
    // Get Employee data to edit
    public function actionGetFamily($id) {
        $model = HFamilyEmployee::model()->findByPk($id);
        echo CJSON::encode($model);
    }
    
    // Update Data family    
     public function actionUpdateFamily() {

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HFamilyEmployee::model()->findByPk($id);
            //$model->employee_id = $applicant_id;
            $model->name = $name;
            $model->relation = $relation;
            $model->place_birth = $birth_place;
            $model->date_birth = $birth_date;
            $model->gender = $gender;
            $model->job = $job;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }
    
    // Function for add family employee
    public function actionAddFamily() {
        $model = new HFamilyEmployee;

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->employee_id = $applicant_id;
            $model->name = $name;
            $model->relation = $relation;
            $model->place_birth = $birth_place;
            $model->date_birth = $birth_date;
            $model->gender = $gender;
            $model->job = $job;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }
    
    public function actionGetBirthPlaceFamily() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(place_birth) FROM h_family_employee WHERE place_birth LIKE :city_name group by place_birth";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":city_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }
    
    // Remove fmily employee
    public function actionRemoveFamily($id) {
        $model = HFamilyEmployee::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }
    
    // Add occupation employee
    public function actionAddOccupation() {
        $model = new HOccupationEmployee();

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->employee_id = $applicant_id;
            $model->join_date = $join_date;
            $model->quit_date = $quit_date;
            $model->company_name = $company_name;
            $model->position = $position;
            $model->total_junior = $total_junior;
            $model->position_of_senior = $position_of_senior;
            $model->reason = $reason;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }
    
     public function actionGetCompanyOccupation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(company_name) FROM h_occupation_employee WHERE company_name LIKE :company_name group by company_name";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":company_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }
    
    public function actionRemoveOccupation($id) {
        $model = HOccupationEmployee::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }
    
     public function actionGetOccupation($id) {
        $model = HOccupationEmployee::model()->findByPk($id);
        echo CJSON::encode($model);
    }
    
    public function actionUpdateOccupation() {
        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HOccupationEmployee::model()->findByPk($id);
            $model->employee_id = $applicant_id;
            $model->join_date = $join_date;
            $model->quit_date = $quit_date;
            $model->company_name = $company_name;
            $model->position = $position;
            $model->total_junior = $total_junior;
            $model->position_of_senior = $position_of_senior;
            $model->reason = $reason;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }
    
    public function actionAddFEducation() {
        $model = new HFormalEduEmployee();

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->employee_id = $applicant_id;
            $model->education_name = $education_name;
            $model->graduate_year = $graduate_year;
            $model->majoring = $majoring;
            $model->school_name = $school_name;
            $model->city_country = $city_country;
            $model->certificate_number = $certificate_number;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }
    
    public function actionGetSchoolNameEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(school_name) FROM h_formal_edu_employee WHERE school_name LIKE :school_name group by school_name";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":school_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }
    
    public function actionGetCityCountryEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(city_country) FROM h_formal_edu_employee WHERE city_country LIKE :city_country group by city_country";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":city_country", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }
    
    public function actionGetFEdu($id) {
        $model = HFormalEduEmployee::model()->findByPk($id);
        echo CJSON::encode($model);
    }
    
    public function actionUpdateFEducation() {


        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HFormalEduEmployee::model()->findByPk($id);
            $model->employee_id = $applicant_id;
            $model->education_name = $education_name;
            $model->graduate_year = $graduate_year;
            $model->majoring = $majoring;
            $model->school_name = $school_name;
            $model->city_country = $city_country;
            $model->certificate_number = $certificate_number;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }
    
     public function actionRemoveFEdu($id) {
        $model = HFormalEduEmployee::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }
    
    public function actionGetCourseNameIEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(course_name) FROM h_informal_edu_employee WHERE course_name LIKE :course_name group by course_name";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":course_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionGetLevelIEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(level) FROM h_informal_edu_employee WHERE level LIKE :level group by level";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":level", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionGetCityCountryIEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(city_country) FROM h_informal_edu_employee WHERE city_country LIKE :city_country group by city_country";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":city_country", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionAddIEducation() {
        $model = new HInformalEduEmployee();

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->employee_id = $applicant_id;
            $model->join_date = $join_date;
            $model->course_name = $course_name;
            $model->level = $level;
            $model->city_country = $city_country;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }

    public function actionGetIEdu($id) {
        $model = HInformalEduEmployee::model()->findByPk($id);
        echo CJSON::encode($model);
    }

    public function actionUpdateIEducation() {

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HInformalEduEmployee::model()->findByPk($id);

            $model->employee_id = $applicant_id;
            $model->join_date = $join_date;
            $model->course_name = $course_name;
            $model->level = $level;
            $model->city_country = $city_country;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }

    public function actionRemoveIEdu($id) {
        $model = HInformalEduEmployee::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }
    
    public function actionGetLangName() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(language_name) FROM h_language_employee WHERE language_name LIKE :language_name group by language_name";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":language_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionAddLanguage() {
        $model = new HLanguageEmployee();
        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->employee_id = $applicant_id;
            $model->language_name = $language_name;
            $model->speaking = $speaking;
            $model->writing = $writing;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }

    public function actionUpdateLanguage() {

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HLanguageEmployee::model()->findByPk($id);
            $model->employee_id = $applicant_id;
            $model->language_name = $language_name;
            $model->speaking = $speaking;
            $model->writing = $writing;

            if ($model->save()) {
                echo "1|Data has been saved!";
            } else {
                echo "0|Data failed to save. Field with (*) is required or data can't empty!|" . CActiveForm::validate($model);
            }

            Yii::app()->end();
        }
    }

    public function actionRemoveLang($id) {
        $model = HLanguageEmployee::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }

    public function actionGetLang($id) {
        $model = HLanguageEmployee::model()->findByPk($id);
        echo CJSON::encode($model);
    }

}
