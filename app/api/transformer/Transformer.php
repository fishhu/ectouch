<?php

namespace app\api\transformer;

use app\contracts\transformer\TransformerInterface;

/**
 * Class Transformer
 * @package app\api
 */
class Transformer implements TransformerInterface
{
    /**
     * @var array
     */
    protected $_hidden = [];

    /**
     * @var array
     */
    protected $_map = [];

    /**
     * @param array $hidden
     */
    public function setHidden(array $hidden = [])
    {
        $this->_hidden = $hidden;
    }

    /**
     * @param array $map
     */
    public function setMap(array $map = [])
    {
        $this->_map = $map;
    }

    /**
     * @param array $data
     * @return array
     */
    public function transformer(array $data = [])
    {
        return $data;
    }
}