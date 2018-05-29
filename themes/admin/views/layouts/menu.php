<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;
$role = Yii::app()->session['role'];
//echo $role;
?>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<!--                <li><a href="index.php">Laman Utama</a></li>-->
                <!-- <li><a href="index.php">Info</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Main <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    	<li><a href="http://mynutridiari.moh.gov.my/mynutridiari/dashboard/index.php">DASHBOARD</a></li>
                        <li><a href="index.php?r=user">App Users</a></li>
                        <li><a href="index.php?r=admin/user">Admin Users</a></li>
                        <li><a href="index.php?r=foodmoh">Food Products</a></li>
                        <li><a href="index.php?r=foodmal">Food Dishes</a></li>
                        <li><a href="index.php?r=social">Social</a></li>
                        <li><a href="index.php?r=content">Content</a></li>
                        <li><a href="index.php?r=product">Product</a></li>
                        <li><a href="index.php?r=exercise">Exercise</a></li>
                        <li><a href="index.php?r=admin/bul/list">CMS</a></li>
                    </ul>
                </li>

<!--                <li><a href="index.php?r=faq/show">FAQ</a></li>
                <li><a href="index.php?r=site/logout">Manual Pengguna</a></li>-->
                <li><a href="index.php?r=login/logout">Logout</a></li>
            </ul>
        </div> 
    </div> <!-- container fluid -->
</nav>