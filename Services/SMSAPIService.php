<?php

namespace MyKrzysiu\SMSAPIBundle\Services;

use SMSApi\Client;
use SMSApi\Api\SmsFactory;
use SMSApi\Proxy\Http\Native;

/**
 * SMSAPIService
 *
 */
class SMSAPIService
{
    /**
     * @var array
     */
    protected $config = array();


    /**
     * Constructor
     *
     * @param array $config
     *
     * @return void
     */
    public function __construct(array $config)
    {
        $this->config = $config;
        
        return $this->login();
    }
    
    public function login()
    {
        $client = new Client($this->config['login']);
        $client->setPasswordHash(md5($this->config['password']));
        
        $proxy = null;
        
        if($this->config['second_channel'])
            $proxy = new Native('https://api2.smsapi.pl');

        return new SmsFactory($proxy);
    }

  
}
