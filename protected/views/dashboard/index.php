<legend>Dashboard</legend>
<form method="post" action="index.php?r=user">
    <div class="well col-md-6">
        <div class="row">
            <div class="col-md-2">Full Name</div>
            <div class="col-md-10"><input type="text" name="fullname" value="<?php echo $fullname ?>" class="form-control"></div>
        </div>
        <div class="row">
            <div class="col-md-2">Email</div>
            <div class="col-md-7"><input type="text" name="email" value="<?php echo $email ?>" class="form-control"></div>
            <div class="col-md-3"><input type="submit" value="Search" class="btn btn-primary"></div>
        </div>
    </div>
</form>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td>User Name</td>
        <td>Email</td>
        <td>Status</td>
        <td></td>
    </tr>
    <?php
    //$i = 1;
    foreach ($users as $u) : ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $u->fullname ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php echo $u->status ?></td>
            <td>
            <a href="index.php?r=user/update&id=<?php echo $u->uid ?>"><span class="glyphicon glyphicon-pencil"/></a>
            <a href="index.php?r=user/delete&id=<?php echo $u->uid ?>"><span class="glyphicon glyphicon-trash"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>

<?php $this->widget('CLinkPager', array('pages' => $pages)) ?>