<?php

namespace Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig\ListenerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EventConfig 
{
    private $type;
    private $method;
    
    /**
     * @default NULL
     */
    public function type( $value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function method( $value): self
    {
        $this->method = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["type"])) {
            $this->type = $value["type"];
            unset($value["type"]);
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
        if (null !== $this->type) {
            $output["type"] = $this->type;
        }
        if (null !== $this->method) {
            $output["method"] = $this->method;
        }
    
        return $output;
    }
    

}
