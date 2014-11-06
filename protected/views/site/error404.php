<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class = "bloc">

    <div class = "title">Error <?php echo CHtml::encode($code); ?></div>

    <div class = "content">
        <center>           
            <img src="<?php echo Yii::app()->getBaseUrl() . '/img/Administrator.png' ?>" />
            <h3 class="error"><?php echo CHtml::encode($message); ?></h3>
            <h3 class="error">Please contact your Administrator!</h3>
        </center>
    </div>
</div>