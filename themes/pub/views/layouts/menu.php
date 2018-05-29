
<ul>
    <li id="xm1" class="active"><a href="index.php">Home</a></li>
    <li class="sep">&nbsp;</li>
    <!--<li id="xm2"><a href="index.php?r=course">Courses</a></li>
    <li class="sep">&nbsp;</li>
    <li id="xm3"><a href="index.php?r=calendar">Calendar</a></li>
    <li class="sep">&nbsp;</li>
    <li id="xm4"><a href="index.php?r=content&id=134">About Us</a></li>
    <li class="sep">&nbsp;</li>
    <li id="xm5"><a href="index.php?r=content&id=135">Contact Us</a></li>
    <li class="sep">&nbsp;</li>-->
    
    <?php if (Yii::app()->user->isGuest) : ?>
        <li id="xm6"><a href="index.php?r=login">Login</a></li>
    <?php else : ?>
        <li id="xm6"><a href="index.php?r=login/logout">Logout</a></li>
    <?php endif; ?>
        
    <li class="sep">&nbsp;</li>
    <!--
    <li class="sep">&nbsp;</li>
    <li><a href="index.php?r=admin/bul/list">Admin</a></li>
    <li class="sep">&nbsp;</li>
    -->
</ul>

<script>
$(function() {
   $('#xmenu li').removeClass('active') ;
   $('#xmenu li#<?php echo Yii::app()->session['menu']?>').addClass('active') ;
});  
</script>