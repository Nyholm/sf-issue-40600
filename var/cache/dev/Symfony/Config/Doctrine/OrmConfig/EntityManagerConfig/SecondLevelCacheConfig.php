<?php

namespace Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig;

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
    
    public function regionCacheDriver(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionCacheDriverConfig
    {
        if (null === $this->regionCacheDriver) {
            $this->regionCacheDriver = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionCacheDriverConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "regionCacheDriver()" has already been initialized. You cannot pass values the second time you call regionCacheDriver().'));
        }
    
        return $this->regionCacheDriver;
    }
    
    /**
     * @default 60
     */
    public function regionLockLifetime( $value): self
    {
        $this->regionLockLifetime = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function logEnabled(bool $value): self
    {
        $this->logEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default 3600
     */
    public function regionLifetime( $value): self
    {
        $this->regionLifetime = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function enabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function factory( $value): self
    {
        $this->factory = $value;
    
        return $this;
    }
    
    public function region(string $name, array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionConfig
    {
        return $this->regions[$name] = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\RegionConfig($value);
    }
    
    public function logger(string $name, array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\LoggerConfig
    {
        return $this->loggers[$name] = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig\LoggerConfig($value);
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
    

}
