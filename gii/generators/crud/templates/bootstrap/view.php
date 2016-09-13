<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('/{$this->modelClass}'),
	'Vista',
);\n";
?>

?>

<div class="page-header">
    
    <div class="row">
        <!-- Page header, center on small screens -->
        <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-file page-header-icon"></i>&nbsp;&nbsp;  Vista </h1>

        <div class="col-xs-12 col-sm-8">
            
        </div>
    </div>
</div> <!-- / .page-header -->

<div class="panel">
	<div class="panel-body">
		
		<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView', array(
			'data'=>$model,
			'attributes'=>array(
		<?php
		foreach($this->tableSchema->columns as $column)
			echo "\t\t'".$column->name."',\n";
		?>
			),
		)); ?>
	</div>
</div>

