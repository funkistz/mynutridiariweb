<legend>New / Update Food</legend>

<form method="post" action="index.php?r=foodmoh/save" class="well col-md-12">
    <input type="hidden" name="id" value="<?php echo $food->id ?>"/>
    <table style="width: 100%">
        <tr>
            <td>Name</td>
            <td><input type="text" name="food[NAME]" class="form-control" value="<?php echo $food->NAME ?>"/></td>
            <td width='3%'></td>
            <td>Barcode</td>
            <td><input type="text" name="food[BARCODE]" class="form-control" value="<?php echo $food->BARCODE ?>"/></td>
        </tr>
        <tr>
            <td>Place Bought</td>
            <td><input type="text" name="food[PLACE_BOUGHT]" class="form-control" value="<?php echo $food->PLACE_BOUGHT ?>"/></td>
            <td></td>
            <td>Manufacturer</td>
            <td><input type="text" name="food[MANUFACTURER]" class="form-control" value="<?php echo $food->MANUFACTURER ?>"/></td>
        </tr>
        <tr>
            <td>Ingredients</td>
            <td><input type="text" name="food[INGREDIENTS]" class="form-control" value="<?php echo $food->INGREDIENTS ?>"/></td>
            <td></td>
            <td>Measurement</td>
            <td><input type="text" name="food[MEASUREMENT]" class="form-control" value="<?php echo $food->MEASUREMENT ?>"/></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><input type="text" name="food[WEIGHT]" class="form-control" value="<?php echo $food->WEIGHT ?>"/></td>
            <td></td>
            <td>Calories</td>
            <td><input type="text" name="food[CALORIES]" class="form-control" value="<?php echo $food->CALORIES ?>"/></td>
        </tr>
        <tr>
            <td>Carbohydrate</td>
            <td><input type="text" name="food[CARBOHYDRATE]" class="form-control" value="<?php echo $food->CARBOHYDRATE ?>"/></td>
            <td></td>
            <td>Protein</td>
            <td><input type="text" name="food[PROTEIN]" class="form-control" value="<?php echo $food->PROTEIN ?>"/></td>
        </tr>
        <tr>
            <td>Fat</td>
            <td><input type="text" name="food[FAT]" class="form-control" value="<?php echo $food->FAT ?>"/></td>
            <td></td>
            <td>MUFA</td>
            <td><input type="text" name="food[MUFA]" class="form-control" value="<?php echo $food->MUFA ?>"/></td>
        </tr>
        <tr>
            <td>PUFA</td>
            <td><input type="text" name="food[PUFA]" class="form-control" value="<?php echo $food->PUFA ?>"/></td>
            <td></td>
            <td>Cholesterol</td>
            <td><input type="text" name="food[CHOLESTEROL]" class="form-control" value="<?php echo $food->CHOLESTEROL ?>"/></td>
        </tr>
        <tr>
            <td>SAT</td>
            <td><input type="text" name="food[SAT]" class="form-control" value="<?php echo $food->SAT ?>"/></td>
            <td></td>
            <td>Trans</td>
            <td><input type="text" name="food[TRANS]" class="form-control" value="<?php echo $food->TRANS ?>"/></td>
        </tr>
        <tr>
            <td>Fiber</td>
            <td><input type="text" name="food[FIBER]" class="form-control" value="<?php echo $food->FIBER ?>"/></td>
            <td></td>
            <td>Sugar</td>
            <td><input type="text" name="food[SUGAR]" class="form-control" value="<?php echo $food->SUGAR ?>"/></td>
        </tr>
        <tr>
            <td>Sodium</td>
            <td><input type="text" name="food[SODIUM]" class="form-control" value="<?php echo $food->SODIUM ?>"/></td>
            <td></td>
            <td>VITA</td>
            <td><input type="text" name="food[VITA]" class="form-control" value="<?php echo $food->VITA ?>"/></td>
        </tr>
        <tr>
            <td>VITC</td>
            <td><input type="text" name="food[VITC]" class="form-control" value="<?php echo $food->VITC ?>"/></td>
            <td></td>
            <td>Calcium</td>
            <td><input type="text" name="food[CALCIUM]" class="form-control" value="<?php echo $food->CALCIUM ?>"/></td>
        </tr>
        <tr>
            <td>Iron</td>
            <td><input type="text" name="food[IRON]" class="form-control" value="<?php echo $food->IRON ?>"/></td>
            <td></td>
            <td>Icon</td>
            <td><input type="text" name="food[ICON]" class="form-control" value="<?php echo $food->ICON ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>

<div style="clear: both"></div>