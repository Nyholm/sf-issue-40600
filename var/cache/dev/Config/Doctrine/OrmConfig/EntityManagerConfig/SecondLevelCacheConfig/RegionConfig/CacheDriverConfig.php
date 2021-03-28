<?php

namespace Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CacheDriverConfig
{
    private $type;
    private $id;
    private $pool;
    
    /**
     * @default NULL
     */
    public function setType( $value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setId( $value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setPool( $value): self
    {
        $this->pool = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["type"])) {
            $this->type = $value["type"];
            unset($value["type"]);
        }
    
        if (isset($value["id"])) {
            $this->id = $value["id"];
            unset($value["id"]);
        }
    
        if (isset($value["pool"])) {
            $this->pool = $value["pool"];
            unset($value["pool"]);
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
        if (null !== $this->id) {
            $output["id"] = $this->id;
        }
        if (null !== $this->pool) {
            $output["pool"] = $this->pool;
        }
    
        return $output;
    }
    

}
