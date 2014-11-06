<?php

class MApplicantController extends RController {

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
                'actions' => array('create', 'update', 'print', 'getBirthPlace', 'getCity', 'addFamily', 'removeFamily', 'updateFamily'),
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
        $this->layout = 'noSidebar';
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new MApplicant('insert');
        $modelMedicalApp = new HMedicalApplicant('insert');
        //$modelFamilyApp = new HFamilyApplicant('insert');
        //$modelOccupationApp = new HOccupationApplicant('insert');
        //$modelInformalEduApp = new HInformalEduApplicant('insert');
        //$modelFormalEduApp = new HFormalEduApplicant('insert');
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['MApplicant'])) {
            $transaction = $model->getDbConnection()->beginTransaction();
            $model->attributes = $_POST['MApplicant'];
            $model->applicant_no = $this->generateApplicantID();
            $model->created_at = date("Y-m-d H:m:s");
            $model->created_by = Yii::app()->user->id;


            try {
                if ($model->save()) {
                    $modelMedicalApp->applicant_id = $model->id;
                    $modelMedicalApp->save(FALSE);
                    /*
                      $modelFamilyApp->applicant_id = $model->id;
                      $modelFamilyApp->save(FALSE);

                      $modelOccupationApp->applicant_id = $model->id;
                      $modelOccupationApp->save(FALSE);

                      $modelInformalEduApp->applicant_id = $model->id;
                      $modelInformalEduApp->save(FALSE);

                      $modelFormalEduApp->applicant_id = $model->id;
                      $modelFormalEduApp->save(FALSE);
                     */
                    $transaction->commit();
                    Yii::app()->user->setFlash('success', "Data saved!");
                    $this->redirect(array('Update', 'id' => $model->id));
                }
            } catch (Exception $exc) {
                $transaction->rollback();
                Yii::app()->user->setFlash('error', "Data saved!");
                $this->redirect(array('Create'));
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

        $modelMedicalApp = HMedicalApplicant::model()->find('applicant_id = ' . $model->id);
        //$modelFamilyApp = HFamilyApplicant::model()->findAll('applicant_id = ' . $model->id);
        $modelFamilyApp = new HFamilyApplicant('search');


        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
        $this->performAjaxValidation($modelMedicalApp);

        if (isset($_POST['MApplicant'])) {
            $transaction = $model->getDbConnection()->beginTransaction();
            $model->attributes = $_POST['MApplicant'];
            // Collect Data Medical
            if ($_POST['HMedicalApplicant']) {
                $modelMedicalApp->attributes = $_POST['HMedicalApplicant'];
            }


            try {
                $model->save();
                $modelMedicalApp->save();
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
            'modelFamilyApp' => $modelFamilyApp,
            'modelMedicalApp' => $modelMedicalApp,
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
        $dataProvider = new CActiveDataProvider('MApplicant');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new MApplicant('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['MApplicant']))
            $model->attributes = $_GET['MApplicant'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return MApplicant the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = MApplicant::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param MApplicant $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'mapplicant-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Print Function.
     */
    public function actionPrint() {
        echo "Need custome code for display pdf";
    }

    public function actionGetBirthPlace() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(birth_place) FROM m_applicant WHERE birth_place LIKE :city_name";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":city_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionGetCity() {
        $data = MCity::model()->findAll('state_id=:state_id group by city_name', array(':state_id' => (int) $_POST['MApplicant']['state_id']));

        $data = CHtml::listData($data, 'id', 'city_name');
        // Empty value
        echo CHtml::tag('option', array('value' => ''), '- Select', true);
        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    protected function generateApplicantID() {
        $sql = "SELECT MAX(SUBSTR(applicant_no,4,7)) As kode FROM m_applicant";
        $noROGroup = Yii::app()->db->createCommand($sql)->queryRow();
        $noROGroup = 'APP' . (str_pad($noROGroup['kode'] + 1, 4, 0, STR_PAD_LEFT));
        return $noROGroup;
    }

    public function actionAddFamily() {
        $model = new HFamilyApplicant;

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->applicant_id = $applicant_id;
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

    public function actionRemoveFamily($id) {
        $model = HFamilyApplicant::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }

    public function actionGetBirthPlaceFamily() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(place_birth) FROM h_family_applicant WHERE place_birth LIKE :city_name group by place_birth";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":city_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionUpdateFamily() {

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HFamilyApplicant::model()->findByPk($id);
            $model->applicant_id = $applicant_id;
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

    public function actionGetFamily($id) {
        $model = HFamilyApplicant::model()->findByPk($id);
        echo CJSON::encode($model);
    }

    public function actionAddOccupation() {
        $model = new HOccupationApplicant();

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->applicant_id = $applicant_id;
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

    public function actionRemoveOccupation($id) {
        $model = HOccupationApplicant::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }

    public function actionGetOccupation($id) {
        $model = HOccupationApplicant::model()->findByPk($id);
        echo CJSON::encode($model);
    }

    public function actionUpdateOccupation() {
        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HOccupationApplicant::model()->findByPk($id);
            $model->applicant_id = $applicant_id;
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
            $qtxt = "SELECT distinct(company_name) FROM h_occupation_applicant WHERE company_name LIKE :company_name group by company_name";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":company_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionGetMajoringEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(majoring) FROM h_formal_edu_applicant WHERE majoring LIKE :majoring group by majoring";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":majoring", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionGetSchoolNameEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(school_name) FROM h_formal_edu_applicant WHERE school_name LIKE :school_name group by school_name";
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
            $qtxt = "SELECT distinct(city_country) FROM h_formal_edu_applicant WHERE city_country LIKE :city_country group by city_country";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":city_country", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionAddFEducation() {
        $model = new HFormalEduApplicant();

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->applicant_id = $applicant_id;
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
        $model = HFormalEduApplicant::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }

    public function actionGetFEdu($id) {
        $model = HFormalEduApplicant::model()->findByPk($id);
        echo CJSON::encode($model);
    }

    public function actionUpdateFEducation() {


        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HFormalEduApplicant::model()->findByPk($id);
            $model->applicant_id = $applicant_id;
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

    public function actionGetCourseNameIEducation() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(course_name) FROM h_informal_edu_applicant WHERE course_name LIKE :course_name group by course_name";
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
            $qtxt = "SELECT distinct(level) FROM h_informal_edu_applicant WHERE level LIKE :level group by level";
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
            $qtxt = "SELECT distinct(city_country) FROM h_informal_edu_applicant WHERE city_country LIKE :city_country group by city_country";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":city_country", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionAddIEducation() {
        $model = new HInformalEduApplicant();

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->applicant_id = $applicant_id;
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
        $model = HInformalEduApplicant::model()->findByPk($id);
        echo CJSON::encode($model);
    }

    public function actionUpdateIEducation() {

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model = HInformalEduApplicant::model()->findByPk($id);

            $model->applicant_id = $applicant_id;
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
        $model = HInformalEduApplicant::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }

    public function actionGetLangName() {
        $res = array();

        if (isset($_GET['term'])) {
            // http://www.yiiframework.com/doc/guide/database.dao
            $qtxt = "SELECT distinct(language_name) FROM h_language_applicant WHERE language_name LIKE :language_name group by language_name";
            $command = Yii::app()->db->createCommand($qtxt);
            $command->bindValue(":language_name", '%' . $_GET['term'] . '%', PDO::PARAM_STR);
            $res = $command->queryColumn();
        }

        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionAddLanguage() {
        $model = new HLanguageApplicant();
        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }

            $model->applicant_id = $applicant_id;
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

            $model = HLanguageApplicant::model()->findByPk($id);
            $model->applicant_id = $applicant_id;
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
        $model = HLanguageApplicant::model()->findByPk($id);
        $model->delete();
        echo "Data has removed!";

        Yii::app()->end();
    }

    public function actionGetLang($id) {
        $model = HLanguageApplicant::model()->findByPk($id);
        echo CJSON::encode($model);
    }

    public function actionHireNow($id) {

        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $$key = $val;
            }
            $modelApp = MApplicant::model()->findByPk($id);
            $modelFEduApp = $modelApp->hFormalEduApplicants;
            $modelIEduApp = $modelApp->hInformalEduApplicants;
            $modelLangApp = $modelApp->hLanguageApplicants;
            $modelOccApp = $modelApp->hOccupationApplicants;
            $modelMedApp = $modelApp->hMedicalApplicants;
            $modelFamApp = $modelApp->hFamilyApplicants;

            $modelEmp = new MEmployee();
            $modelFEduEmp = array();
            $modelIEduEmp = array();
            $modelLangEmp = array();
            $modelOccEmp = array();
            $modelMedEMp = array();
            $modelFamEmp = array();

            // Set employee attributes
            $modelEmp->applicant_id = $modelApp->id;
            $modelEmp->nip = '14090002';
            $modelEmp->join_date = $join_date;
            $modelEmp->position = $position;
            $modelEmp->attributes = $modelApp->attributes;
            $modelEmp->created_at = time();
            $modelEmp->created_by = Yii::app()->user->id;

            // Set Formal Education attributes
            foreach ($modelFEduApp as $key => $value) {
                $fEduEmp = new HFormalEduEmployee;
                $fEduEmp->employee_id = $modelEmp->id;
                $fEduEmp->attributes = $value->attributes;
                $modelFEduEmp[] = $fEduEmp;
            }

            // Set Informal Education attributes
            foreach ($modelIEduApp as $key => $value) {
                $iEduEmp = new HInformalEduEmployee;
                $iEduEmp->employee_id = $modelEmp->id;
                $iEduEmp->attributes = $value->attributes;
                $modelIEduEmp[] = $iEduEmp;
            }

            // Set Foreign Lang attributes
            foreach ($modelLangApp as $key => $value) {
                $fLangEmp = new HLanguageEmployee;
                $fLangEmp->employee_id = $modelEmp->id;
                $fLangEmp->attributes = $value->attributes;
                $modelLangEmp[] = $fLangEmp;
            }

            // Set Occupation attributes
            foreach ($modelOccApp as $key => $value) {
                $occEmp = new HOccupationEmployee;
                $occEmp->employee_id = $modelEmp->id;
                $occEmp->attributes = $value->attributes;
                $modelOccEmp[] = $occEmp;
            }

            // Set Medical attributes
            foreach ($modelMedApp as $key => $value) {
                $medEmp = new HMedicalEmployee;
                $medEmp->m_employee_id = $modelEmp->id;
                $medEmp->attributes = $value->attributes;
                $modelMedEMp[] = $medEmp;
            }


            // Set Family attributes
            foreach ($modelFamApp as $key => $value) {
                $famEmp = new HFamilyEmployee;
                $famEmp->employee_id = $modelEmp->id;
                $famEmp->attributes = $value->attributes;
                $modelFamEmp[] = $famEmp;
            }

            $transaction = $modelEmp->getDbConnection()->beginTransaction();
            try {
                if ($modelEmp->save(false)) {
                    foreach ($modelFEduEmp as $key => $vfEdu) {
                        $vfEdu->employee_id = $modelEmp->id;
                        $vfEdu->save();
                    }

                    foreach ($modelIEduEmp as $key => $viEdu) {
                        $viEdu->employee_id = $modelEmp->id;
                        $viEdu->save();
                    }

                    foreach ($modelLangEmp as $key => $vLang) {
                        $vLang->employee_id = $modelEmp->id;
                        $vLang->save();
                    }

                    foreach ($modelOccEmp as $key => $vOcc) {
                        $vOcc->employee_id = $modelEmp->id;
                        $vOcc->save();
                    }

                    foreach ($modelMedEMp as $key => $vMed) {
                        $vMed->m_employee_id = $modelEmp->id;
                        $vMed->save();
                    }

                    foreach ($modelFamEmp as $key => $vFam) {
                        $vFam->employee_id = $modelEmp->id;
                        $vFam->save();
                    }
                    $transaction->commit();
                    $this->redirect(Yii::app()->createUrl('hrd/MEmployee/Update', array('id' => $modelEmp->id)));
                }
            } catch (Exception $exc) {
                $transaction->rollback();
                echo $exc->getTraceAsString();
            }
            echo CActiveForm::validate($modelEmp);
            echo CActiveForm::validate($modelFEduEmp);
            echo CActiveForm::validate($modelIEduEmp);
            echo CActiveForm::validate($modelLangEmp);
            echo CActiveForm::validate($modelOccEmp);
            echo CActiveForm::validate($modelMedEMp);
            echo CActiveForm::validate($modelFamEmp);
        }
    }

}
