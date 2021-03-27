<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HttpBasicConfig
{
    private $provider;
    private $realm;
    
    /**
     * @default NULL
     */
    public function setProvider( $value): self
    {
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * @default 'Secured Area'
     */
    public function setRealm( $value): self
    {
        $this->realm = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->provider) {
            $output["provider"] = $this->provider;
        }
        if (null !== $this->realm) {
            $output["realm"] = $this->realm;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["provider"])) {
            $this->provider = $value["provider"];
            unset($value["provider"]);
        }
    
        if (isset($value["realm"])) {
            $this->realm = $value["realm"];
            unset($value["realm"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
