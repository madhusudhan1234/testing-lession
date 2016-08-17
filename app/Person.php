<?php

use Symfony\Component\Finder\Finder;

class Hello
{

    /**
     * @var mixed
     */
    private $money;
    /**
     * @var mixed
     */
    private $working;

    /**
     * @param Finder $money
     * @param $working
     */
    public function __construct(Finder $money, $working)
    {
        $this->money = $money;
        $this->working = $working;
    }

    /**
     * @return object
     */
    public function helloWorld()
    {
        return $this->money;
    }

}
