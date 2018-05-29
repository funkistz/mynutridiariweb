<legend>Food List</legend>
<form method="post" action="index.php?r=foodmoh">
    <div class="well col-md-6">
        <div class="row">
            <div class="col-md-2">Name</div>
            <div class="col-md-7"><input type="text" name="fname" value="<?php echo $fname ?>" class="form-control"></div>
            <div class="col-md-3"><input type="submit" value="Search" class="btn btn-primary"></div>
        </div>
    </div>
</form>

<div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2"><a href="index.php?r=foodmoh/new" class="btn btn-info">Create New</a></div>
</div>

<table class="table table-bordered table-striped table-hover">
    <tr class="success">
        <td>#</td>
        <td>Name</td>
        <td>Manufacturer</td>
        <td>Updated Date</td>
        <td></td>
    </tr>
    <?php
    foreach ($foods as $f) : ?>
        <tr>
            <td><?php echo $i++ ?>.</td>
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

<?php $this->widget('CLinkPager', array('pages' => $pages)) ?>