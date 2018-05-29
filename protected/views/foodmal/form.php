<legend>New / Update Food</legend>

<form method="post" action="index.php?r=foodmal/save" class="well" style="width: 600px">
    <input type="hidden" name="id" value="<?php echo $food->id ?>"/>
    <table style="width:100%">
        <tr>
            <td width="20%">Name</td>
            <td><input type="text" name="food[food_name]" class="form-control" value="<?php echo $food->food_name ?>"/></td>
        </tr>
        <tr>
            <td>Info</td>
            <td><input type="text" name="food[food_info]" class="form-control" value="<?php echo $food->food_info ?>"/></td>
        </tr>
        <tr>
            <td>Measurement</td>
            <td><input type="text" name="food[food_measurement]" class="form-control" value="<?php echo $food->food_measurement ?>"/></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><input type="text" name="food[food_weight]" class="form-control" value="<?php echo $food->food_weight ?>"/></td>
        </tr>
        <tr>
            <td>Calorie</td>
            <td><input type="text" name="food[food_calorie]" class="form-control" value="<?php echo $food->food_calorie ?>"/></td>
        </tr>
        <tr>
            <td>Carbohydrate</td>
            <td><input type="text" name="food[food_carbo]" class="form-control" value="<?php echo $food->food_carbo ?>"/></td>
        </tr>
        <tr>
            <td>Protein</td>
            <td><input type="text" name="food[food_protein]" class="form-control" value="<?php echo $food->food_protein ?>"/></td>
        </tr>
        <tr>
            <td>Fat</td>
            <td><input type="text" name="food[food_fat]" class="form-control" value="<?php echo $food->food_fat ?>"/></td>
        </tr>
        <tr>
            <td>Cholesterol</td>
            <td><input type="text" name="food[food_cholesterol]" class="form-control" value="<?php echo $food->food_cholesterol ?>"/></td>
        </tr>
        <tr>
            <td>Sugar</td>
            <td><input type="text" name="food[food_sugar]" class="form-control" value="<?php echo $food->food_sugar ?>"/></td>
        </tr>
        <tr>
            <td>Salt</td>
            <td><input type="text" name="food[food_salt]" class="form-control" value="<?php echo $food->food_salt ?>"/></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="food[food_type]" class="form-control" value="<?php echo $food->food_type ?>"/></td>
        </tr>
        <tr>
            <td>Calorie Level</td>
            <td><input type="text" name="food[food_calorie_level]" class="form-control" value="<?php echo $food->food_calorie_level ?>"/></td>
        </tr>
        <tr>
            <td>Icon</td>
            <td><input type="text" name="food[food_icon]" class="form-control" value="<?php echo $food->food_icon ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>