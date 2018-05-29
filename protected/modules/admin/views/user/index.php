<legend>Admin List</legend>
<a href="index.php?r=admin/user/new" class="btn btn-info">Create New</a>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td>User ID</td>
        <td>Role</td>
        <td>Registered Date</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($users as $u) : ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $u->user_id ?></td>
            <td><?php echo $u->role ?></td>
            <td><?php echo $u->create_dt ?></td>
            <td>
                <a href="index.php?r=admin/user/update&id=<?php echo $u->id?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=admin/user/delete&id=<?php echo $u->id?>"><span class="glyphicon glyphicon-trash"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>