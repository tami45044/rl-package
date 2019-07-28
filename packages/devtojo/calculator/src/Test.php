<?php

namespace Devtojo\Calculator;

class Test
{
	protected $config = []; 

	public function __construct()
	{
		$this->config = ['auto' => true];
	}

    public function setKey($key)
    {
        $this->config['key'] = $key;

        return $this;
    }

    // public static function test()
    // {
    //     return (new static())->dd();
    // }

    public function setSecret($secret)
    {
        $this->config['secret'] = $secret;

        return $this;
    }

    public function dd()
    {
        return dd($this);
    }

    public function sendRequest()
    {
    	// ciah
        return $this->config;
    }

    public function checkConfig()
    {
        //DOTO
        return back();
    }



}
