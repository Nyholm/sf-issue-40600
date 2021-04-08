<?php

namespace Symfony\Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RememberMeConfig 
{
    private $secret;
    private $service;
    private $tokenProvider;
    private $userProviders;
    private $catchExceptions;
    private $name;
    private $lifetime;
    private $path;
    private $domain;
    private $secure;
    private $httponly;
    private $samesite;
    private $alwaysRememberMe;
    private $rememberMeParameter;
    
    /**
     * @default null
     */
    public function secret($value): self
    {
        $this->secret = $value;
    
        return $this;
    }
    
    /**
     * @default null
     */
    public function service($value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    /**
     * @default null
     */
    public function tokenProvider($value): self
    {
        $this->tokenProvider = $value;
    
        return $this;
    }
    
    public function userProvider($value): self
    {
        $this->userProviders = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function catchExceptions(bool $value): self
    {
        $this->catchExceptions = $value;
    
        return $this;
    }
    
    /**
     * @default 'REMEMBERME'
     */
    public function name($value): self
    {
        $this->name = $value;
    
        return $this;
    }
    
    /**
     * @default 31536000
     */
    public function lifetime(int $value): self
    {
        $this->lifetime = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     */
    public function path($value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default null
     */
    public function domain($value): self
    {
        $this->domain = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param true|false|'auto' $value
     */
    public function secure($value): self
    {
        $this->secure = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function httponly(bool $value): self
    {
        $this->httponly = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param NULL|'lax'|'strict'|'none' $value
     */
    public function samesite($value): self
    {
        $this->samesite = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function alwaysRememberMe(bool $value): self
    {
        $this->alwaysRememberMe = $value;
    
        return $this;
    }
    
    /**
     * @default '_remember_me'
     */
    public function rememberMeParameter($value): self
    {
        $this->rememberMeParameter = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["secret"])) {
            $this->secret = $value["secret"];
            unset($value["secret"]);
        }
    
        if (isset($value["service"])) {
            $this->service = $value["service"];
            unset($value["service"]);
        }
    
        if (isset($value["token_provider"])) {
            $this->tokenProvider = $value["token_provider"];
            unset($value["token_provider"]);
        }
    
        if (isset($value["user_providers"])) {
            $this->userProviders = $value["user_providers"];
            unset($value["user_providers"]);
        }
    
        if (isset($value["catch_exceptions"])) {
            $this->catchExceptions = $value["catch_exceptions"];
            unset($value["catch_exceptions"]);
        }
    
        if (isset($value["name"])) {
            $this->name = $value["name"];
            unset($value["name"]);
        }
    
        if (isset($value["lifetime"])) {
            $this->lifetime = $value["lifetime"];
            unset($value["lifetime"]);
        }
    
        if (isset($value["path"])) {
            $this->path = $value["path"];
            unset($value["path"]);
        }
    
        if (isset($value["domain"])) {
            $this->domain = $value["domain"];
            unset($value["domain"]);
        }
    
        if (isset($value["secure"])) {
            $this->secure = $value["secure"];
            unset($value["secure"]);
        }
    
        if (isset($value["httponly"])) {
            $this->httponly = $value["httponly"];
            unset($value["httponly"]);
        }
    
        if (isset($value["samesite"])) {
            $this->samesite = $value["samesite"];
            unset($value["samesite"]);
        }
    
        if (isset($value["always_remember_me"])) {
            $this->alwaysRememberMe = $value["always_remember_me"];
            unset($value["always_remember_me"]);
        }
    
        if (isset($value["remember_me_parameter"])) {
            $this->rememberMeParameter = $value["remember_me_parameter"];
            unset($value["remember_me_parameter"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->secret) {
            $output["secret"] = $this->secret;
        }
        if (null !== $this->service) {
            $output["service"] = $this->service;
        }
        if (null !== $this->tokenProvider) {
            $output["token_provider"] = $this->tokenProvider;
        }
        if (null !== $this->userProviders) {
            $output["user_providers"] = $this->userProviders;
        }
        if (null !== $this->catchExceptions) {
            $output["catch_exceptions"] = $this->catchExceptions;
        }
        if (null !== $this->name) {
            $output["name"] = $this->name;
        }
        if (null !== $this->lifetime) {
            $output["lifetime"] = $this->lifetime;
        }
        if (null !== $this->path) {
            $output["path"] = $this->path;
        }
        if (null !== $this->domain) {
            $output["domain"] = $this->domain;
        }
        if (null !== $this->secure) {
            $output["secure"] = $this->secure;
        }
        if (null !== $this->httponly) {
            $output["httponly"] = $this->httponly;
        }
        if (null !== $this->samesite) {
            $output["samesite"] = $this->samesite;
        }
        if (null !== $this->alwaysRememberMe) {
            $output["always_remember_me"] = $this->alwaysRememberMe;
        }
        if (null !== $this->rememberMeParameter) {
            $output["remember_me_parameter"] = $this->rememberMeParameter;
        }
    
        return $output;
    }
    

}
