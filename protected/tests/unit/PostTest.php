<?php

class PostTest extends CDbTestCase
{
	// public $fixtures=array(
	// 	'posts'=>'Post',
	// );

	public function testCreate()
	{
		$a = "hello";
		$this->assertEquals("hello",$a);
	}
}
