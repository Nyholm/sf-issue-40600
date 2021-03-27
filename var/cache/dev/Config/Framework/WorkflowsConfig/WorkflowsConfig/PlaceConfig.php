<?php

namespace Config\Framework\WorkflowsConfig\WorkflowsConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PlaceConfig
{
    private $name;
    private $metadata;
    
    /**
     * @default NULL
     */
    public function setName( $value): self
    {
        $this->name = $value;
    
        return $this;
    }
    
    public function addMetadata( $value): self
    {
        $this->metadata[] = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->name) {
            $output["name"] = $this->name;
        }
        if (null !== $this->metadata) {
            $output["metadata"] = $this->metadata;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["name"])) {
            $this->name = $value["name"];
            unset($value["name"]);
        }
    
        if (isset($value["metadata"])) {
            $this->metadata = $value["metadata"];
            unset($value["metadata"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
