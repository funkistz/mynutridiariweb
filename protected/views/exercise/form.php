<legend><?php echo $title ?> Exercise</legend>

<form method="post" action="index.php?r=exercise/save" class="well col-md-8">
    <input type="hidden" name="id" value="<?php echo $exercise->id ?>"/>
    <table style="width: 100%">
        <tr>
            <td width='20%'>Name (bm)</td>
            <td><input type="text" name="name_bm" class="form-control" value="<?php echo $name_bm ?>"/></td>
        </tr>
        <tr>
            <td>Name (en)</td>
            <td><input type="text" name="name_en" class="form-control" value="<?php echo $name_en ?>"/></td>
        </tr>
        <tr>
            <td>Info (bm)</td>
            <td><input type="text" name="info_bm" class="form-control" value="<?php echo $info_bm ?>"/></td>
        </tr>
        <tr>
            <td>Info (en)</td>
            <td><input type="text" name="info_en" class="form-control" value="<?php echo $info_en ?>"/></td>
        </tr>
        <tr>
            <td>Calories</td>
            <td><input type="text" name="exercise_calories" class="form-control" value="<?php echo $exercise->exercise_calories ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>