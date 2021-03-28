<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class X509Config
{
    private $provider;
    private $user;
    private $credentials;
    
    /**
     * @default NULL
     */
    public function setProvider( $value): self
    {
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * @default 'SSL_CLIENT_S_DN_Email'
     */
    public function setUser( $value): self
    {
        $this->user = $value;
    
        return $this;
    }
    
    /**
     * @default 'SSL_CLIENT_S_DN'
     */
    public function setCredentials( $value): self
    {
        $this->credentials = $value;
    
        return $this;
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
    
        if (isset($value["credentials"])) {
            $this->credentials = $value["credentials"];
            unset($value["credentials"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
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
        if (null !== $this->credentials) {
            $output["credentials"] = $this->credentials;
        }
    
        return $output;
    }
    

}
