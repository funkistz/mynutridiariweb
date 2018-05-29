<legend>User List</legend>
<a href="index.php?r=admin/user/new" class="btn btn-info">Create New</a>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td>User ID</td>
        <td>User Name</td>
        <td>Login Date</td>
        <td>Registered Date</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($users as $u) : ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $u->username ?></td>
            <td><?php echo $u->user_fullname ?></td>
            <td><?php echo $u->login_date ?></td>
            <td><?php echo $u->updated ?></td>
            <td>
                <a href="index.php?r=admin/user/update&id=<?php echo $u->uid?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=admin/user/delete&id=<?php echo $u->uid?>"><span class="glyphicon glyphicon-trash"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>