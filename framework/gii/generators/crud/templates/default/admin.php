<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Manage',
);\n";
?>
$this->menu=array(
array('label'=>'List <?php echo $this->modelClass; ?>', 'url'=>array('index')),
array('label'=>'Create <?php echo $this->modelClass; ?>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#<?php echo $this->class2id($this->modelClass); ?>-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");

<?php
echo "?>\n";
?>

<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Manage <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>

<?php echo "<?php\n"; ?>
<?php echo "\$flashMessages = Yii::app()->user->getFlashes();\n"; ?>
<?php echo "if (\$flashMessages) {\n"; ?>
    <?php echo "foreach(\$flashMessages as \$key => \$message) {\n"; ?>
        <?php echo "echo '<div class=\"notif ' . \$key . ' bloc\">'\n"; ?>
                <?php echo ". '<strong>'.\$key.'</strong> '.\$message.'<a href=\"#\" class=\"close\">x</a></div>';\n"; ?>
    <?php echo "}\n"; ?>
<?php echo "}\n"; ?>
<?php echo "?>\n"; ?>

<div class="bloc">
    <div class="title">Actions</div>
    <div class="content">
        <div class="left">
            <?php echo "<?php echo CHtml::link('New', \$this->createUrl('Create'), array('class' => 'button')); ?>\n"; ?>
            <?php echo "<?php echo CHtml::link('Print', 'JavaScript:popPrint(\"' . \$this->createUrl('Print') . '\");', array('class' => 'button black')); ?>"; ?>
        </div>
        <div class="right">
            <form id="search" class="input placeholder">
                <input class="text" type="text" name="q" value="" />
            </form>
        </div>
    </div>
</div>

<div class="bloc">
    <div class="title">Table <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></div> 
    <div class="content">

        <?php echo "<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>"; ?>

        <div class="search-form" style="display:none">
            <?php echo "<?php \$this->renderPartial('_search',array(
			'model'=>\$model,
		)); ?>\n"; ?>
        </div><!-- search-form -->

        <?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
        <?php
        $count = 0;
        foreach ($this->tableSchema->columns as $column) {
            if (++$count == 7)
                echo "\t\t/*\n";
            echo "\t\t'" . $column->name . "',\n";
        }
        if ($count >= 7)
            echo "\t\t*/\n";
        ?>
        array(
        'class'=>'CButtonColumn',
        ),
        ),
        )); ?>

    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript">
// Popup window code
function popPrint(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=1000,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>