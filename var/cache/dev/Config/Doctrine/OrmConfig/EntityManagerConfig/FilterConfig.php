<?php

namespace Config\Doctrine\OrmConfig\EntityManagerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FilterConfig
{
    private $class;
    private $enabled;
    private $parameters;
    
    /**
     * @default NULL
     */
    public function setClass( $value): self
    {
        $this->class = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function addParameter(string $name,  $value): self
    {
        $this->parameters[$name] = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->class) {
            $output["class"] = $this->class;
        }
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->parameters) {
            $output["parameters"] = $this->parameters;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["class"])) {
            $this->class = $value["class"];
            unset($value["class"]);
        }
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["parameters"])) {
            $this->parameters = $value["parameters"];
            unset($value["parameters"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
