<legend>User Authentication</legend>

<div id='login-wrapper'>
    <?php if(Yii::app()->user->hasFlash('err')): ?>
        <div class="alert alert-warning" style="width: 370px;">
            <strong>Alert!</strong> <br/>
            <? echo Yii::app()->user->getFlash('err') ?>
        </div>
    <?php endif; ?>
    
    <div id='login'>
        <form method='post' action='index.php?r=login/auth'>
            User ID <br/>
            <input type='text' id='uname' name='uname' class='form-control'/>
            Password <br/>
            <input type='password' name='passwd' class='form-control'/><br/>
            <input type='submit' value='Enter' class='btn btn-primary' />
        </form>   
    </div>
</div>

<script>
    $(function() {
        $('#uname').focus();
    });
</script>

<style>
    #login-wrapper {
        width: 400px;
        margin: 0 auto;
    }
    
    #login {
        border: 1px solid #ddd;
        padding: 20px;
        background-color: #eee;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }
</style>