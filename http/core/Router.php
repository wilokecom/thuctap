<?php

class Router
{
    private $router = [
        'GET'  => [],
        'POST' => []
    ];
    private $currentRoute;
    private $currentViewPath;
    private $currentController;
    private $currentControllerPath;
    private $baseUrl;
    
    public static function load($router)
    {
        $oRouter = new static();
        include $router;
        
        return $oRouter;
    }
    
    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;
    }
    
    public function define($router)
    {
        $this->router = $router;
        
        return $this;
    }
    
    private function removeBaseUrl($url)
    {
        return str_replace($this->baseUrl, '', $url);
    }
    
    private function hasRoute($uri, $requestType)
    {
        if (isset($this->router[$requestType][$uri])) {
            $this->currentRoute = $this->router[$requestType][$uri];
            
            return true;
        }
        
        return false;
    }
    
    public function get($uri, $controller)
    {
        $this->router['GET'][$uri] = $controller;
    }
    
    public function post($uri, $controller)
    {
        $this->router['POST'][$uri] = $controller;
    }
    
    protected function callAction($controller, $method)
    {
        $oInit = new $controller;
        
        if (!method_exists($controller, $method)) {
            throw new Exception("The controller $controller does not respond to $method method");
        }
        
        $oInit->$method();
    }
    
    public function direct($uri, $requestType)
    {
        $requestType = strtoupper($requestType);
        if ($this->hasRoute($uri, $requestType)) {
            try {
                $this->callAction(
                    ...explode('@', $this->currentRoute)
                );
                
                return true;
            } catch (Exception $e) {
                echo $e->getMessage();
                die;
            }
        }
        
        throw new Exception('This route does not exist');
    }
}
