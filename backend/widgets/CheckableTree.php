<?php
namespace backend\widgets;

use yii\base\Widget;
use backend\assets\CheckableTreeAsset;
use common\helpers\StringHelper;

/***
 * 可勾选的Tree，可用于类似菜单授权页面等有层级关系的多选场景
 * @author mazc
 *
 */
class CheckableTree extends Widget
{
    public $domId;
    public $domName;
    public $domLabel;
    public $models;
    public $selectedIds;
    
    public function init()
    {
        parent::init();
    }
    
    public function run()
    {
        // 确保有dom id属性
        if(!isset($this->domId)){
            $this->domId = "dom".StringHelper::getRandStr(4);
        }
        // 注册静态资源
        $this->registerAssets();
        
        // build widget
        return $this->render('_treeview', [
            'domId' => $this->domId,
            'domName' => $this->domName,
            'domLabel' => $this->domLabel,
            'models' => $this->models,
            'selectedIds' => $this->selectedIds,
        ]);
    }
    
    /***
     * 注册静态资源和JS脚本
     */
    public function registerAssets()
    {
        $view = $this->getView();
        CheckableTreeAsset::register($view);
        // 执行JS 初始化
        $view->registerJs("var zNodes =[". $this->generateJsonData("", $this->models, $this->selectedIds) ."]; $('#". $this->domId ."').createCheckableTree(zNodes);");
    }
    
    /***
     * 将Model对象转换为Json用于UI显示
     * Model对象需有id, parent_id, name, children属性
     * @param unknown $treeModels
     */
    private function generateJsonData($nodesString, $treeModels, $selectedIds)
    {
        if($treeModels != null){
            foreach ($treeModels as $model)
            {
                $begin = "{";
                $perperties = "id:". $model->id .", pId:". $model->parent_id .", name:'". $model->name ."' ";                
                if(in_array($model->id, $selectedIds)){
                    $perperties = $perperties. ", checked:true ";
                }
                $end = "},";
                if($model->children != null){
                    $perperties = $perperties. ", open:true ";
                    $nodesString = $nodesString.$begin.$perperties.$end;
                    // 递归拼接js串
                    $nodesString = $this->generateJsonData($nodesString, $model->children, $selectedIds);
                }
                else{
                    $nodesString = $nodesString.$begin.$perperties.$end;                       
                }
            }
        }
        
        return $nodesString;
    }
    
}