<?php

namespace Symfony\Config\Doctrine\Dbal;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TypeConfig 
{
    private $class;
    private $commented;
    
    /**
     * @default null
     */
    public function class($value): self
    {
        $this->class = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @deprecated The doctrine-bundle type commenting features were removed; the corresponding config parameter was deprecated in 2.0 and will be dropped in 3.0.
     */
    public function commented(bool $value): self
    {
        $this->commented = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["class"])) {
            $this->class = $value["class"];
            unset($value["class"]);
        }
    
        if (isset($value["commented"])) {
            $this->commented = $value["commented"];
            unset($value["commented"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->class) {
            $output["class"] = $this->class;
        }
        if (null !== $this->commented) {
            $output["commented"] = $this->commented;
        }
    
        return $output;
    }
    

}
