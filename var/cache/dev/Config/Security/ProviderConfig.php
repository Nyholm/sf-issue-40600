<?php

namespace Config\Security;

require_once __DIR__.'/ProviderConfig/ChainConfig.php';
require_once __DIR__.'/ProviderConfig/MemoryConfig.php';
require_once __DIR__.'/ProviderConfig/LdapConfig.php';
require_once __DIR__.'/ProviderConfig/EntityConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ProviderConfig
{
    private $id;
    private $chain;
    private $memory;
    private $ldap;
    private $entity;
    
    /**
     * @default NULL
     */
    public function setId( $value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    public function addChain(array $value = []): \Config\Security\ProviderConfig\ChainConfig
    {
        return $this->chain = new \Config\Security\ProviderConfig\ChainConfig($value);
    }
    
    public function addMemory(array $value = []): \Config\Security\ProviderConfig\MemoryConfig
    {
        return $this->memory = new \Config\Security\ProviderConfig\MemoryConfig($value);
    }
    
    public function addLdap(array $value = []): \Config\Security\ProviderConfig\LdapConfig
    {
        return $this->ldap = new \Config\Security\ProviderConfig\LdapConfig($value);
    }
    
    public function addEntity(array $value = []): \Config\Security\ProviderConfig\EntityConfig
    {
        return $this->entity = new \Config\Security\ProviderConfig\EntityConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["id"])) {
            $this->id = $value["id"];
            unset($value["id"]);
        }
    
        if (isset($value["chain"])) {
            $this->chain = new ChainConfig($value["chain"]);
            unset($value["chain"]);
        }
    
        if (isset($value["memory"])) {
            $this->memory = new MemoryConfig($value["memory"]);
            unset($value["memory"]);
        }
    
        if (isset($value["ldap"])) {
            $this->ldap = new LdapConfig($value["ldap"]);
            unset($value["ldap"]);
        }
    
        if (isset($value["entity"])) {
            $this->entity = new EntityConfig($value["entity"]);
            unset($value["entity"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->id) {
            $output["id"] = $this->id;
        }
        if (null !== $this->chain) {
            $output["chain"] = $this->chain->toArray();
        }
        if (null !== $this->memory) {
            $output["memory"] = $this->memory->toArray();
        }
        if (null !== $this->ldap) {
            $output["ldap"] = $this->ldap->toArray();
        }
        if (null !== $this->entity) {
            $output["entity"] = $this->entity->toArray();
        }
    
        return $output;
    }
    

}
