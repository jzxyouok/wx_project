<?php

namespace app\modules\admin;

use yii;
/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = 'base';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        // custom initialization code goes here
    }

    public static function getMenu(){
        return [
              'items' => [
                  // Important: you need to specify url as 'controller/action',
                  // not just as 'controller' even if default action is used.
                  ['label' => '首页', 'url' => ['site/index'], 'options' => ['class' => 'active'], 'template' => '<a href="{url}"><i class="fa fa-link"></i><span>{$label}</span></a>'],
                  // 'Products' menu item will be selected as long as the route is 'product/index'
                  ['label' => '微信', 'url' => ['product/index'], 'items' => [
                      ['label' => 'New Arrivals', 'url' => ['product/index']],
                      ['label' => 'Most Popular', 'url' => ['product/index']],
                  ],
                  'template' => '<a href="{url}"><i class="fa fa-link"></i><span>{label}</span><span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span></a>',
                    'options'=>['class'=>'treeview']
                  ],
                  ['label' => '基本功能', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
              ],
              'options'=>['class'=>'sidebar-menu'],
          ];
    }
    
}
