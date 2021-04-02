<?php

namespace Symfony\Config\Security;

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
    public function id( $value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    public function chain(array $value = []): \Symfony\Config\Security\ProviderConfig\ChainConfig
    {
        if (null === $this->chain) {
            $this->chain = new \Symfony\Config\Security\ProviderConfig\ChainConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "chain()" has already been initialized. You cannot pass values the second time you call chain().'));
        }
    
        return $this->chain;
    }
    
    public function memory(array $value = []): \Symfony\Config\Security\ProviderConfig\MemoryConfig
    {
        if (null === $this->memory) {
            $this->memory = new \Symfony\Config\Security\ProviderConfig\MemoryConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "memory()" has already been initialized. You cannot pass values the second time you call memory().'));
        }
    
        return $this->memory;
    }
    
    public function ldap(array $value = []): \Symfony\Config\Security\ProviderConfig\LdapConfig
    {
        if (null === $this->ldap) {
            $this->ldap = new \Symfony\Config\Security\ProviderConfig\LdapConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "ldap()" has already been initialized. You cannot pass values the second time you call ldap().'));
        }
    
        return $this->ldap;
    }
    
    public function entity(array $value = []): \Symfony\Config\Security\ProviderConfig\EntityConfig
    {
        if (null === $this->entity) {
            $this->entity = new \Symfony\Config\Security\ProviderConfig\EntityConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "entity()" has already been initialized. You cannot pass values the second time you call entity().'));
        }
    
        return $this->entity;
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
