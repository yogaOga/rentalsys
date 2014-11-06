<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Assignments') => array('assignment/view'),
    $model->getName(),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Assignments</h1>
<div class="bloc">
    <div class="title">
        <?php
        echo Rights::t('core', Rights::t('core', 'Assignments for :username', array(
                    ':username' => $model->getName()
                ))
        );
        ?>
    </div>
    <div class="content">
        <div id="userAssignments">

            <div class="assignments span-12 first">

                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'dataProvider' => $dataProvider,
                    'template' => '{items}',
                    'hideHeader' => true,
                    'emptyText' => Rights::t('core', 'This user has not been assigned any items.'),
                    'htmlOptions' => array('class' => 'grid-view user-assignment-table mini'),
                    'columns' => array(
                        array(
                            'header' => 'No',
                            'value' => '$this->grid->dataProvider->Pagination->CurrentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
                            'htmlOptions' => array(
                                'style' => '',
                            ),
                        ),
                        array(
                            'name' => 'name',
                            'header' => Rights::t('core', 'Name'),
                            'type' => 'raw',
                            'htmlOptions' => array('class' => 'name-column'),
                            'value' => '$data->getNameText()',
                        ),
                        array(
                            'name' => 'type',
                            'header' => Rights::t('core', 'Type'),
                            'type' => 'raw',
                            'htmlOptions' => array('class' => 'type-column'),
                            'value' => '$data->getTypeText()',
                        ),
                        array(
                            'header' => '&nbsp;',
                            'type' => 'raw',
                            'htmlOptions' => array('class' => 'actions-column'),
                            'value' => '$data->getRevokeAssignmentLink()',
                        ),
                    )
                ));
                ?>

            </div>

            <div class="add-assignment span-11 last">

                <h3><?php echo Rights::t('core', 'Assign item'); ?></h3>

                    <?php if ($formModel !== null): ?>

                    <div class="form">

                        <?php
                        $this->renderPartial('_form', array(
                            'model' => $formModel,
                            'itemnameSelectOptions' => $assignSelectOptions,
                        ));
                        ?>

                    </div>

                    <?php else: ?>

                    <p class="info"><?php echo Rights::t('core', 'No assignments available to be assigned to this user.'); ?>

                    <?php endif; ?>

            </div>

        </div>
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>