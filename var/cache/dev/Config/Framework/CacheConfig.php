<?php

namespace Config\Framework;

require_once __DIR__.'/CacheConfig/PoolConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CacheConfig
{
    private $prefixSeed;
    private $app;
    private $system;
    private $directory;
    private $defaultDoctrineProvider;
    private $defaultPsr6Provider;
    private $defaultRedisProvider;
    private $defaultMemcachedProvider;
    private $defaultPdoProvider;
    private $pools;
    
    /**
     * Used to namespace cache keys when using several apps with the same shared backend
     * @example my-application-name/%kernel.environment%
     * @default '_%kernel.project_dir%.%kernel.container_class%'
     */
    public function setPrefixSeed( $value): self
    {
        $this->prefixSeed = $value;
    
        return $this;
    }
    
    /**
     * App related cache pools configuration
     * @default 'cache.adapter.filesystem'
     */
    public function setApp( $value): self
    {
        $this->app = $value;
    
        return $this;
    }
    
    /**
     * System related cache pools configuration
     * @default 'cache.adapter.system'
     */
    public function setSystem( $value): self
    {
        $this->system = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/pools'
     */
    public function setDirectory( $value): self
    {
        $this->directory = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setDefaultDoctrineProvider( $value): self
    {
        $this->defaultDoctrineProvider = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setDefaultPsr6Provider( $value): self
    {
        $this->defaultPsr6Provider = $value;
    
        return $this;
    }
    
    /**
     * @default 'redis://localhost'
     */
    public function setDefaultRedisProvider( $value): self
    {
        $this->defaultRedisProvider = $value;
    
        return $this;
    }
    
    /**
     * @default 'memcached://localhost'
     */
    public function setDefaultMemcachedProvider( $value): self
    {
        $this->defaultMemcachedProvider = $value;
    
        return $this;
    }
    
    /**
     * @default 'database_connection'
     */
    public function setDefaultPdoProvider( $value): self
    {
        $this->defaultPdoProvider = $value;
    
        return $this;
    }
    
    public function addPool(string $name, array $value = []): \Config\Framework\CacheConfig\PoolConfig
    {
        return $this->pools[$name] = new \Config\Framework\CacheConfig\PoolConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->prefixSeed) {
            $output["prefix_seed"] = $this->prefixSeed;
        }
        if (null !== $this->app) {
            $output["app"] = $this->app;
        }
        if (null !== $this->system) {
            $output["system"] = $this->system;
        }
        if (null !== $this->directory) {
            $output["directory"] = $this->directory;
        }
        if (null !== $this->defaultDoctrineProvider) {
            $output["default_doctrine_provider"] = $this->defaultDoctrineProvider;
        }
        if (null !== $this->defaultPsr6Provider) {
            $output["default_psr6_provider"] = $this->defaultPsr6Provider;
        }
        if (null !== $this->defaultRedisProvider) {
            $output["default_redis_provider"] = $this->defaultRedisProvider;
        }
        if (null !== $this->defaultMemcachedProvider) {
            $output["default_memcached_provider"] = $this->defaultMemcachedProvider;
        }
        if (null !== $this->defaultPdoProvider) {
            $output["default_pdo_provider"] = $this->defaultPdoProvider;
        }
        if (null !== $this->pools) {
            $output["pools"] = array_map(function($v) { return $v->toArray(); }, $this->pools);
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["prefix_seed"])) {
            $this->prefixSeed = $value["prefix_seed"];
            unset($value["prefix_seed"]);
        }
    
        if (isset($value["app"])) {
            $this->app = $value["app"];
            unset($value["app"]);
        }
    
        if (isset($value["system"])) {
            $this->system = $value["system"];
            unset($value["system"]);
        }
    
        if (isset($value["directory"])) {
            $this->directory = $value["directory"];
            unset($value["directory"]);
        }
    
        if (isset($value["default_doctrine_provider"])) {
            $this->defaultDoctrineProvider = $value["default_doctrine_provider"];
            unset($value["default_doctrine_provider"]);
        }
    
        if (isset($value["default_psr6_provider"])) {
            $this->defaultPsr6Provider = $value["default_psr6_provider"];
            unset($value["default_psr6_provider"]);
        }
    
        if (isset($value["default_redis_provider"])) {
            $this->defaultRedisProvider = $value["default_redis_provider"];
            unset($value["default_redis_provider"]);
        }
    
        if (isset($value["default_memcached_provider"])) {
            $this->defaultMemcachedProvider = $value["default_memcached_provider"];
            unset($value["default_memcached_provider"]);
        }
    
        if (isset($value["default_pdo_provider"])) {
            $this->defaultPdoProvider = $value["default_pdo_provider"];
            unset($value["default_pdo_provider"]);
        }
    
        if (isset($value["pools"])) {
            $this->pools = array_map(function($v) { return new PoolConfig($v); }, $value["pools"]);;
            unset($value["pools"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}