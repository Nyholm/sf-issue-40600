<?php

namespace Symfony\Config\Monolog\HandlerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EmailPrototypeConfig 
{
    private $id;
    private $method;
    
    /**
     * @default null
     * @return $this
     */
    public function id($value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @return $this
     */
    public function method($value): self
    {
        $this->method = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["id"])) {
            $this->id = $value["id"];
            unset($value["id"]);
        }
    
        if (isset($value["method"])) {
            $this->method = $value["method"];
            unset($value["method"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->id) {
            $output["id"] = $this->id;
        }
        if (null !== $this->method) {
            $output["method"] = $this->method;
        }
    
        return $output;
    }
    

}
