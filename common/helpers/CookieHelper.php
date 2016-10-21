<?php
/**
 * @author: Max.wen
 * @Date: <2016/04/18 - 14:13>
 * @var $this yii\web\View
 */

namespace common\helpers;

use Yii;

class CookieHelper
{
	/**
	 * get cookie
	 * @param $name
	 * @return string|null
	 */
	public static function get($name)
	{
		$cookie = Yii::$app->request->cookies->get($name);
		return $cookie ? $cookie->value : ( (isset($_COOKIE[$name]) && !empty($_COOKIE[$name]))  ? $_COOKIE[$name] : NULL);
	}

	/**
	 * Send cookie
	 * @param $name
	 * @param null $value
	 * @param array $options
	 */
	public static function set($name, $value = null, $options = [])
	{
		$cookies = Yii::$app->response->cookies;
		if(is_null($value)) {
			$cookies->remove($name);
		}else{
			$options['name']   = $name;
			$options['value']  = $value;
			$options['expire'] = isset($options['expire']) ? $options['expire'] : time()+Yii::$app->params['cookieExpireTime'];
			$cookies->add(new \yii\web\Cookie($options));
			$_COOKIE[$name] = $value;
		}
	}

	/**
	 * get cookie value , set the value if not exists
	 * @param $name
	 * @param $value
	 * @return \yii\web\Cookie
	 */
	public static function getSet($name, $value, $options = [])
	{
		$cookieValue = Yii::$app->request->cookies->get($name);
		if(is_null($cookieValue) && $value) {
			static::set($name, $value, $options);
			return $value;
		}

		return $cookieValue;
	}

	/**
	 * @param $name
	 * @return bool
	 */
	public static function has($name)
	{
		return Yii::$app->request->cookies->has($name);
	}

	/**
	 * @param $name
	 * @param bool $fromBrowser
	 */
	public static function remove($name, $fromBrowser = true)
	{
		Yii::$app->response->cookies->remove($name,$fromBrowser);
	}

}