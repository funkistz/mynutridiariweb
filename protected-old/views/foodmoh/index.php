<legend>Food List</legend>
<a href="index.php?r=foodmoh/new" class="btn btn-info">Create New</a>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td>Name</td>
        <td>Manufacturer</td>
        <td>Updated Date</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($foods as $f) : ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $f->NAME ?></td>
            <td><?php echo $f->MANUFACTURER ?></td>
            <td><?php echo $f->updated ?></td>
            <td>
                <a href="index.php?r=foodmoh/update&id=<?php echo $f->id?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=foodmoh/delete&id=<?php echo $f->id?>"><span class="glyphicon glyphicon-trash"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>