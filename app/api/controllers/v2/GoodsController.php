<?php

namespace app\api\controllers\v2;

use yii\web\Controller;

/**
 * Class GoodsController
 * @package App\Http\Controllers
 */
class GoodsController extends Controller
{
    protected $goodsRepository;

    /**
     * GoodsController constructor.
     * @param GoodsRepositoryInterface $goodsRepository
     */
    public function __construct(GoodsRepositoryInterface $goodsRepository)
    {
        $this->goodsRepository = $goodsRepository;
    }

    /**
     * @param Request $request
     * @return Request
     */
    public function index(Request $request)
    {
        return $request;
    }

    /**
     * @return mixed
     */
    public function show(Request $request)
    {
        return $this->goodsRepository->all();
    }

    /**
     *
     */
    public function accessory(Request $request)
    {

    }
}
