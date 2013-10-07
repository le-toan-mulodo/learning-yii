<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create', 'uid' => Yii::app()->user->id)),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),		
);
?>

<h1 class="alert-info"><?php echo $model->title; ?></h1>


	<p><?php echo Yii::app()->format->html(nl2br($model->content)); ?></p>
	
<p>
	Tags: <?php echo $model['tags']?>	 	
</p>



 <br />
   
   
   <div id="comments">
   	
		<?php if($model->commentCount>=1): ?>
			
		<h3><?php echo $model->commentCount>1 ? $model->commentCount . ' comments' : '1 comment'; ?></h3>
		

		<?php $this->renderPartial('_comments',array('comments'=>$model->comments,)); ?>
		<?php endif; ?>
	
	<?php if (!Yii::app()->user->isGuest): ?>
	<h3>Leave a Comment</h3>	
		<?php $this->renderPartial('/comment/_form',array('model'=>$comment,));?>	
	
	<?php else: ?>		
		Please log in <?php echo CHtml::link('Log in', array('Site/login'))?> to comment for the article!	
	<?php endif;?>
	</div>