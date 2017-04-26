<?php

namespace app\contracts\transformer;

/**
 * Interface TransformerInterface
 * @package app\contracts\transformer
 */
interface TransformerInterface
{
    /**
     * @return mixed
     */
    public function setHidden(array $hidden);

    /**
     * @return mixed
     */
    public function setMap(array $map);

    /**
     * @return mixed
     */
    public function transformer(array $data);
}