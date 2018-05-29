<legend>New / Update User</legend>

<?php
if (isset($errors)) {
  echo "<b>Perhatian</b><br>";
  foreach ($errors as $err) {
    echo $err[0];
  }
}
?>

<form method="post" action="index.php?r=user/save" class="well" style="width: 400px">
    <input type="hidden" name="id" value="<?php echo $user->uid ?>"/>
    <table>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="fullname" class="form-control" value="<?php echo $user->fullname ?>"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" class="form-control" value="<?php echo $user->password ?>"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="password" name="email" class="form-control" value="<?php echo $user->email?>"/></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
            	<select name="status" class="form-control">
            	  <option value="1" <?php echo $user->status === '1' ? 'selected' : '' ?>>Aktif</option>
            	  <option value="0" <?php echo $user->status !== '1' ? 'selected' : '' ?>>Tidak Aktif</option>
            	</select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>