<?php

namespace Symfony\Config\Framework\Messenger;

require_once __DIR__.'/BusConfig/MiddlewareConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class BusConfig 
{
    private $defaultMiddleware;
    private $middleware;
    
    /**
     * @default true
     * @param true|false|'allow_no_handlers' $value
     * @return $this
     */
    public function defaultMiddleware($value): self
    {
        $this->defaultMiddleware = $value;
    
        return $this;
    }
    
    public function middleware(array $value = []): \Symfony\Config\Framework\Messenger\BusConfig\MiddlewareConfig
    {
        return $this->middleware[] = new \Symfony\Config\Framework\Messenger\BusConfig\MiddlewareConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["default_middleware"])) {
            $this->defaultMiddleware = $value["default_middleware"];
            unset($value["default_middleware"]);
        }
    
        if (isset($value["middleware"])) {
            $this->middleware = array_map(function($v) { return new MiddlewareConfig($v); }, $value["middleware"]);;
            unset($value["middleware"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultMiddleware) {
            $output["default_middleware"] = $this->defaultMiddleware;
        }
        if (null !== $this->middleware) {
            $output["middleware"] = array_map(function($v) { return $v->toArray(); }, $this->middleware);
        }
    
        return $output;
    }
    

}
