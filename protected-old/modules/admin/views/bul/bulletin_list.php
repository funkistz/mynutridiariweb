<ul>
    
<?php
foreach ($models as $model) {
?>
    <li><a class='article' href="#" val="<?=$model->id?>"><?=$model->title?></a></li>
<?php
} ?>

</ul>

<script>
    $(function() {
        $('.article').click(function() {
            var id = $(this).attr('val');
            //alert(id);
            $('#me').load('index.php?r=main/bulletin/article&id='+id);
        });
    });
</script>