<?php

namespace Symfony\Config\Security\ProviderConfig;

require_once __DIR__.'/Memory/UserConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MemoryConfig 
{
    private $users;
    
    public function user(string $identifier, array $value = []): \Symfony\Config\Security\ProviderConfig\Memory\UserConfig
    {
        if (!isset($this->users[$identifier])) {
            return $this->users[$identifier] = new \Symfony\Config\Security\ProviderConfig\Memory\UserConfig($value);
        } elseif ([] === $value) {
            return $this->users[$identifier];
        } else {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "user()" has already been initialized. You cannot pass values the second time you call user().'));
        }
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["users"])) {
            $this->users = array_map(function($v) { return new UserConfig($v); }, $value["users"]);;
            unset($value["users"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->users) {
            $output["users"] = array_map(function($v) { return $v->toArray(); }, $this->users);
        }
    
        return $output;
    }
    

}
