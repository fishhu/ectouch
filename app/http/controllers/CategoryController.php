<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function index()
    {
        $cache = Yii::$app->cache;
        $key = 'category_all';

        $category = $cache->get($key);

        if ($category === false) {
            $category = CategoryRepository::getAll(['id' => 0]);
            $cache->set($key, $category);
        }

        return $this->render('index', ['category' => $category]);
    }

    /**
     * Displays detailpage.
     *
     * @return string
     */
    public function detail()
    {
        $id = Yii::$app->request->get('id', 0);
        $category = CategoryRepository::getDetail(['id' => $id]);

        return $this->render('detail', ['category' => $category]);
    }
    
    
    public function search(){
        return $this->render('search');
    }

}
