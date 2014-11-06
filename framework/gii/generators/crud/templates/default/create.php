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
	'Create',
);\n";
?>

$this->menu=array(
array('label'=>'List <?php echo $this->modelClass; ?>', 'url'=>array('index')),
array('label'=>'Manage <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>

<div class="bloc">
    <div class="title">Create <?php echo $this->modelClass; ?></div> 
    <div class="content">
        <?php echo "<?php \$this->renderPartial('_formCreate', array('model'=>\$model)); ?>\n"; ?>
    </div>
</div>