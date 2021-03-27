<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RemoteUserConfig
{
    private $provider;
    private $user;
    
    /**
     * @default NULL
     */
    public function setProvider( $value): self
    {
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * @default 'REMOTE_USER'
     */
    public function setUser( $value): self
    {
        $this->user = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->provider) {
            $output["provider"] = $this->provider;
        }
        if (null !== $this->user) {
            $output["user"] = $this->user;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["provider"])) {
            $this->provider = $value["provider"];
            unset($value["provider"]);
        }
    
        if (isset($value["user"])) {
            $this->user = $value["user"];
            unset($value["user"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
