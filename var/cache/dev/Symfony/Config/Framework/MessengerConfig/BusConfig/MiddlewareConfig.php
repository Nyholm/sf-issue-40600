<?php

namespace Symfony\Config\Framework\MessengerConfig\BusConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MiddlewareConfig 
{
    private $id;
    private $arguments;
    
    /**
     * @default NULL
     */
    public function id( $value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    public function argument( $value): self
    {
        $this->arguments = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["id"])) {
            $this->id = $value["id"];
            unset($value["id"]);
        }
    
        if (isset($value["arguments"])) {
            $this->arguments = $value["arguments"];
            unset($value["arguments"]);
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
        if (null !== $this->arguments) {
            $output["arguments"] = $this->arguments;
        }
    
        return $output;
    }
    

}
