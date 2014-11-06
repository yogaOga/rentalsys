<?php
/* @var $this PurchaseOrderController */
/* @var $model TProspect[] */
/* @var $form CActiveForm */
?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagination.css" />





<?php
$dataProvider = new CActiveDataProvider('TProspect');

//$this->widget('zii.widgets.grid.CGridView', array(
//    'dataProvider' => $dataProvider,
//    'columns' => array(
//        'select' => array(
//            'header' => 'Timeliness',
//            'type' => 'raw',
//            'value' => "tes",
//        ),
//        'prospect_id',
//        'company_name',
//        'current_status'
//    )
//));
//
?>
<div id="content" style="margin-left: 0px">
    <table class="border" > 
        <thead>
            <tr>
                <th></th>
                <th>
                    Prospect Id
                </th>
                <th>
                    Company Name
                </th>
                <th>
                    Address
                </th>
            </tr>
        </thead>
        <tbody id="data">
            <?php foreach ($model as $value): ?>
            <tr id="<?php echo $value->id ?>" class="hide">
                    <td><input type="radio" name="selected" value="<?php echo $value->id ?>"></td>
                    <td class="<?php echo "prospectId" . $value->id ?>">
                        <?php echo $value->prospect_id ?>
                    </td>
                    <td>
                        <?php echo $value->company_name ?>
                    </td>
                    <td class="<?php echo "prospectAddress" . $value->id ?>">
                        <?php echo $value->company_address ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php //for ($i = 0; $i < 100; $i++): ?>
<!--                <tr class ="hide">
<td>A <?php // echo $i  ?></td>
<td>B<?php // echo $i  ?></td>
<td>
C<?php // echo $i  ?>
</td>
<td>D<?php // echo $i  ?></td>
</tr>-->
            <?php //endfor; ?>

        </tbody>
        <tr>
            <td colspan="4">
                <div class="pagination" style="text-align: center">
                   
                </div>

            </td>
        <tr>
    </table>
</div>  
<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pagination.js"></script>
<script>
    $(".pagination").pagination();
</script>