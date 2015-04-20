<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->book_id=>array('view','id'=>$model->book_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Booking', 'url'=>array('index')),
	array('label'=>'Create Booking', 'url'=>array('create')),
	array('label'=>'View Booking', 'url'=>array('view', 'id'=>$model->book_id)),
	array('label'=>'Manage Booking', 'url'=>array('admin')),
);
?>

<h1>Update Booking <?php echo $model->book_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>