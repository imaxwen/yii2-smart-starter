<?php
/**
 * @author: Max.wen
 * @Date: <2016/04/18 - 14:13>
 * @var $this yii\web\View
 */

namespace common\helpers;

class StringHelper extends \yii\helpers\StringHelper
{

	/**
	 * 随机生成6位字符串
	 * @param int $length
	 * @return string
	 */
	public static function getRandStr($length = 6)
	{
		$str = implode('',range('a','z'));
		$str .= implode('',range('A','Z'));
		$str .= implode('',range('0','9'));

		$randString = '';
		$len = strlen($str) - 1;
		for ($i = 0; $i < $length; $i++) {
			$num = mt_rand(0, $len);
			$randString .= $str[$num];
		}
		return $randString;
	}

	/****
	 * 生成折扣码
	 */
	public static function generateRandomCode($length = 8){
	    $str = "ABCDEFGHIJKLMNPQRSTUVWXYZ";
		$randString = '';
		$len = strlen($str) - 1;
		for ($i = 0; $i < $length; $i++) {
			$num = mt_rand(0, $len);
			$randString .= $str[$num];
		}
		return $randString;
	}
	
	/****
	 * 生成序列号
	 */
    public static function generateSerialNo(){
        return date("yymd", time())."01";
    }

	/**
	 * 字符串加密
	 *
	 * @param $string
	 * @param string $key
	 *
	 * @return string
	 */
	public static function encrypt( $string, $key = 'your-encode-key' ) {
		if ( $key == '' ) {
			return '';
		}
		srand( (double) microtime() * 1000000 );
		$encryptKey = md5( mt_rand( 0, 32000 ) );
		$ctr        = 0;
		$tmp        = "";
		for ( $i = 0; $i < strlen( $string ); $i ++ ) {
			if ( $ctr == strlen( $encryptKey ) ) {
				$ctr = 0;
			}
			$tmp .= substr( $encryptKey, $ctr, 1 ) . ( substr( $string, $i, 1 ) ^ substr( $encryptKey, $ctr, 1 ) );
			$ctr ++;
		}

		return base64_encode( self::_keyed( $tmp, $key ) );
	}


	/**
	 * 字符串解密
	 *
	 * @param $string
	 * @param string $key
	 *
	 * @return string
	 */
	public static function decrypt( $string, $key = 'your-encode-key' ) {
		if ( $key == '' ) {
			return '';
		}
		$string = self::_keyed( base64_decode( $string ), $key );
		$tmp    = "";
		for ( $i = 0; $i < strlen( $string ); $i ++ ) {
			$md5 = substr( $string, $i, 1 );
			$i ++;
			$tmp .= ( substr( $string, $i, 1 ) ^ $md5 );
		}

		return $tmp;
	}

	/**
	 * @param $string
	 * @param $encryptKey
	 *
	 * @return string
	 */
	private static function _keyed( $string, $encryptKey ) {
		$encryptKey = md5( $encryptKey );
		$ctr        = 0;
		$tmp        = "";
		for ( $i = 0; $i < strlen( $string ); $i ++ ) {
			if ( $ctr == strlen( $encryptKey ) ) {
				$ctr = 0;
			}
			$tmp .= substr( $string, $i, 1 ) ^ substr( $encryptKey, $ctr, 1 );
			$ctr ++;
		}

		return $tmp;
	}
	
}