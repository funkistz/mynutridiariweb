<legend>Social Query List</legend>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td>Sent By</td>
        <td>Date</td>
        <td>Question</td>
        <td>Reply</td>
        <td>Image</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($social as $s) : ?>
        <tr>
            <td><?php echo $i++ ?>.</td>
            <td><?php echo $s->username ?></td>
            <td><?php echo $s->date ?></td>
            <td><?php echo $s->question ?></td>
            <td><?php echo $s->reply ?></td>
            <td><?php echo $s->imagepath ?></td>
            <td align='center'>
                <a href="index.php?r=social/update&id=<?php echo $s->social_id?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=social/delete&id=<?php echo $s->social_id?>"><span class="glyphicon glyphicon-trash" style="color:red;"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>