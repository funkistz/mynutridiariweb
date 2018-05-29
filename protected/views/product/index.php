<legend>Product List</legend>
<a href="index.php?r=product/new" class="btn btn-info">Create New</a>

<table class="table table-bordered table-striped table-hover">
    <tr class="success">
        <td>#</td>
        <td width='30%'>Title</td>
        <td>Info</td>
        <td>Price</td>
        <td>Currency</td>
        <td>Category</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($prod as $p) :
        $aTitle = MyString::explode($p->product_title);
        $aInfo = MyString::explode($p->product_info);
    ?>
        <tr>
            <td><?php echo $i++ ?>.</td>
            <td><?php echo $aTitle[1] ?></td>
            <td><?php echo $aInfo[1] ?></td>
            <td><?php echo $p->product_price ?></td>
            <td><?php echo $p->product_currency ?></td>
            <td><?php echo $p->product_category ?></td>
            <td align='center'>
                <a href="index.php?r=product/update&id=<?php echo $p->id ?>"><span class="glyphicon glyphicon-pencil"/></a>
                <a href="index.php?r=product/delete&id=<?php echo $p->id ?>"><span class="glyphicon glyphicon-trash" style="color:red;"/></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>