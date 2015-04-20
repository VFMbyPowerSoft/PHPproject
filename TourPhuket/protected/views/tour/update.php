<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->tour_id=>array('view','id'=>$model->tour_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tour', 'url'=>array('index')),
	array('label'=>'Create Tour', 'url'=>array('create')),
	array('label'=>'View Tour', 'url'=>array('view', 'id'=>$model->tour_id)),
	array('label'=>'Manage Tour', 'url'=>array('admin')),
);
?>

<h1>Update Tour <?php echo $model->tour_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>