<?php

namespace Config\Security\ProviderConfig;

require_once __DIR__.'/MemoryConfig/UserConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MemoryConfig
{
    private $users;
    
    public function addUser(string $name, array $value = []): \Config\Security\ProviderConfig\MemoryConfig\UserConfig
    {
        return $this->users[$name] = new \Config\Security\ProviderConfig\MemoryConfig\UserConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->users) {
            $output["users"] = array_map(function($v) { return $v->toArray(); }, $this->users);
        }
    
        return $output;
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
    

}
