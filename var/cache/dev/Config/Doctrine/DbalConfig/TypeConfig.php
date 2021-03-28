<?php

namespace Config\Doctrine\DbalConfig;



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
     * @default NULL
     */
    public function setClass( $value): self
    {
        $this->class = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setCommented(bool $value): self
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
