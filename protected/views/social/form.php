<legend>New / Update Social</legend>

<form method="post" action="index.php?r=social/save" class="well col-md-8">
    <input type="hidden" name="social_id" value="<?php echo $social->social_id ?>"/>
    <table style="width: 100%">
        <tr>
            <td>Question</td>
            <td><?php echo $social->question ?></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src="./mobile/upload/upload/<?php echo $social->remotefile ?>"></td>
        </tr>
        <tr>
            <td>Reply</td>
            <td><textarea name="reply" cols="50" rows="5" class="form-control"><?php echo $social->reply ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>

<div style="clear:both"></div>