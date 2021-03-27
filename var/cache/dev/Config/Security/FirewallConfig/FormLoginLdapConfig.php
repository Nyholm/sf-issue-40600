<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FormLoginLdapConfig
{
    private $provider;
    private $rememberMe;
    private $successHandler;
    private $failureHandler;
    private $checkPath;
    private $useForward;
    private $requirePreviousSession;
    private $loginPath;
    private $usernameParameter;
    private $passwordParameter;
    private $csrfParameter;
    private $csrfTokenId;
    private $enableCsrf;
    private $postOnly;
    private $alwaysUseDefaultTargetPath;
    private $defaultTargetPath;
    private $targetPathParameter;
    private $useReferer;
    private $failurePath;
    private $failureForward;
    private $failurePathParameter;
    private $csrfTokenGenerator;
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
     * @default '_username'
     */
    public function setUsernameParameter( $value): self
    {
        $this->usernameParameter = $value;
    
        return $this;
    }
    
    /**
     * @default '_password'
     */
    public function setPasswordParameter( $value): self
    {
        $this->passwordParameter = $value;
    
        return $this;
    }
    
    /**
     * @default '_csrf_token'
     */
    public function setCsrfParameter( $value): self
    {
        $this->csrfParameter = $value;
    
        return $this;
    }
    
    /**
     * @default 'authenticate'
     */
    public function setCsrfTokenId( $value): self
    {
        $this->csrfTokenId = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setEnableCsrf(bool $value): self
    {
        $this->enableCsrf = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setPostOnly(bool $value): self
    {
        $this->postOnly = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setAlwaysUseDefaultTargetPath(bool $value): self
    {
        $this->alwaysUseDefaultTargetPath = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     */
    public function setDefaultTargetPath( $value): self
    {
        $this->defaultTargetPath = $value;
    
        return $this;
    }
    
    /**
     * @default '_target_path'
     */
    public function setTargetPathParameter( $value): self
    {
        $this->targetPathParameter = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setUseReferer(bool $value): self
    {
        $this->useReferer = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setFailurePath( $value): self
    {
        $this->failurePath = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setFailureForward(bool $value): self
    {
        $this->failureForward = $value;
    
        return $this;
    }
    
    /**
     * @default '_failure_path'
     */
    public function setFailurePathParameter( $value): self
    {
        $this->failurePathParameter = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setCsrfTokenGenerator( $value): self
    {
        $this->csrfTokenGenerator = $value;
    
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
        if (null !== $this->usernameParameter) {
            $output["username_parameter"] = $this->usernameParameter;
        }
        if (null !== $this->passwordParameter) {
            $output["password_parameter"] = $this->passwordParameter;
        }
        if (null !== $this->csrfParameter) {
            $output["csrf_parameter"] = $this->csrfParameter;
        }
        if (null !== $this->csrfTokenId) {
            $output["csrf_token_id"] = $this->csrfTokenId;
        }
        if (null !== $this->enableCsrf) {
            $output["enable_csrf"] = $this->enableCsrf;
        }
        if (null !== $this->postOnly) {
            $output["post_only"] = $this->postOnly;
        }
        if (null !== $this->alwaysUseDefaultTargetPath) {
            $output["always_use_default_target_path"] = $this->alwaysUseDefaultTargetPath;
        }
        if (null !== $this->defaultTargetPath) {
            $output["default_target_path"] = $this->defaultTargetPath;
        }
        if (null !== $this->targetPathParameter) {
            $output["target_path_parameter"] = $this->targetPathParameter;
        }
        if (null !== $this->useReferer) {
            $output["use_referer"] = $this->useReferer;
        }
        if (null !== $this->failurePath) {
            $output["failure_path"] = $this->failurePath;
        }
        if (null !== $this->failureForward) {
            $output["failure_forward"] = $this->failureForward;
        }
        if (null !== $this->failurePathParameter) {
            $output["failure_path_parameter"] = $this->failurePathParameter;
        }
        if (null !== $this->csrfTokenGenerator) {
            $output["csrf_token_generator"] = $this->csrfTokenGenerator;
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
    
        if (isset($value["username_parameter"])) {
            $this->usernameParameter = $value["username_parameter"];
            unset($value["username_parameter"]);
        }
    
        if (isset($value["password_parameter"])) {
            $this->passwordParameter = $value["password_parameter"];
            unset($value["password_parameter"]);
        }
    
        if (isset($value["csrf_parameter"])) {
            $this->csrfParameter = $value["csrf_parameter"];
            unset($value["csrf_parameter"]);
        }
    
        if (isset($value["csrf_token_id"])) {
            $this->csrfTokenId = $value["csrf_token_id"];
            unset($value["csrf_token_id"]);
        }
    
        if (isset($value["enable_csrf"])) {
            $this->enableCsrf = $value["enable_csrf"];
            unset($value["enable_csrf"]);
        }
    
        if (isset($value["post_only"])) {
            $this->postOnly = $value["post_only"];
            unset($value["post_only"]);
        }
    
        if (isset($value["always_use_default_target_path"])) {
            $this->alwaysUseDefaultTargetPath = $value["always_use_default_target_path"];
            unset($value["always_use_default_target_path"]);
        }
    
        if (isset($value["default_target_path"])) {
            $this->defaultTargetPath = $value["default_target_path"];
            unset($value["default_target_path"]);
        }
    
        if (isset($value["target_path_parameter"])) {
            $this->targetPathParameter = $value["target_path_parameter"];
            unset($value["target_path_parameter"]);
        }
    
        if (isset($value["use_referer"])) {
            $this->useReferer = $value["use_referer"];
            unset($value["use_referer"]);
        }
    
        if (isset($value["failure_path"])) {
            $this->failurePath = $value["failure_path"];
            unset($value["failure_path"]);
        }
    
        if (isset($value["failure_forward"])) {
            $this->failureForward = $value["failure_forward"];
            unset($value["failure_forward"]);
        }
    
        if (isset($value["failure_path_parameter"])) {
            $this->failurePathParameter = $value["failure_path_parameter"];
            unset($value["failure_path_parameter"]);
        }
    
        if (isset($value["csrf_token_generator"])) {
            $this->csrfTokenGenerator = $value["csrf_token_generator"];
            unset($value["csrf_token_generator"]);
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
