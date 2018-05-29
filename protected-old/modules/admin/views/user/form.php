<legend>New / Update User</legend>

<form method="post" action="index.php?r=admin/user/save" class="well" style="width: 400px">
    <input type="hidden" name="id" value="<?php echo $user->id ?>"/>
    <table>
        <tr>
            <td>User Id</td>
            <td><input type="text" name="Users[uname]" class="form-control" value="<?php echo $user->uname ?>"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="Users[passwd]" class="form-control" value="<?php echo $user->passwd ?>"/></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="Users[fname]" class="form-control" value="<?php echo $user->fname ?>"/></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><?php echo CHtml::dropDownList('Users[priv]', $user->priv, Ref::model()->listRef('role'), array('class'=>'form-control')) ?></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>