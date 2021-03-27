<?php

namespace Config\Framework\MessengerConfig;

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
     */
    public function setDefaultMiddleware(string $value): self
    {
        $this->defaultMiddleware = $value;
    
        return $this;
    }
    
    public function addMiddleware(array $value = []): \Config\Framework\MessengerConfig\BusConfig\MiddlewareConfig
    {
        return $this->middleware[] = new \Config\Framework\MessengerConfig\BusConfig\MiddlewareConfig($value);
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
    

}
