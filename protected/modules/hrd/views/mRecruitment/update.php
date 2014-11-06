<?php
/* @var $this MRecruitmentController */
/* @var $model MRecruitment */

$this->breadcrumbs=array(
	'Mrecruitments'=>array('index'),
	$model->name=>array('view','id'=>$model->recruitment_id),
	'Update',
);

$this->menu=array(
array('label'=>'List MRecruitment', 'url'=>array('index')),
array('label'=>'Create MRecruitment', 'url'=>array('create')),
array('label'=>'View MRecruitment', 'url'=>array('view', 'id'=>$model->recruitment_id)),
array('label'=>'Manage MRecruitment', 'url'=>array('admin')),
);
?>

<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Recruitments</h1>
<div class="bloc">
    <div class="title">
		<div class="tabs" id="tabs1">
            <a href="#tab11">Informasi</a>
            <a href="#tab12">Kandidat</a>
            <a href="#tab13">Pewawancara</a>
            <a href="#tab14">Pertanyaan</a>
            <a href="#tab15">Psikotes</a>
            <a href="#tab16">Kesehatan</a>
            <a href="#tab16">Lain-Lain</a>
            <a href="#tab16">Media Promosi</a>
        </div>
	</div> 
    <div class="content">

        <div id="tab11">
            <?php $this->renderPartial('view', array('model' => $model)); ?>
        </div>
		<div id="tab12">
            <?php $this->renderPartial('_kandidat', array('modelKandidat' => $modelKandidat)); ?>
        </div>
		<div id="tab13">
            <?php $this->renderPartial('_pewawancara', array('modelPW' => $modelPW)); ?>
        </div>
    </div>
	
</div>
