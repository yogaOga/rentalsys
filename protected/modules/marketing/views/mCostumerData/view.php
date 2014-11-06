<?php
/* @var $this MCostumerDataController */
/* @var $model MCostumerData */

$this->breadcrumbs = array(
    'Mcostumer Datas' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List MCostumerData', 'url' => array('index')),
    array('label' => 'Create MCostumerData', 'url' => array('create')),
    array('label' => 'Update MCostumerData', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete MCostumerData', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage MCostumerData', 'url' => array('admin')),
);
?>

<div class="bloc">
    <div class="title">View MCostumerData #<?php echo $model->id; ?></div> 
    <div class="content">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'id',
                'no_cmd',
                'name_pic',
                'company_address_pic',
                'home_address_pic',
                'city_pic',
                'npwp_pic',
                'payment_system_pic',
                'payment_term_pic',
                'average_gross_incorme_per_month',
                'name_bank',
                'address_bank',
                'no_account_bank',
                'name_reference',
                'address_reference',
                'phone_reference',
                'vehicles_reference',
                'title_cmd',
                'name_cmd',
                'address_cmd',
                'city_cmd',
                'fax_cmd',
                'zip_code_cmd',
                'email_cmd',
                'office_phone_cmd',
                'home_phone_cmd',
                'type_of_business',
                'ownership',
                'name_management',
                'position_management',
                'phone_management',
                'handphone_management',
                'create_at',
                'create_date',
            ),
        ));
        ?>
    </div>
</div>
</div>
