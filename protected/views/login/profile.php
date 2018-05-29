<legend>Kemaskini Profil</legend>

<div id='login-wrapper' class='well'>
    <?php if(Yii::app()->user->hasFlash('err')): ?>
        <div class="alert alert-warning" style="width: 270px;">
            <strong>Perhatian!</strong> <br/>
            <? echo Yii::app()->user->getFlash('err') ?>
        </div>
    <?php endif; ?>
    
    <div id='login'>
        <form method='post' action='index.php?r=pkk/login/profileHandler'>
            Katalaluan <br/>
            <input type='password' name='katalaluan1' class='form-control'/>
            Pengesahan Katalaluan <br/>
            <input type='password' name='katalaluan2' class='form-control'/><br/>
            <input type='submit' value='Kemaskini' class='btn btn-primary' />
        </form>   
    </div>
</div>

<style>
    #login-wrapper {
        width: 400px;
        margin: 0 auto;
    }
    
    #login {
        border: 0px solid #ddd;
        padding: 20px;
        /*background-color: #eee;*/
    }
</style>