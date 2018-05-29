<legend>New / Update Food</legend>

<form method="post" action="index.php?r=foodmoh/save" class="well" style="width: 400px">
    <input type="hidden" name="id" value="<?php echo $food->id ?>"/>
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="food[NAME]" class="form-control" value="<?php echo $food->NAME ?>"/></td>
        </tr>
        <tr>
            <td>Barcode</td>
            <td><input type="password" name="User[BARCODE]" class="form-control" value="<?php echo $food->BARCODE ?>"/></td>
        </tr>
        <tr>
            <td>Place Bought</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Manufacturer</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Ingredients</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Measurement</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Calories</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Carbohydrate</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Protein</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Fat</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>MUFA</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>PUFA</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Cholesterol</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>SAT</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Trans</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Fiber</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Sugar</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Sodium</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>VITA</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>VITC</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Calcium</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Iron</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td>Icon</td>
            <td><input type="text" name="User[user_fullname]" class="form-control" value="<?php echo $user->user_fullname ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>