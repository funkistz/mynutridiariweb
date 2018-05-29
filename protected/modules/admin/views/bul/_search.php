<?php
/* @var $this CmsBulletinController */
/* @var $model CmsBulletin */
/* @var $form CActiveForm */
?>

<div class="well" style="width: 650px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
    <table>
      <tr>
            <td nowrap><?php echo $form->label($model,'title'); ?></td>
            <td>
                <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255,'class'=>'t4')); ?>
            </td>
        </tr>
        <tr>
            <td nowrap><?php echo $form->label($model,'status'); ?></td>
            <td>
                <?php echo $form->textField($model,'status',array('size'=>2,'maxlength'=>2,'class'=>'t4')); ?>
            </td>
        </tr>
         <tr>
            <td nowrap><?php echo $form->label($model,'cat'); ?></td>
            <td>
                <?php echo $form->textField($model,'cat',array('size'=>5,'maxlength'=>5,'class'=>'t4')); ?>
            </td>
        </tr>
        <tr>
            <td nowrap><?php echo $form->label($model,'hits'); ?></td>
            <td>
                <?php echo $form->textField($model,'hits',array('size'=>5,'maxlength'=>5,'class'=>'t4')); ?>
            </td>
        </tr>
        <tr>
            <td nowrap><?php echo $form->label($model,'pub_cat'); ?></td>
            <td>
                <?php echo $form->textField($model,'pub_cat',array('size'=>5,'maxlength'=>5,'class'=>'t4')); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php echo CHtml::submitButton('Carian',array('class'=>'btn btn-primary')); ?>
                <?//php echo CHtml::button ('Senarai',array('class'=>'btn btn-primary','submit'=>array("nrwInterruption/admin"))); ?>
            </td>
        </tr>

    </table>

	

<?php $this->endWidget(); ?>

</div><!-- search-form -->