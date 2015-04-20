<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->pro_id=>array('view','id'=>$model->pro_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
	array('label'=>'Create Promotion', 'url'=>array('create')),
	array('label'=>'View Promotion', 'url'=>array('view', 'id'=>$model->pro_id)),
	array('label'=>'Manage Promotion', 'url'=>array('admin')),
);
?>

<h1>Update Promotion <?php echo $model->pro_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>