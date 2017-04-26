<?php

namespace app\api\controllers\v2;

use yii\web\Controller;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{
    /**
     * @var ArticleRepositoryInterface
     */
    protected $articleRepository;

    /**
     * ArticleController constructor.
     * @param $articleRepository
     */
    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $condition = [
        ];
        return $this->articleRepository->all($condition);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function show(Request $request)
    {
        return $this->articleRepository->find($request->input('id'));
    }


}
