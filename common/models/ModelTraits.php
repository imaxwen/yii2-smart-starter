<?php
/**
 * Project: yii2-adminlte-rbac.
 * User: Max.wen
 * Date: <2016/09/19 - 10:10>
 */
namespace common\models;

trait ModelTraits {

	/**
	 * @param string $attribute
	 * @return string
	 */
	public function getFirstError($attribute = '')
	{
		if($attribute === '') {
			$this->validate();
			$errors = $this->errors;
			$firstAttribute = array_shift($errors);
			return $firstAttribute[0];
		}

		return parent::getFirstError($attribute);
	}


}