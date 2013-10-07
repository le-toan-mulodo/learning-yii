<?php
class strengthPassword extends CValidator {
	public $strength;

	//just have alphabe and numberic
	private $weak = '/^(?=.*[a-zA-Z0-9]).{4,}$/';
	private $strong = '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/';

	protected function validateAttribute($object, $attribute) {
		// check the strength parameter used in the validation rule of our model
		if ($this -> strength == 'weak')
			$pattern = $this -> weak;
		elseif ($this -> strength == 'strong')
			$pattern = $this -> strong;

		// extract the attribute value from it's model object
		$value = $object -> $attribute;
		
		if (!preg_match($pattern, $value)) {
			$this -> addError($object, $attribute, 'Your password is too weak!');
		}
	}

}
?>