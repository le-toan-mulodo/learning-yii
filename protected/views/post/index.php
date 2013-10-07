<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create', 'uid' => Yii::app()->user->id)),
	array('label'=>'Manage Post', 'url'=>array('admin')),
	
);
?>

<h1>Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',	
)); ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array('title'=> "hello CPortlet")); ?>
<?php $this->widget('RecentCommentsWidget'); ?>
<?php $this->endWidget(); ?>
