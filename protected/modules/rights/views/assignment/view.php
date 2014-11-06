<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Assignments'),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Assignments</h1>
<div class="bloc">
    <div class="title">
        <?php echo Rights::t('core', 'Table Users'); ?>
    </div>
    <div class="content">
        <div id="assignments">

            <!-- <h2></h2> -->

            <p>
                <?php echo Rights::t('core', 'Here you can view which permissions has been assigned to each user.'); ?>
            </p>

            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider' => $dataProvider,
                'template' => "{items}\n{pager}",
                'emptyText' => Rights::t('core', 'No users found.'),
                'htmlOptions' => array('class' => 'grid-view assignment-table'),
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
                        'value' => '$data->getAssignmentNameLink()',
                    ),
                    array(
                        'name' => 'assignments',
                        'header' => Rights::t('core', 'Roles'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'role-column'),
                        'value' => '$data->getAssignmentsText(CAuthItem::TYPE_ROLE)',
                    ),
                    array(
                        'name' => 'assignments',
                        'header' => Rights::t('core', 'Tasks'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'task-column'),
                        'value' => '$data->getAssignmentsText(CAuthItem::TYPE_TASK)',
                    ),
                    array(
                        'name' => 'assignments',
                        'header' => Rights::t('core', 'Operations'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'operation-column'),
                        'value' => '$data->getAssignmentsText(CAuthItem::TYPE_OPERATION)',
                    ),
                )
            ));
            ?>

        </div>
    </div>
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>