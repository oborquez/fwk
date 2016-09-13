<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>

<div class="row">
	<div class="col-sm-12">
		<form class="panel form-horizontal" method="post"> 
		<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
			'id'=>'".$this->class2id($this->modelClass)."-form',
			'enableAjaxValidation'=>false,
			)); ?>\n"; ?>

			<!--
			<div class="panel-heading">
				<span class="panel-title">Form title</span>
			</div>
			-->
			<div class="panel-body">


			<p class="note note-info">Campos con <span class="required">*</span> son requeridos.</p>

			<?php echo "<?php echo \$form->errorSummary(\$model,NULL,NULL,array('class'=>'note note-danger')); ?>\n"; ?>


			<?php
			foreach($this->tableSchema->columns as $column)
			{
				if($column->autoIncrement)
					continue;
			?>
				
				<div class="form-group">
					<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column,"col-sm-2 control-label" )."; ?>\n"; ?>
					<div class="col-sm-10">
						<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column,'form-control')."; ?>\n"; ?>					
						<?php echo "<?php echo \$form->error(\$model,'{$column->name}',array('class'=>'label label-danger')); ?>\n"; ?>
					</div>
				</div> <!-- / .form-group -->

			<?php
			}


			?>
	
				<div class="form-group" style="margin-bottom: 0;">
					<div class="col-sm-offset-2 col-sm-10">
						<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-primary')); ?>\n"; ?>
					</div>
				</div> <!-- / .form-group -->







			</div>
		</form>


	</div>
</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

<!-- /form with bootstrap -->
