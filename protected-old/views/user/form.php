<legend>New / Update User</legend>

<form method="post" action="index.php?r=user/save" class="well" style="width: 400px">
    <input type="hidden" name="id" value="<?php echo $user->id ?>"/>
    <table>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="User[username]" class="form-control" value="<?php echo $user->username ?>"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="User[password]" class="form-control" value="<?php echo $user->password ?>"/></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>