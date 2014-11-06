<?php
/* @var $this SiteController */
?>

<h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/dashboard.png" alt="" /> Welcome
</h1>

<div class="bloc left">
    <div class="title">
        Dashboard
    </div>
     <div class="content dashboard">
        <div class="center">
            <a href="#" class="shortcut">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/page.png" alt="" width="48" height="48"/>
                Write an Article
            </a>
            <a href="#" class="shortcut">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/picture.png" alt="" width="48" height="48" />
                Write an Article
            </a>
            <a href="#" class="shortcut">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/contact.png" alt="" width="48" height="48" />
                Manage contacts
            </a>
            <a href="#" class="shortcut last">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/event.png" alt="" width="48" height="48" />
                Manage events
            </a>
            <div class="cb"></div>
        </div>
       
    </div>
</div>
              
<div class="bloc right">
    <div class="title">
        Today
    </div>
    <div class="content">
        <div class="left">
            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Content</em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>460</h4></td>
                        <td>Posts</td>
                    </tr>
                    <tr>
                        <td><h4>12</h4></td>
                        <td>Pages</td>
                    </tr>
                    <tr>
                        <td><h4>5</h4></td>
                        <td>Categories</td>
                    </tr>
                    <tr>
                        <td><h4>20 000</h4></td>
                        <td>Contacts</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="right">
            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Comments</em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>46 000</h4></td>
                        <td class="good">Comments</td>
                    </tr>
                    <tr>
                        <td><h4>5</h4></td>
                        <td class="neutral">Waiting for validation</td>
                    </tr>
                    <tr>
                        <td><h4>0</h4></td>
                        <td class="bad">Spams</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cb"></div>
    </div>
</div>