<script src="<?php echo Yii::app()->baseUrl ?>/themes/common/ckeditor/ckeditor.js"></script>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array('id'=>'bulletin-form', 'enableAjaxValidation'=>false, 'action'=>'index.php?r=admin/bul/save')); ?>
    <input type="hidden" name="id" value="<?=$model->id?>"/>
    <?php echo $form->errorSummary($model); ?>
    <table width="100%">
        <tr>
            <td><?php echo $form->labelEx($model,'title'); ?></td>
            <td>
                <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                <?php echo $form->error($model,'title'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'summary'); ?></td>
            <td>
                <textarea class="ckeditor" id="ckeditor" name="Bul[summary]" cols="80" rows="10"><?php echo $model->summary ?></textarea>
                <?php echo $form->error($model,'summary'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'content'); ?></td>
            <td>
                <textarea class="ckeditor" id="ckeditor2" name="content" cols="80"><?php echo $model2->content ?></textarea>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'status'); ?></td>
            <td>
                <?=$form->dropDownList($model, 'status', $ref->listRef('yn'), array('class'=>'form-control'))?>
                <?php echo $form->error($model,'status'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'cat'); ?></td>
            <td>
                <?=$form->dropDownList($model, 'cat', $parent, array('class'=>'form-control'))?>
                <?php //echo $form->textField($model,'cat',array('size'=>5, 'maxlength'=>5, 'class'=>'form-control')); ?>
                <?php echo $form->error($model,'cat'); ?>
            </td>
        </tr>
        
        <tr>
            <td></td>
            <td>
                <?php echo CHtml::submitButton('Simpan', array('class'=>'btn btn-primary')); ?>
                <?php echo CHtml::button('Kembali',array('submit'=>array('admin/cms/list'),'class'=>'btn btn-danger')); ?>
            </td>
        </tr>
    </table>
<?php $this->endWidget(); ?>
</div><!-- form -->

<script>
    CKEDITOR.replace('ckeditor', {
        allowedContent: true,
        filebrowserBrowseUrl: 'ckeditor/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: 'ckeditor/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: 'ckeditor/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl: 'ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: 'ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: 'ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash'
    });

    CKEDITOR.replace('ckeditor2', {
        allowedContent: true,
        filebrowserBrowseUrl: 'ckeditor/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: 'ckeditor/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: 'ckeditor/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl: 'ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: 'ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: 'ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash'
    });
</script>