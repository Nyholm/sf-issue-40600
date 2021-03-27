<?php

namespace Config\Framework\ValidationConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MappingConfig
{
    private $paths;
    
    public function addPath( $value): self
    {
        $this->paths[] = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->paths) {
            $output["paths"] = $this->paths;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["paths"])) {
            $this->paths = $value["paths"];
            unset($value["paths"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
