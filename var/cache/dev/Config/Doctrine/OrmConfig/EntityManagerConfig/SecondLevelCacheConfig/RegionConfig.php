<?php

namespace Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig;

require_once __DIR__.'/RegionConfig/CacheDriverConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RegionConfig
{
    private $cacheDriver;
    private $lockPath;
    private $lockLifetime;
    private $type;
    private $lifetime;
    private $service;
    private $name;
    
    public function addCacheDriver(array $value = []): \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionConfig\CacheDriverConfig
    {
        return $this->cacheDriver = new \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionConfig\CacheDriverConfig($value);
    }
    
    /**
     * @default '%kernel.cache_dir%/doctrine/orm/slc/filelock'
     */
    public function setLockPath( $value): self
    {
        $this->lockPath = $value;
    
        return $this;
    }
    
    /**
     * @default 60
     */
    public function setLockLifetime( $value): self
    {
        $this->lockLifetime = $value;
    
        return $this;
    }
    
    /**
     * @default 'default'
     */
    public function setType( $value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     */
    public function setLifetime( $value): self
    {
        $this->lifetime = $value;
    
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
    
    /**
     * @default NULL
     */
    public function setName( $value): self
    {
        $this->name = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->cacheDriver) {
            $output["cache_driver"] = $this->cacheDriver->toArray();
        }
        if (null !== $this->lockPath) {
            $output["lock_path"] = $this->lockPath;
        }
        if (null !== $this->lockLifetime) {
            $output["lock_lifetime"] = $this->lockLifetime;
        }
        if (null !== $this->type) {
            $output["type"] = $this->type;
        }
        if (null !== $this->lifetime) {
            $output["lifetime"] = $this->lifetime;
        }
        if (null !== $this->service) {
            $output["service"] = $this->service;
        }
        if (null !== $this->name) {
            $output["name"] = $this->name;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["cache_driver"])) {
            $this->cacheDriver = new CacheDriverConfig($value["cache_driver"]);
            unset($value["cache_driver"]);
        }
    
        if (isset($value["lock_path"])) {
            $this->lockPath = $value["lock_path"];
            unset($value["lock_path"]);
        }
    
        if (isset($value["lock_lifetime"])) {
            $this->lockLifetime = $value["lock_lifetime"];
            unset($value["lock_lifetime"]);
        }
    
        if (isset($value["type"])) {
            $this->type = $value["type"];
            unset($value["type"]);
        }
    
        if (isset($value["lifetime"])) {
            $this->lifetime = $value["lifetime"];
            unset($value["lifetime"]);
        }
    
        if (isset($value["service"])) {
            $this->service = $value["service"];
            unset($value["service"]);
        }
    
        if (isset($value["name"])) {
            $this->name = $value["name"];
            unset($value["name"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
