<?php

namespace Config\Security\ProviderConfig\MemoryConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class UserConfig
{
    private $password;
    private $roles;
    
    /**
     * @default NULL
     */
    public function setPassword( $value): self
    {
        $this->password = $value;
    
        return $this;
    }
    
    public function addRoles( $value): self
    {
        $this->roles[] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["password"])) {
            $this->password = $value["password"];
            unset($value["password"]);
        }
    
        if (isset($value["roles"])) {
            $this->roles = $value["roles"];
            unset($value["roles"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->password) {
            $output["password"] = $this->password;
        }
        if (null !== $this->roles) {
            $output["roles"] = $this->roles;
        }
    
        return $output;
    }
    

}
