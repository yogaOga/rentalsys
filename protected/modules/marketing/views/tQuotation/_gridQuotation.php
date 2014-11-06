<table id="grid-quotation">
    <thead>
        <tr>
            <th>Vehicle</th>
            <th>Model Car</th>
            <th>Type</th>
            <th>Transmision</th>
            <th>Rate</th>
            <th>Period(Year)</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (count($modelDetails) > 0) {
            foreach ($modelDetails as $i => $detail) {
                $no = 1;
                ?>
                <tr>
                    <td><?php echo CHtml::activeDropDownList($detail, "[$i]vehicle_id", CHtml::listData(MVehicle::model()->findAll(), 'id', 'name_vehicle'), array('empty' => '-select-'))
        ?></td>
                    <td><?php echo CHtml::activeDropDownList($detail, "[$i]model_id", CHtml::listData(MCarsModels::model()->findAll(), 'id', 'model_name'), array('empty' => '-select-'))
        ?></td>
                    <td><?php echo CHtml::activeDropDownList($detail, "[$i]type_id", CHtml::listData(MTypeCars::model()->findAll(), 'id', 'type_name'), array('empty' => '-select-'))
        ?></td>
                    <td><?php echo CHtml::activeTextField($detail, "[$i]transmisi", array('placeholder' => 'transmisi')); ?></td>
                    <td><?php echo CHtml::activeTextField($detail, "[$i]rate", array('placeholder' => 'rate')); ?></td>
                    <td><?php echo CHtml::activeTextField($detail, "[$i]periode", array('placeholder' => 'periode')); ?></td>
                    <td><?php // echo CHtml::link('Add', '#', array('onclick' => 'addRow(this);')) ?></td>
                </tr>
                <?php
            }
        }
        ?>

    </tbody>
</table>
<br>
<br>
<div class="submit">
    <?php echo CHtml::button('Add Row', array('onclick' => 'addRow(this);')); ?>
</div>
<br>
<br>
<?php
/*
  $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
  'id' => 'mydialog',
  'options' => array(
  'title' => 'Daftar Vendor',
  'autoOpen' => false,
  'modal' => true,
  'width' => 800,
  'height' => 400,
  'resizable' => false,
  ),
  ));
  $modCar = new MCars('search');
  $modCar->unsetAttributes();  // clear any default values
  if (isset($_GET['MCars']))
  $modCar->attributes = $_GET['MCars'];
  $this->widget('zii.widgets.grid.CGridView', array(
  'id' => 'mcars-grid',
  'dataProvider' => $modCar->search(),
  'filter' => $modCar,
  'columns' => array(
  array(
  'header' => 'Pilih',
  'type' => 'raw',
  'value' => 'CHtml::Link("Pilih","#",array("class"=>"btn-small",
  "id" => "selectBahan",
  "   onClick" => "
  $(\'#' . Chtml::activeId($modelDetail, 'car_id') . '\').val(\'$data->id\');
  $(\'#TDetailquotation_0_vehicle\').val(\'$data->id\')

  $(\'#mydialog\').dialog(\'close\');
  return false;"))',
  ),
  'vehicle_id',
  'model_id',
  'type_id',
  'color_id',
  'no_police',
  ),
  ));
  $this->endWidget('zii.widgets.jui.CJuiDialog');
 */
?>
<div class="span-1">

    <?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(// the dialog
        'id' => 'dialogMobil',
        'options' => array(
            'title' => 'Cars',
            'autoOpen' => false,
            'modal' => true,
            'width' => 300,
            'height' => 300,
            'resizable' => false,
        ),
    ));
//-----------Cari Mobil----------
    ?>
    <div id="content">
        <div class="bloc">
            <select name="tes">
                <option>haha</option>
            </select>
        </div>
    </div><!-- content -->
    <?php $this->endWidget(); ?>

