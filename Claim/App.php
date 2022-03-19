<?php

namespace Claim;

/**
 * Class App
 *
 * @author  Chinh Le  <chinhle@pacificcross.com.vn>
 */
class App
{

    /**
     * @var  \Claim\Config
     */
    private $config;

    /**
     * Sample constructor.
     *
     * @param \Claim\Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param $name
     *
     * @return  string
     */
    public function sayHello($name)
    {
        $greeting = $this->config->get('greeting');

        return $greeting . ' ' . $name;
    }

}
