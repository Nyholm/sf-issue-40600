<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HttpBasicLdapConfig
{
    private $provider;
    private $realm;
    private $service;
    private $dnString;
    private $queryString;
    private $searchDn;
    private $searchPassword;
    
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
    
    /**
     * @default 'ldap'
     */
    public function setService( $value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    /**
     * @default '{username}'
     */
    public function setDnString( $value): self
    {
        $this->dnString = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setQueryString( $value): self
    {
        $this->queryString = $value;
    
        return $this;
    }
    
    /**
     */
    public function setSearchDn( $value): self
    {
        $this->searchDn = $value;
    
        return $this;
    }
    
    /**
     */
    public function setSearchPassword( $value): self
    {
        $this->searchPassword = $value;
    
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
        if (null !== $this->service) {
            $output["service"] = $this->service;
        }
        if (null !== $this->dnString) {
            $output["dn_string"] = $this->dnString;
        }
        if (null !== $this->queryString) {
            $output["query_string"] = $this->queryString;
        }
        if (null !== $this->searchDn) {
            $output["search_dn"] = $this->searchDn;
        }
        if (null !== $this->searchPassword) {
            $output["search_password"] = $this->searchPassword;
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
    
        if (isset($value["service"])) {
            $this->service = $value["service"];
            unset($value["service"]);
        }
    
        if (isset($value["dn_string"])) {
            $this->dnString = $value["dn_string"];
            unset($value["dn_string"]);
        }
    
        if (isset($value["query_string"])) {
            $this->queryString = $value["query_string"];
            unset($value["query_string"]);
        }
    
        if (isset($value["search_dn"])) {
            $this->searchDn = $value["search_dn"];
            unset($value["search_dn"]);
        }
    
        if (isset($value["search_password"])) {
            $this->searchPassword = $value["search_password"];
            unset($value["search_password"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
