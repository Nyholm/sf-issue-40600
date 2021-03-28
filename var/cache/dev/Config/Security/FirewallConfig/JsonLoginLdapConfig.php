<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class JsonLoginLdapConfig
{
    private $provider;
    private $rememberMe;
    private $successHandler;
    private $failureHandler;
    private $checkPath;
    private $useForward;
    private $requirePreviousSession;
    private $loginPath;
    private $usernamePath;
    private $passwordPath;
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
     * @default true
     */
    public function setRememberMe(bool $value): self
    {
        $this->rememberMe = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setSuccessHandler( $value): self
    {
        $this->successHandler = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setFailureHandler( $value): self
    {
        $this->failureHandler = $value;
    
        return $this;
    }
    
    /**
     * @default '/login_check'
     */
    public function setCheckPath( $value): self
    {
        $this->checkPath = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setUseForward(bool $value): self
    {
        $this->useForward = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setRequirePreviousSession(bool $value): self
    {
        $this->requirePreviousSession = $value;
    
        return $this;
    }
    
    /**
     * @default '/login'
     */
    public function setLoginPath( $value): self
    {
        $this->loginPath = $value;
    
        return $this;
    }
    
    /**
     * @default 'username'
     */
    public function setUsernamePath( $value): self
    {
        $this->usernamePath = $value;
    
        return $this;
    }
    
    /**
     * @default 'password'
     */
    public function setPasswordPath( $value): self
    {
        $this->passwordPath = $value;
    
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
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["provider"])) {
            $this->provider = $value["provider"];
            unset($value["provider"]);
        }
    
        if (isset($value["remember_me"])) {
            $this->rememberMe = $value["remember_me"];
            unset($value["remember_me"]);
        }
    
        if (isset($value["success_handler"])) {
            $this->successHandler = $value["success_handler"];
            unset($value["success_handler"]);
        }
    
        if (isset($value["failure_handler"])) {
            $this->failureHandler = $value["failure_handler"];
            unset($value["failure_handler"]);
        }
    
        if (isset($value["check_path"])) {
            $this->checkPath = $value["check_path"];
            unset($value["check_path"]);
        }
    
        if (isset($value["use_forward"])) {
            $this->useForward = $value["use_forward"];
            unset($value["use_forward"]);
        }
    
        if (isset($value["require_previous_session"])) {
            $this->requirePreviousSession = $value["require_previous_session"];
            unset($value["require_previous_session"]);
        }
    
        if (isset($value["login_path"])) {
            $this->loginPath = $value["login_path"];
            unset($value["login_path"]);
        }
    
        if (isset($value["username_path"])) {
            $this->usernamePath = $value["username_path"];
            unset($value["username_path"]);
        }
    
        if (isset($value["password_path"])) {
            $this->passwordPath = $value["password_path"];
            unset($value["password_path"]);
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
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->provider) {
            $output["provider"] = $this->provider;
        }
        if (null !== $this->rememberMe) {
            $output["remember_me"] = $this->rememberMe;
        }
        if (null !== $this->successHandler) {
            $output["success_handler"] = $this->successHandler;
        }
        if (null !== $this->failureHandler) {
            $output["failure_handler"] = $this->failureHandler;
        }
        if (null !== $this->checkPath) {
            $output["check_path"] = $this->checkPath;
        }
        if (null !== $this->useForward) {
            $output["use_forward"] = $this->useForward;
        }
        if (null !== $this->requirePreviousSession) {
            $output["require_previous_session"] = $this->requirePreviousSession;
        }
        if (null !== $this->loginPath) {
            $output["login_path"] = $this->loginPath;
        }
        if (null !== $this->usernamePath) {
            $output["username_path"] = $this->usernamePath;
        }
        if (null !== $this->passwordPath) {
            $output["password_path"] = $this->passwordPath;
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
    

}
