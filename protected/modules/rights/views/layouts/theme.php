<?php $this->beginContent(Rights::module()->appLayout); ?>

<div id="content">

    <?php $this->renderPartial('/_flash'); ?>

    <?php echo $content; ?>

</div><!-- content -->

<?php $this->endContent(); ?>