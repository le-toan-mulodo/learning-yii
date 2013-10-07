<p>
	<?php foreach($this->getData() as $comment):
	?>
	<div class="author">
		
		<?php if (gettype($comment->user) === "object") echo $comment -> user->username; ?>
		added a comment.
	</div>
	<div class="issue">
		<?php echo CHtml::link(CHtml::encode($comment -> post -> title), array('comment/view', 'id' => $comment -> post -> id)); ?>
	</div>
	<?php endforeach; ?>
</p>