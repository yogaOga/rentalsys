<div class="bloc">
    <div class="title">Lookup Prospect</div> 
    <div class="content">

       <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'tprospect-grid',
            'dataProvider' => $model->searchLookup(),
            'filter' => $model,
            'columns' => array(
                array(
                    'header' => 'No',
                    'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                ),
                array(
                    'name' => 'prospect_id',
                    'filter' => CHtml::activeTextField($model, 'prospect_id', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->prospect_id',
                ),
                array(
                    'name' => 'marketing_id',
                    'filter' => CHtml::activeTextField($model, 'marketing_id', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->marketing_id',
                ),
                array(
                    'name' => 'company_title',
                    'filter' => CHtml::activeTextField($model, 'company_title', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->company_title',
                ),
                array(
                    'name' => 'company_name',
                    'filter' => CHtml::activeTextField($model, 'company_name', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->company_name',
                ),
                array(
                    'name' => 'company_address',
                    'filter' => CHtml::activeTextField($model, 'company_address', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->company_address',
                ),
                /*
                  'phone',
                  'fax',
                  'l_business_type',
                  'l_ownership',
                  'pic',
                  'occuption',
                  'email',
                  'mobile_phone',
                  'create_user',
                  'create_at',
                  'update_at',
                  'update_user',
                 
                array(
                    'header' => 'Introduce Letter',
                    'type' => 'raw',
                    'value' => 'Chtml::link("PDF",array(\'IL\'))',
                ),
                array(
                    'class' => 'CButtonColumn',
                ),
                 */
            ),
        ));
        ?>

    </div>
</div>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>



