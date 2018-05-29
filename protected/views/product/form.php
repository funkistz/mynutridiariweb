<legend><?php echo $title ?> Product</legend>

<form method="post" action="index.php?r=product/save" class="well col-md-8">
    <input type="hidden" name="id" value="<?php echo $prod->id ?>"/>
    <table style="width: 100%">
        <tr>
            <td>Title (bm)</td>
            <td><input type="text" name="title_bm" class="form-control" value="<?php echo $title_bm ?>"/></td>
        </tr>
        <tr>
            <td>Title (en)</td>
            <td><input type="text" name="title_en" class="form-control" value="<?php echo $title_en ?>"/></td>
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
            <td>Price</td>
            <td><input type="text" name="price" class="form-control" value="<?php echo $prod->product_price ?>"/></td>
        </tr>
        <tr>
            <td>Currency</td>
            <td><input type="text" name="currency" class="form-control" value="<?php echo $prod->product_currency ?>"/></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><input type="text" name="category" class="form-control" value="<?php echo $prod->product_category ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>