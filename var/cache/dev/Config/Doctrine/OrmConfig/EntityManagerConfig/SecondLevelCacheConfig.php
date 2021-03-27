<?php

namespace Config\Doctrine\OrmConfig\EntityManagerConfig;

require_once __DIR__.'/SecondLevelCacheConfig/RegionCacheDriverConfig.php';
require_once __DIR__.'/SecondLevelCacheConfig/RegionConfig.php';
require_once __DIR__.'/SecondLevelCacheConfig/LoggerConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SecondLevelCacheConfig
{
    private $regionCacheDriver;
    private $regionLockLifetime;
    private $logEnabled;
    private $regionLifetime;
    private $enabled;
    private $factory;
    private $regions;
    private $loggers;
    
    public function addRegionCacheDriver(array $value = []): \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionCacheDriverConfig
    {
        return $this->regionCacheDriver = new \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionCacheDriverConfig($value);
    }
    
    /**
     * @default 60
     */
    public function setRegionLockLifetime( $value): self
    {
        $this->regionLockLifetime = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setLogEnabled(bool $value): self
    {
        $this->logEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default 3600
     */
    public function setRegionLifetime( $value): self
    {
        $this->regionLifetime = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setFactory( $value): self
    {
        $this->factory = $value;
    
        return $this;
    }
    
    public function addRegion(string $name, array $value = []): \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionConfig
    {
        return $this->regions[$name] = new \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionConfig($value);
    }
    
    public function addLogger(string $name, array $value = []): \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\LoggerConfig
    {
        return $this->loggers[$name] = new \Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\LoggerConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->regionCacheDriver) {
            $output["region_cache_driver"] = $this->regionCacheDriver->toArray();
        }
        if (null !== $this->regionLockLifetime) {
            $output["region_lock_lifetime"] = $this->regionLockLifetime;
        }
        if (null !== $this->logEnabled) {
            $output["log_enabled"] = $this->logEnabled;
        }
        if (null !== $this->regionLifetime) {
            $output["region_lifetime"] = $this->regionLifetime;
        }
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->factory) {
            $output["factory"] = $this->factory;
        }
        if (null !== $this->regions) {
            $output["regions"] = array_map(function($v) { return $v->toArray(); }, $this->regions);
        }
        if (null !== $this->loggers) {
            $output["loggers"] = array_map(function($v) { return $v->toArray(); }, $this->loggers);
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["region_cache_driver"])) {
            $this->regionCacheDriver = new RegionCacheDriverConfig($value["region_cache_driver"]);
            unset($value["region_cache_driver"]);
        }
    
        if (isset($value["region_lock_lifetime"])) {
            $this->regionLockLifetime = $value["region_lock_lifetime"];
            unset($value["region_lock_lifetime"]);
        }
    
        if (isset($value["log_enabled"])) {
            $this->logEnabled = $value["log_enabled"];
            unset($value["log_enabled"]);
        }
    
        if (isset($value["region_lifetime"])) {
            $this->regionLifetime = $value["region_lifetime"];
            unset($value["region_lifetime"]);
        }
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["factory"])) {
            $this->factory = $value["factory"];
            unset($value["factory"]);
        }
    
        if (isset($value["regions"])) {
            $this->regions = array_map(function($v) { return new RegionConfig($v); }, $value["regions"]);;
            unset($value["regions"]);
        }
    
        if (isset($value["loggers"])) {
            $this->loggers = array_map(function($v) { return new LoggerConfig($v); }, $value["loggers"]);;
            unset($value["loggers"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
