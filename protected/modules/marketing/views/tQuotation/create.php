<div class="bloc">
    <div class="title">Create TQuotation</div> 
    <div class="content">
        <?php
        $this->renderPartial('_form', array(
            'model' => $model,
            'modelDetail' => $modelDetail,
            'modelDetails' => $modelDetails,
        ));
        ?>		
    </div>
</div>