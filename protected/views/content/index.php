<legend>Content List</legend>
<a href="index.php?r=content/new" class="btn btn-info">Create New</a>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td width='70%'>Title</td>
        <td>Updated Date</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($content as $c) : ?>
        <tr>
            <td><?php echo $i++ ?>.</td>
            <td><?php echo $c->content_title ?></td>
            <td><?php echo $c->content_datetime ?></td>
            <td align='center'>
                <a href="index.php?r=content/update&id=<?php echo $c->id?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=content/delete&id=<?php echo $c->id?>"><span class="glyphicon glyphicon-trash" style="color:red;"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>