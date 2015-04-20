<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->tour_id,
);

$this->menu=array(
	array('label'=>'List Tour', 'url'=>array('index')),
	array('label'=>'Create Tour', 'url'=>array('create')),
	array('label'=>'Update Tour', 'url'=>array('update', 'id'=>$model->tour_id)),
	array('label'=>'Delete Tour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tour_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tour', 'url'=>array('admin')),
);
?>

<h1>View Tour #<?php echo $model->tour_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tour_id',
		'tour_detail',
		'tour_Image',
	),
)); ?>
