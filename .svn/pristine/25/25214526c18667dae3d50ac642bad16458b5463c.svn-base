<?php
abstract class BaseModel extends CActiveRecord {

	const TYPE_POST_DRAFT = 0;
	const TYPE_POST_PUBLIC = 1;

	public function behaviors() {
		return array('CTimestampBehavior' => array('class' => 'zii.behaviors.CTimestampBehavior', 'createAttribute' => 'create_time', 'updateAttribute' => 'update_time', 'setUpdateOnCreate' => true));
	}

	public function getTypePostStatus() {
		return array(self::TYPE_POST_DRAFT => "Draft", self::TYPE_POST_PUBLIC => "Public");
	}

	public static function getAllowedPostStatus() {
		return array(self::TYPE_POST_DRAFT, self::TYPE_POST_DRAFT);
	}

	public function getStatusText() {
		$status_types = $this -> typePostStatus;
		return isset($status_types[$this -> status]) ? $status_types[$this -> status] : "unknown";
	}

}
?>