</div>
<?php
$minus = CHtml::link('delete', '#', array('onclick' => 'removeRow(this); return false;'));
$js = <<<JS
        function addRow(obj){
        var tr = $('#grid-quotation tbody tr:first').html();
        $('#grid-quotation>tbody>tr:last').after('<tr>'+tr+'</tr>');
        $('#grid-quotation>tbody>tr:last>td:last').append('$minus');
        
            renameInput('TDetailquotation','vehicle_id');
            renameInput('TDetailquotation','model_id');
            renameInput('TDetailquotation','type_id');
            renameInput('TDetailquotation','transmisi');
            renameInput('TDetailquotation','rate');
            renameInput('TDetailquotation','periode');
            renameInput('TDetailquotation','vehicle');
            }
       function renameInput(modelName, attributeName)
            {
        var trLength = $('#grid-quotation tr').length;
        var i = -1;
        $('#grid-quotation tr').each(function() {
          
            $(this).find('input[name$="[' + attributeName + ']"]').attr('name', modelName + '[' + i + '][' + attributeName + ']');
            $(this).find('input[name$="[' + attributeName + ']"]').attr('id', modelName + '_' + i + '_' + attributeName + '');
            $(this).find('textarea[name$="[' + attributeName + ']"]').attr('name', modelName + '[' + i + '][' + attributeName + ']');
            $(this).find('textarea[name$="[' + attributeName + ']"]').attr('id', modelName + '_' + i + '_' + attributeName + '');
            $(this).find('select[name$="[' + attributeName + ']"]').attr('name', modelName + '[' + i + '][' + attributeName + ']');
            $(this).find('select[name$="[' + attributeName + ']"]').attr('id', modelName + '_' + i + '_' + attributeName + '');
            i++;
        });
    }
         function setDialog(obj) {
        parent = $(obj).parents(".input-append").find("input").attr("id");
        dialog = "#dialogMobil";
        $(dialog).attr("parent-dialogs", parent);
        $(dialog).dialog("open");
    }

    function setAutoSelect() {
        dialog = "#dialogMobil";
        parent = $(dialog).attr("parent-dialogs");
        obj = $("#" + parent);
        $(obj).parents('tr').find('input[name$="[nama_merk]"]').val($("#OPMobilM_merk_id option:selected").text());
        $(obj).parents('tr').find('input[name$="[nama_model]"]').val($("#OPMobilM_modelmobil_id option:selected").text());
        $(obj).parents('tr').find('input[name$="[nama_tipe]"]').val($("#OPMobilM_typemobil_id option:selected").text());
        $(obj).parents('tr').find('input[name$="[nama_warna]"]').val($("#OPMobilM_warnamobil_id option:selected").text());
        $(obj).parents('tr').find('input[name$="[tipe_transmisi]"]').val($("#OPMobilM_transmisi_l option:selected").text());

        $(obj).parents('tr').find('input[name$="[namamobil]"]').val($('#OPMobilM_merk_id').val());
        $(obj).parents('tr').find('input[name$="[modelmobil]"]').val($('#OPMobilM_modelmobil_id').val());
        $(obj).parents('tr').find('input[name$="[typemobil]"]').val($('#OPMobilM_typemobil_id').val());
        $(obj).parents('tr').find('input[name$="[warnamobil]"]').val($('#OPMobilM_warnamobil_id').val());

        document.getElementById("form-mobil").reset();
        $(dialog).dialog("close");
		hitungSemua();
    }
   function removeRow(obj)
    {
        if (confirm('Anda yakin akan menghapus item tersebut?')) {
            $(obj).parents('tr').detach();

            renameInput('TDetailquotation','vehicle_id');
            renameInput('TDetailquotation','model_id');
            renameInput('TDetailquotation','type_id');
            renameInput('TDetailquotation','transmisi');
            renameInput('TDetailquotation','rate');
            renameInput('TDetailquotation','periode');
            renameInput('TDetailquotation','vehicle');
        }
    }
JS;
Yii::app()->clientScript->registerScript('multiple input', $js, CClientScript::POS_HEAD);
?>