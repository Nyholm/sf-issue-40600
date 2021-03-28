<?php

namespace Config\Doctrine;

require_once __DIR__.'/OrmConfig/EntityManagerConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class OrmConfig
{
    private $defaultEntityManager;
    private $autoGenerateProxyClasses;
    private $proxyDir;
    private $proxyNamespace;
    private $entityManagers;
    private $resolveTargetEntities;
    
    /**
     * @default NULL
     */
    public function setDefaultEntityManager( $value): self
    {
        $this->defaultEntityManager = $value;
    
        return $this;
    }
    
    /**
     * Auto generate mode possible values are: "NEVER", "ALWAYS", "FILE_NOT_EXISTS", "EVAL"
     * @default false
     */
    public function setAutoGenerateProxyClasses( $value): self
    {
        $this->autoGenerateProxyClasses = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/doctrine/orm/Proxies'
     */
    public function setProxyDir( $value): self
    {
        $this->proxyDir = $value;
    
        return $this;
    }
    
    /**
     * @default 'Proxies'
     */
    public function setProxyNamespace( $value): self
    {
        $this->proxyNamespace = $value;
    
        return $this;
    }
    
    public function addEntityManager(string $name, array $value = []): \Config\Doctrine\OrmConfig\EntityManagerConfig
    {
        return $this->entityManagers[$name] = new \Config\Doctrine\OrmConfig\EntityManagerConfig($value);
    }
    
    public function addResolveTargetEntity(string $interface,  $value): self
    {
        $this->resolveTargetEntities[$interface] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["default_entity_manager"])) {
            $this->defaultEntityManager = $value["default_entity_manager"];
            unset($value["default_entity_manager"]);
        }
    
        if (isset($value["auto_generate_proxy_classes"])) {
            $this->autoGenerateProxyClasses = $value["auto_generate_proxy_classes"];
            unset($value["auto_generate_proxy_classes"]);
        }
    
        if (isset($value["proxy_dir"])) {
            $this->proxyDir = $value["proxy_dir"];
            unset($value["proxy_dir"]);
        }
    
        if (isset($value["proxy_namespace"])) {
            $this->proxyNamespace = $value["proxy_namespace"];
            unset($value["proxy_namespace"]);
        }
    
        if (isset($value["entity_managers"])) {
            $this->entityManagers = array_map(function($v) { return new EntityManagerConfig($v); }, $value["entity_managers"]);;
            unset($value["entity_managers"]);
        }
    
        if (isset($value["resolve_target_entities"])) {
            $this->resolveTargetEntities = $value["resolve_target_entities"];
            unset($value["resolve_target_entities"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultEntityManager) {
            $output["default_entity_manager"] = $this->defaultEntityManager;
        }
        if (null !== $this->autoGenerateProxyClasses) {
            $output["auto_generate_proxy_classes"] = $this->autoGenerateProxyClasses;
        }
        if (null !== $this->proxyDir) {
            $output["proxy_dir"] = $this->proxyDir;
        }
        if (null !== $this->proxyNamespace) {
            $output["proxy_namespace"] = $this->proxyNamespace;
        }
        if (null !== $this->entityManagers) {
            $output["entity_managers"] = array_map(function($v) { return $v->toArray(); }, $this->entityManagers);
        }
        if (null !== $this->resolveTargetEntities) {
            $output["resolve_target_entities"] = $this->resolveTargetEntities;
        }
    
        return $output;
    }
    

}
