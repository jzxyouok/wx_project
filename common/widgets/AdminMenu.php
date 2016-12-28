<?php
namespace common\widgets;

use Yii;
use yii\widgets\Menu;

class AdminMenu extends Menu
{

	public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';
}