<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class GuardConfig
{
    private $provider;
    private $entryPoint;
    private $authenticators;
    
    /**
     * A key from the "providers" section of your security config, in case your user provider is different than the firewall
     * @default NULL
     */
    public function setProvider( $value): self
    {
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * A service id (of one of your authenticators) whose start() method should be called when an anonymous user hits a page that requires authentication
     * @default NULL
     */
    public function setEntryPoint( $value): self
    {
        $this->entryPoint = $value;
    
        return $this;
    }
    
    public function addAuthenticator( $value): self
    {
        $this->authenticators[] = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->provider) {
            $output["provider"] = $this->provider;
        }
        if (null !== $this->entryPoint) {
            $output["entry_point"] = $this->entryPoint;
        }
        if (null !== $this->authenticators) {
            $output["authenticators"] = $this->authenticators;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["provider"])) {
            $this->provider = $value["provider"];
            unset($value["provider"]);
        }
    
        if (isset($value["entry_point"])) {
            $this->entryPoint = $value["entry_point"];
            unset($value["entry_point"]);
        }
    
        if (isset($value["authenticators"])) {
            $this->authenticators = $value["authenticators"];
            unset($value["authenticators"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
