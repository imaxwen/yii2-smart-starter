<?php
/**
 * @author: Max.wen
 * @Date: <2016/04/18 - 14:13>
 * @var $this yii\web\View
 */
namespace common\helpers;

class ArrayHelper extends \yii\helpers\ArrayHelper
{
	/**
	 * List data to tree data
	 * @param $items
	 * @param string $pk
	 * @param string $pid
	 * @param string $childNodeKey
	 * @return array
	 */
	public static function listToTree(array $items, $pk = 'id', $pid = 'parent_id', $childNodeKey = 'children')
	{
		if( empty($items) ) return [];
		$formattedItems = [];
		foreach ($items as $key => $val) {
			$formattedItems[$val[$pk]] = $val;
		}
		$items = $formattedItems;
		$tree = array();
		foreach($items as $item){
			if(isset($items[$item[$pid]])){
				$items[$item[$pid]][$childNodeKey][] = &$items[$item[$pk]];
			}else{
				$tree[] = &$items[$item[$pk]];
			}
		}
		return $tree;
	}

	/**
	 * 查询数组子集
	 * @param $array
	 * @param $children
	 * @return bool
	 */
	public static function contains($array, $children)
	{
		if ( empty( $array ) || empty( $children ) ) {
			return false;
		}

		foreach ( $children as $child ) {
			if ( ! in_array( $child, $array ) ) {
				return false;
			}
		}
		return true;
	}

	/**
	 * 获取数组中指定Key的值
	 * @param $key
	 * @param $array
	 * @return array
	 */
	public static function values($key, $array)
	{
		$values = [];
		foreach ($array as $item) {
			isset($item[$key]) && array_push($values, $item[$key]);
		}
		return $values;
	}

}