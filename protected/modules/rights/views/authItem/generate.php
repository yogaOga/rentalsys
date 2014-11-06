<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Generate items'),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> <?php echo Rights::t('core', 'Generate items'); ?></h1>
<div class="bloc">
    <div class="title">
    <?php echo Rights::t('core', 'Form Generate Items'); ?>
    </div>
    <div class="content">
        <div id="generator">
            <p><?php echo Rights::t('core', 'Please select which items you wish to generate.'); ?></p>

            <div class="form">

            <?php $form = $this->beginWidget('CActiveForm'); ?>

                <div class="row">

                    <table class="items generate-item-table" border="0" cellpadding="0" cellspacing="0">

                        <tbody>

                            <tr class="application-heading-row">
                                <th colspan="3"><?php echo Rights::t('core', 'Application'); ?></th>
                            </tr>

                            <?php
                            $this->renderPartial('_generateItems', array(
                                'model' => $model,
                                'form' => $form,
                                'items' => $items,
                                'existingItems' => $existingItems,
                                'displayModuleHeadingRow' => true,
                                'basePathLength' => strlen(Yii::app()->basePath),
                            ));
                            ?>

                        </tbody>

                    </table>

                </div>

                <div class="row">

                    <?php
                    echo CHtml::link(Rights::t('core', 'Select all'), '#', array(
                        'onclick' => "jQuery('.generate-item-table').find(':checkbox').attr('checked', 'checked'); return false;",
                        'class' => 'selectAllLink'));
                    ?>
                    /
                    <?php
                    echo CHtml::link(Rights::t('core', 'Select none'), '#', array(
                        'onclick' => "jQuery('.generate-item-table').find(':checkbox').removeAttr('checked'); return false;",
                        'class' => 'selectNoneLink'));
                    ?>

                </div>

                <div class="row">

                <?php echo CHtml::submitButton(Rights::t('core', 'Generate')); ?>

                </div>

            <?php $this->endWidget(); ?>

            </div>

        </div>
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>