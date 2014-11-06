<?php
/* @var $this PurchaseOrderController */
/* @var $model TProspect[] */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/styles/jqx.base.css" type="text/css" />

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxmenu.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxdropdownlist.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxgrid.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxgrid.selection.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxgrid.columnsresize.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxgrid.filter.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxgrid.sort.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxgrid.pager.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqwidgets/jqxgrid.grouping.js"></script> 
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
<div class="grid-view">
    <table class="items">
        <tr>
            <th>
            </th>
            <th>
                Prospect Id
            </th>
            <th>
                Company Name
            </th>
            <th>
                State
            </th>
        </tr>
        <?php foreach ($model as $value): ?>
            <tr id="<?php echo $value->id ?>">
                <td><input type="radio" name="selected" value="<?php echo $value->id ?>"></td>
                <td class="propect-id">
                    <?php echo $value->prospect_id ?>
                <td>
                <td>
                    <?php echo $value->company_name ?>
                </td>
                <td >
                    <?php echo $value->current_status ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>  

<div id='jqxgrid'>
</div>

<script type="text/javascript">
    $.getJSON("<?php echo $this->createAbsoluteUrl("/purchaseorder/getProspect"); ?>", function(data) {
        var source =
                {
                    datatype: "jsonp",
                    datafields: [
                        {name: 'prospect_id'},
                        {name: 'company_name'},
                    ],
                    localdata: data,
                   
                };
        var dataAdapter = new $.jqx.dataAdapter(source);
       
        $("#jqxgrid").jqxGrid({
            source: dataAdapter,
            columns: [
                {text: 'ID', datafield: 'prospect_id', width: 250},
                {text: 'Name', datafield: 'company_name', width: 150}
            ],
            sortable: true,
            pageable: true,
            autoheight: true,
            autowidth: true,
        });
    });



</script>
