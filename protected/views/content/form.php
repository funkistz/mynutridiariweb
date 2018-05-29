<legend><?php echo $title ?> Content</legend>

<form method="post" action="index.php?r=content/save" class="well col-md-8">
    <input type="hidden" name="id" value="<?php echo $content->id ?>"/>
    <table style="width: 100%">
        <tr>
            <td>Title</td>
            <td><input type="text" name="content[content_title]" class="form-control" value="<?php echo $content->content_title ?>"/></td>
        </tr>
        <tr>
            <td>Intro</td>
            <td><input type="text" name="content[content_intro]" class="form-control" value="<?php echo $content->content_intro ?>"/></td>
        </tr>
        <tr>
            <td>Full Content</td>
            <td><textarea name="content[content_full]" rows="10" cols="50" class="form-control"><?php echo $content->content_full ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>