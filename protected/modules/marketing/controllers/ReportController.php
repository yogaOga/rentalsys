<?php

class ReportController extends RController {

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function filters() {
        return array(
            'rights',
        );
    }
    
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

    public function actionIndex() {
        $this->render('index');
    }

    public function actionActivityPlan() {
        $model = TActivityPlan::model()->findAll();

        $this->render('activityPlan', array('model' => $model));
    }

    public function actionDurationActivityPlanDetail($id) {
        $model = TActivityPlan::model()->findByPk($id);
        $date1 = new DateTime($model->start_date);
        $date2 = new DateTime($model->end_date);
        $interval = $date1->diff($date2);
        $month = array();
        if (date('m', strtotime($model->start_date)) != date('m', strtotime($model->end_date)) && $model->working_duration <= 30)
            $rangeMonth = 1;
        else
            $rangeMonth = $interval->m + ($interval->y * 12);

        $firstDay = date('d', strtotime($model->start_date));
        $durationDay = $model->working_duration;

        $day = array();
        $incYear = 0;
        $incMonth = 0;
        for ($i = 0; $i <= $rangeMonth; $i++) {
            $month[] = date("F", mktime(0, 0, 0, date('m', strtotime($model->start_date)) + $i, 10));
            $tempDay = array();
            $countDay = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($model->start_date)) + $incMonth, date('y', strtotime($model->start_date)) + $incYear);

            if (date('m', strtotime($model->start_date)) + $i == 12) {
                $incMonth = 0;
                $incYear++;
            } else {
                $incMonth++;
            }
            $date = array();
            if ($i > 0 && $durationDay - $countDay > 0) {
                $tempDay['colspan'] = $durationDay - $countDay;
                $durationDay -= $countDay;
                for ($j = 1; $j <= $day['colspan']; $j++) {
                    $date[] = $j;
                }
            } else if ($i == 0) {
                $durationDay -= ($countDay - $firstDay );
                if ($durationDay > 0) {
                    $tempDay['colspan'] = $countDay - $firstDay + 1;
                } else {
                    $tempDay ['colspan'] = $model->working_duration + 1;
                }
                for ($j = (int) $firstDay; $j <= $firstDay + $tempDay['colspan'] - 1; $j++) {
                    $date[] = $j;
                }
            } else {
                $tempDay['colspan'] = $durationDay;
                for ($j = 1; $j <= $tempDay['colspan']; $j++) {
                    $date[] = $j;
                }
            }
            $tempDay["date"] = $date;
            $day[] = $tempDay;
        }
        $tempMonth = $rangeMonth + 1;
        $year = array();
        $rangeYear = $interval->y;
        $firstMonth = date('m', strtotime($model->start_date));


        for ($i = 0; $i <= $rangeYear; $i++) {

            $tempYear = array();
            $tempYear["y"] = date('Y', strtotime($model->start_date)) + $i;

            if ($tempMonth - 12 > 0 && $i > 0) {
                $tempMonth -= 12;
                $tempYear["m"] = 12;
                // $tempYear["m"] = 1;
            } else if ($i == 0) {
                $tempMonth -= (13 - $firstMonth);
                if ($tempMonth > 0) {
                    $tempYear["m"] = 13 - $firstMonth;
                    //$tempYear["m"] = 2;
                } else {
                    $tempYear["m"] = $tempMonth - $firstMonth;
                    // $tempYear["m"] =3;
                }
            } else {
                $tempYear["m"] = $tempMonth;
                //$tempYear["m"] = 4;
            }

            $year[$i] = $tempYear;
        }

        $this->renderPartial('durationActivityPlanDetail', array('model' => $model, 'month' => $month, 'year' => $year, 'day' => $day, 'm' => $durationDay));
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}