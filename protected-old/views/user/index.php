<legend>User List</legend>
<a href="index.php?r=user/new" class="btn btn-info">Create New</a>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td>User Name</td>
        <td>User Full Name</td>
        <td>Login Date</td>
        <td>Updated Date</td>
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
                <a href="index.php?r=user/update&id=<?php echo $u->id?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=user/delete&id=<?php echo $u->id?>"><span class="glyphicon glyphicon-trash"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>