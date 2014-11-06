<?php
/* @var $this HWarningLetterController */
/* @var $model HWarningLetter */

$this->breadcrumbs = array(
    'Hwarning Letters' => array('index'),
    'Manage',
);
$this->menu = array(
    array('label' => 'List HWarningLetter', 'url' => array('index')),
    array('label' => 'Create HWarningLetter', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#hwarning-letter-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Manage Warning Letters</h1>

<?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    foreach ($flashMessages as $key => $message) {
        echo '<div class="notif ' . $key . ' bloc">'
        . '<strong>' . $key . '</strong> ' . $message . '<a href="#" class="close">x</a></div>';
    }
}
?>

<div class="bloc">
    <div class="title">Actions</div>
    <div class="content">
        <div class="left">
            <?php echo CHtml::link('New', $this->createUrl('Create'), array('class' => 'button')); ?>
            <?php echo CHtml::link('Print', 'JavaScript:popPrint("' . $this->createUrl('Print') . '");', array('class' => 'button black')); ?>        </div>
        <div class="right">
            <form id="search" class="input placeholder">
                <input class="text" type="text" name="q" value="" />
            </form>
        </div>
    </div>
</div>

<div class="bloc">
    <div class="title">Table Hwarning Letters</div> 
    <div class="content">

        <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button button')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->

        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'hwarning-letter-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'header' => 'No',
                    'value' => '$this->grid->dataProvider->Pagination->CurrentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
                    'htmlOptions' => array(
                        'style' => '',
                    ),
                ),
                //'employee_id',
                'nip',
                'employee_name',
                'position',
                'warning_type',
                'description',
                /*

                  'created_at',
                  'created_by',
                 */
                array(
                    'class' => 'CButtonColumn',
                    'htmlOptions' => array(
                        'style' => 'width:70px;'
                    ),
                ),
            ),
        ));
        ?>

    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript">
// Popup window code
    function popPrint(url) {
        popupWindow = window.open(
                url, 'popUpWindow', 'height=700,width=1000,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
    }
</script>