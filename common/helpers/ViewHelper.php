<?php
/**
 * @author: Max.wen
 * @Date: <2016/04/18 - 14:13>
 * @var $this yii\web\View
 */

namespace common\helpers;


class ViewHelper
{
	public static $navigationCookieName = '_navbar';

	/**
	 * @param $index
	 * @param string $prefix
	 * @return mixed
	 */
	public static function setNavigation($index, $prefix = '')
	{
		$_COOKIE[$prefix.self::$navigationCookieName] = $index;
		return setcookie($prefix.self::$navigationCookieName, $index);
	}

	/**
	 * @param string $prefix
	 * @return mixed
	 */
	public static function getNavigation($prefix = '')
	{
		$cookieName = $prefix.self::$navigationCookieName;
		return isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : null;
	}

	/**
	 * @param $val1
	 * @param $val2
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public static function compareValue($val1, $val2, $true = 'active', $false = '')
	{
		return $val1 == $val2 ? $true : $false;
	}
}