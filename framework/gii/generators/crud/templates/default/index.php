<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
	array('label'=>'Create <?php echo $this->modelClass; ?>', 'url'=>array('create')),
	array('label'=>'Manage <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>
<div class="bloc">
    <div class="title"><?php echo $label; ?></div> 
    <div class="content">

        <?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>