<?php

namespace app\modules\console\controllers;

use Yii;
use yii\web\Controller;

class FoundationController extends Controller
{

    public $menu;

    public function init()
    {
        parent::init();

        $this->menu = $this->buildMenu(Yii::$app->requestedRoute);
    }

    /**
     * console menu
     * @param string $route
     * @return array
     */
    private function buildMenu($route = '')
    {
        $menu = Yii::$app->params['menu'];
        $flag = false;
        foreach ($menu as $key => $item) {
            foreach ($item['submenu'] as $k => $sub) {
                if (stripos($route, $sub['url']) === false) {
                    $menu[$key]['submenu'][$k]['active'] = '';
                } else {
                    $menu[$key]['submenu'][$k]['active'] = ' class="active"';
                    $flag = true;
                }
            }
            $menu[$key]['active'] = $flag ? ' active' : '';
            $flag = false;
        }
        return $menu;
    }
}
