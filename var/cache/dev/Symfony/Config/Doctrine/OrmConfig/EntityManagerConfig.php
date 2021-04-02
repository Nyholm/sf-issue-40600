<?php

namespace Symfony\Config\Doctrine\OrmConfig;

require_once __DIR__.'/EntityManagerConfig/QueryCacheDriverConfig.php';
require_once __DIR__.'/EntityManagerConfig/MetadataCacheDriverConfig.php';
require_once __DIR__.'/EntityManagerConfig/ResultCacheDriverConfig.php';
require_once __DIR__.'/EntityManagerConfig/EntityListenersConfig.php';
require_once __DIR__.'/EntityManagerConfig/SecondLevelCacheConfig.php';
require_once __DIR__.'/EntityManagerConfig/MappingConfig.php';
require_once __DIR__.'/EntityManagerConfig/DqlConfig.php';
require_once __DIR__.'/EntityManagerConfig/FilterConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EntityManagerConfig 
{
    private $queryCacheDriver;
    private $metadataCacheDriver;
    private $resultCacheDriver;
    private $entityListeners;
    private $connection;
    private $classMetadataFactoryName;
    private $defaultRepositoryClass;
    private $autoMapping;
    private $namingStrategy;
    private $quoteStrategy;
    private $entityListenerResolver;
    private $repositoryFactory;
    private $secondLevelCache;
    private $hydrators;
    private $mappings;
    private $dql;
    private $filters;
    
    public function queryCacheDriver(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\QueryCacheDriverConfig
    {
        if (null === $this->queryCacheDriver) {
            $this->queryCacheDriver = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\QueryCacheDriverConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "queryCacheDriver()" has already been initialized. You cannot pass values the second time you call queryCacheDriver().'));
        }
    
        return $this->queryCacheDriver;
    }
    
    public function metadataCacheDriver(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\MetadataCacheDriverConfig
    {
        if (null === $this->metadataCacheDriver) {
            $this->metadataCacheDriver = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\MetadataCacheDriverConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "metadataCacheDriver()" has already been initialized. You cannot pass values the second time you call metadataCacheDriver().'));
        }
    
        return $this->metadataCacheDriver;
    }
    
    public function resultCacheDriver(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\ResultCacheDriverConfig
    {
        if (null === $this->resultCacheDriver) {
            $this->resultCacheDriver = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\ResultCacheDriverConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "resultCacheDriver()" has already been initialized. You cannot pass values the second time you call resultCacheDriver().'));
        }
    
        return $this->resultCacheDriver;
    }
    
    public function entityListeners(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig
    {
        if (null === $this->entityListeners) {
            $this->entityListeners = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "entityListeners()" has already been initialized. You cannot pass values the second time you call entityListeners().'));
        }
    
        return $this->entityListeners;
    }
    
    /**
     * @default NULL
     */
    public function connection( $value): self
    {
        $this->connection = $value;
    
        return $this;
    }
    
    /**
     * @default 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory'
     */
    public function classMetadataFactoryName( $value): self
    {
        $this->classMetadataFactoryName = $value;
    
        return $this;
    }
    
    /**
     * @default 'Doctrine\\ORM\\EntityRepository'
     */
    public function defaultRepositoryClass( $value): self
    {
        $this->defaultRepositoryClass = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function autoMapping( $value): self
    {
        $this->autoMapping = $value;
    
        return $this;
    }
    
    /**
     * @default 'doctrine.orm.naming_strategy.default'
     */
    public function namingStrategy( $value): self
    {
        $this->namingStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default 'doctrine.orm.quote_strategy.default'
     */
    public function quoteStrategy( $value): self
    {
        $this->quoteStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function entityListenerResolver( $value): self
    {
        $this->entityListenerResolver = $value;
    
        return $this;
    }
    
    /**
     * @default 'doctrine.orm.container_repository_factory'
     */
    public function repositoryFactory( $value): self
    {
        $this->repositoryFactory = $value;
    
        return $this;
    }
    
    public function secondLevelCache(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig
    {
        if (null === $this->secondLevelCache) {
            $this->secondLevelCache = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\SecondLevelCacheConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "secondLevelCache()" has already been initialized. You cannot pass values the second time you call secondLevelCache().'));
        }
    
        return $this->secondLevelCache;
    }
    
    public function hydrator(string $name,  $value): self
    {
        $this->hydrators[$name] = $value;
    
        return $this;
    }
    
    public function mapping(string $name, array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\MappingConfig
    {
        return $this->mappings[$name] = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\MappingConfig($value);
    }
    
    public function dql(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\DqlConfig
    {
        if (null === $this->dql) {
            $this->dql = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\DqlConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "dql()" has already been initialized. You cannot pass values the second time you call dql().'));
        }
    
        return $this->dql;
    }
    
    public function filter(string $name, array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\FilterConfig
    {
        return $this->filters[$name] = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\FilterConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["query_cache_driver"])) {
            $this->queryCacheDriver = new QueryCacheDriverConfig($value["query_cache_driver"]);
            unset($value["query_cache_driver"]);
        }
    
        if (isset($value["metadata_cache_driver"])) {
            $this->metadataCacheDriver = new MetadataCacheDriverConfig($value["metadata_cache_driver"]);
            unset($value["metadata_cache_driver"]);
        }
    
        if (isset($value["result_cache_driver"])) {
            $this->resultCacheDriver = new ResultCacheDriverConfig($value["result_cache_driver"]);
            unset($value["result_cache_driver"]);
        }
    
        if (isset($value["entity_listeners"])) {
            $this->entityListeners = new EntityListenersConfig($value["entity_listeners"]);
            unset($value["entity_listeners"]);
        }
    
        if (isset($value["connection"])) {
            $this->connection = $value["connection"];
            unset($value["connection"]);
        }
    
        if (isset($value["class_metadata_factory_name"])) {
            $this->classMetadataFactoryName = $value["class_metadata_factory_name"];
            unset($value["class_metadata_factory_name"]);
        }
    
        if (isset($value["default_repository_class"])) {
            $this->defaultRepositoryClass = $value["default_repository_class"];
            unset($value["default_repository_class"]);
        }
    
        if (isset($value["auto_mapping"])) {
            $this->autoMapping = $value["auto_mapping"];
            unset($value["auto_mapping"]);
        }
    
        if (isset($value["naming_strategy"])) {
            $this->namingStrategy = $value["naming_strategy"];
            unset($value["naming_strategy"]);
        }
    
        if (isset($value["quote_strategy"])) {
            $this->quoteStrategy = $value["quote_strategy"];
            unset($value["quote_strategy"]);
        }
    
        if (isset($value["entity_listener_resolver"])) {
            $this->entityListenerResolver = $value["entity_listener_resolver"];
            unset($value["entity_listener_resolver"]);
        }
    
        if (isset($value["repository_factory"])) {
            $this->repositoryFactory = $value["repository_factory"];
            unset($value["repository_factory"]);
        }
    
        if (isset($value["second_level_cache"])) {
            $this->secondLevelCache = new SecondLevelCacheConfig($value["second_level_cache"]);
            unset($value["second_level_cache"]);
        }
    
        if (isset($value["hydrators"])) {
            $this->hydrators = $value["hydrators"];
            unset($value["hydrators"]);
        }
    
        if (isset($value["mappings"])) {
            $this->mappings = array_map(function($v) { return new MappingConfig($v); }, $value["mappings"]);;
            unset($value["mappings"]);
        }
    
        if (isset($value["dql"])) {
            $this->dql = new DqlConfig($value["dql"]);
            unset($value["dql"]);
        }
    
        if (isset($value["filters"])) {
            $this->filters = array_map(function($v) { return new FilterConfig($v); }, $value["filters"]);;
            unset($value["filters"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->queryCacheDriver) {
            $output["query_cache_driver"] = $this->queryCacheDriver->toArray();
        }
        if (null !== $this->metadataCacheDriver) {
            $output["metadata_cache_driver"] = $this->metadataCacheDriver->toArray();
        }
        if (null !== $this->resultCacheDriver) {
            $output["result_cache_driver"] = $this->resultCacheDriver->toArray();
        }
        if (null !== $this->entityListeners) {
            $output["entity_listeners"] = $this->entityListeners->toArray();
        }
        if (null !== $this->connection) {
            $output["connection"] = $this->connection;
        }
        if (null !== $this->classMetadataFactoryName) {
            $output["class_metadata_factory_name"] = $this->classMetadataFactoryName;
        }
        if (null !== $this->defaultRepositoryClass) {
            $output["default_repository_class"] = $this->defaultRepositoryClass;
        }
        if (null !== $this->autoMapping) {
            $output["auto_mapping"] = $this->autoMapping;
        }
        if (null !== $this->namingStrategy) {
            $output["naming_strategy"] = $this->namingStrategy;
        }
        if (null !== $this->quoteStrategy) {
            $output["quote_strategy"] = $this->quoteStrategy;
        }
        if (null !== $this->entityListenerResolver) {
            $output["entity_listener_resolver"] = $this->entityListenerResolver;
        }
        if (null !== $this->repositoryFactory) {
            $output["repository_factory"] = $this->repositoryFactory;
        }
        if (null !== $this->secondLevelCache) {
            $output["second_level_cache"] = $this->secondLevelCache->toArray();
        }
        if (null !== $this->hydrators) {
            $output["hydrators"] = $this->hydrators;
        }
        if (null !== $this->mappings) {
            $output["mappings"] = array_map(function($v) { return $v->toArray(); }, $this->mappings);
        }
        if (null !== $this->dql) {
            $output["dql"] = $this->dql->toArray();
        }
        if (null !== $this->filters) {
            $output["filters"] = array_map(function($v) { return $v->toArray(); }, $this->filters);
        }
    
        return $output;
    }
    

}
