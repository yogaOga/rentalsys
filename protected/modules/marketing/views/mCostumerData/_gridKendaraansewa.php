<div class="bloc">
    <div class="title">Data Kendaraan yang disewa</div> 
    <div class="content">

        <table id="tsewa">
            <?php
            echo CHtml::link('Open Dialog', '#', array(
                'onclick' => '$("#mydialog").dialog("open"); return false;',
            ));
            echo CHtml::hiddenField('mobil_id');
            ?>
            <thead>
                <tr>
                    <th>Merk/Type</th>
                    <th>Years</th>
                    <th>Unit</th>
                    <th>Klas Driver</th>
                    <th>Harga Sewa</th>
                    <th>Masa Kontrak</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
             //   if (count($modelDetails) > 0) {
               //     foreach($modelDetails as $i=>$row){
                    ?>
                <tr>
                    <td>
                        <?php 
                            // CJuiAutoComplete
                        
                            echo CHtml::htmlButton("+", array('onclick'=>'setDialog(this)')); 
                        ?>
                    </td>
                </tr>
                    <?php
            //        }
              //  }
                ?>

            </tbody>


        </table>
    </div>
</div>
<?php
$url = Yii::app()->createUrl('mCostumerData/add');
$js = <<<JS
      function add(){
        var id = $('#mobil_id').val();
        if(!jQuery.isNumeric(id)){
            alert('You must select a car');
            return false;
            }
        else{
            
            $.post("$url",{id:id},function(data){
                alert(id);
                $('#tsewa tbody').append(data);
                },'json');
    }
    }  
JS;
Yii::app()->clientScript->registerScript('onheadModal', $js, CClientScript::POS_HEAD);
?>
