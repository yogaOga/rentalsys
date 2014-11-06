<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class = "bloc">

    <div class = "title">Error 403</div>

    <div class = "content">
        <center>
            <h3 class="error">Access forbidden.<?=$code?></h3>
            <?php $err = Yii::app()->errorHandler->error; echo $err['code'];?>
            <img src="<?php echo Yii::app()->getBaseUrl() . '/img/404.jpg' ?>" />
        </center>
    </div>
</div>