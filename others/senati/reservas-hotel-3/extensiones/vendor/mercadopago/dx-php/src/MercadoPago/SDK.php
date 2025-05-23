<?php
namespace MercadoPago;

/**
 * MercadoPagoSdk Class Doc Comment
 *
 * @package MercadoPago
 */
class SDK
{

    /**
     * @var Config
     */
    protected static $_config;
    /**
     * @var Manager
     */
    protected static $_manager;

    /**
     * @var
     */
    protected static $_restClient;

    /**
     * MercadoPagoSdk constructor.
     */
    public static function initialize()
    {
        self::$_restClient = new RestClient();
        self::$_config = new Config(null, self::$_restClient);
        self::$_restClient->setHttpParam('address', self::$_config->get('base_url'));
        self::$_manager = new Manager(self::$_restClient, self::$_config);
        Entity::setManager(self::$_manager);
    }
    
    /**
     * Set Access Token for SDK .
     */
    public static function setAccessToken($access_token){
      if (!isset(self::$_config)){
        self::initialize();
      }
      self::$_config->configure(['ACCESS_TOKEN' => $access_token]);
      
    }

    public static function getAccessToken(){
      return self::$_config->get('ACCESS_TOKEN');
    }

    public static function cleanCredentials(){
      if (self::$_config == null) {
        // do nothing
      } else {
        self::$_config->clean();
      }
    }
    
    public static function setMultipleCredentials($array){
        foreach($array as $key => $values) {
          self::$_config->configure([$key => $values]); 
        }
    }

    /**
     * Set Access ClientId for SDK .
     */
    public static function setClientId($client_id){
      if (!isset(self::$_config)){
        self::initialize();
      }
      self::$_config->configure(['CLIENT_ID' => $client_id]); 
    }

    public static function getClientId(){
      return self::$_config->get('CLIENT_ID');
    }
    
    /**
     * Set Access ClientSecret for SDK .
     */
    public static function setClientSecret($client_secret){
      if (!isset(self::$_config)){
        self::initialize();
      }
      self::$_config->configure(['CLIENT_SECRET' => $client_secret]); 
    }

    public static function getClientSecret(){
      return self::$_config->get('CLIENT_SECRET');
    }

    /**
     * Set Access ClientSecret for SDK .
     */
    public static function setPublicKey($public_key){ 
      self::$_config->configure(['PUBLIC_KEY' => $public_key]); 
    }

    public static function getPublicKey(){
      return self::$_config->get('PUBLIC_KEY');
    }
    
    public static function configure($data=[])
    {
      self::initialize();
      self::$_config->configure($data);
    }

    /**
     * @return Config
     */
    public static function config()
    {
      return self::$_config;
    }
    
    public static function addCustomTrackingParam($key, $value)
    {
      self::$_manager->addCustomTrackingParam($key, $value);
    }
    
    
    // Publishing generic functions 
    
    public static function get($uri, $options=[])
    {
      if ($token = self::$_config->get('ACCESS_TOKEN')) {
        $uri = $uri . "?access_token=" . $token;
      }
      return self::$_restClient->get($uri, $options);
    }
    
    public static function post($uri, $options=[])
    {
      if ($token = self::$_config->get('ACCESS_TOKEN')) {
        $uri = $uri . "?access_token=" . $token;
      }
      return self::$_restClient->post($uri, $options);
    }
    
    public static function put($uri, $options=[])
    {
      if ($token = self::$_config->get('ACCESS_TOKEN')) {
        $uri = $uri . "?access_token=" . $token;
      }
      return self::$_restClient->put($uri, $options);
    }
    
    public static function delete($uri, $options=[])
    {
      if ($token = self::$_config->get('ACCESS_TOKEN')) {
        $uri = $uri . "?access_token=" . $token;
      }
      return self::$_restClient->deleted($uri, $options);
    }

}

