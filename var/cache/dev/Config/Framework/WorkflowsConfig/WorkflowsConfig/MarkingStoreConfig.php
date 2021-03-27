<?php

namespace Config\Framework\WorkflowsConfig\WorkflowsConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MarkingStoreConfig
{
    private $type;
    private $property;
    private $service;
    
    /**
     * @default NULL
     * @param 'method' $value
     */
    public function setType(string $value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default 'marking'
     */
    public function setProperty( $value): self
    {
        $this->property = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setService( $value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->type) {
            $output["type"] = $this->type;
        }
        if (null !== $this->property) {
            $output["property"] = $this->property;
        }
        if (null !== $this->service) {
            $output["service"] = $this->service;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["type"])) {
            $this->type = $value["type"];
            unset($value["type"]);
        }
    
        if (isset($value["property"])) {
            $this->property = $value["property"];
            unset($value["property"]);
        }
    
        if (isset($value["service"])) {
            $this->service = $value["service"];
            unset($value["service"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
