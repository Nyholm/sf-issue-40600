<?php

namespace Symfony\Config\Monolog\HandlerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ChannelsConfig 
{
    private $type;
    private $elements;
    
    /**
     * @default null
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function elements(array $value): self
    {
        $this->elements = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["type"])) {
            $this->type = $value["type"];
            unset($value["type"]);
        }
    
        if (isset($value["elements"])) {
            $this->elements = $value["elements"];
            unset($value["elements"]);
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
        if (null !== $this->elements) {
            $output["elements"] = $this->elements;
        }
    
        return $output;
    }
    

}
