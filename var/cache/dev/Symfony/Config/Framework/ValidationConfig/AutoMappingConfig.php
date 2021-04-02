<?php

namespace Symfony\Config\Framework\ValidationConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AutoMappingConfig 
{
    private $services;
    
    public function service( $value): self
    {
        $this->services = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["services"])) {
            $this->services = $value["services"];
            unset($value["services"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->services) {
            $output["services"] = $this->services;
        }
    
        return $output;
    }
    

}
