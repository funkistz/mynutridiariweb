<legend>Excercise List</legend>
<a href="index.php?r=exercise/new" class="btn btn-info">Create New</a>

<table class="table table-bordered">
    <tr class="success">
        <td>#</td>
        <td width='30%'>Name</td>
        <td>Calories Burn</td>
        <td>Info</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($excercise as $e) : 
        $arr1 = MyString::explode($e->exercise_name);
        $arr2 = MyString::explode($e->exercise_info);
    ?>
        <tr>
            <td><?php echo $i++ ?>.</td>
            <td><?php echo $arr1[1] ?></td>
            <td><?php echo $e->exercise_calories ?></td>
            <td><?php echo $arr2[1] ?></td>
            <td align='center'>
                <a href="index.php?r=exercise/update&id=<?php echo $e->id?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=exercise/delete&id=<?php echo $e->id?>"><span class="glyphicon glyphicon-trash" style="color:red;"/></a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>