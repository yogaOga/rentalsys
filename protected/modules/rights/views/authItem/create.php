<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Create :type', array(':type' => Rights::getAuthItemTypeName($_GET['type']))),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> <?php
            echo Rights::t('core', 'Create :type', array(
                ':type' => Rights::getAuthItemTypeName($_GET['type']),
            ));
            ?></h1>
<div class="bloc">
    <div class="title">
    <?php echo Rights::t('core', 'Form Create Task'); ?>
    </div>
    <div class="content">
        <div class="createAuthItem">

        <?php $this->renderPartial('_form', array('model' => $formModel)); ?>

        </div>
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>