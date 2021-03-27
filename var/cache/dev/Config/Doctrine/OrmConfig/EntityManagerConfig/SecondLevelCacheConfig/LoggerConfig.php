<?php

namespace Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LoggerConfig
{
    private $name;
    private $service;
    
    /**
     * @default NULL
     */
    public function setName( $value): self
    {
        $this->name = $value;
    
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
        if (null !== $this->name) {
            $output["name"] = $this->name;
        }
        if (null !== $this->service) {
            $output["service"] = $this->service;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["name"])) {
            $this->name = $value["name"];
            unset($value["name"]);
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
