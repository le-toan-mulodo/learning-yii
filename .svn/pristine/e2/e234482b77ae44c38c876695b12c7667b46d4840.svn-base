<?php
class RecentCommentsWidget extends CWidget {
	private $_comments;
	public $displayLimit = 5;
	public $post_id = null;

	public function init() {
		if ($this -> post_id !== null)
			$this -> _comments = Comment::model() -> with(array('post' => array('condition' => 'post_id=' . $this -> post_id))) -> recent($this -> displayLimit) -> findAll();
		else
			$this -> _comments = Comment::model() -> recent($this -> displayLimit) -> findAll();

	}
	
	public function getData()
	{
		return $this->_comments;
	}
	
	public function run()
	{
		$this->render('recentCommentsWidget');
	}
	
	

}
