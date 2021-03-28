<?php

namespace Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LoginLinkConfig
{
    private $checkRoute;
    private $checkPostOnly;
    private $signatureProperties;
    private $lifetime;
    private $maxUses;
    private $usedLinkCache;
    private $successHandler;
    private $failureHandler;
    private $provider;
    private $alwaysUseDefaultTargetPath;
    private $defaultTargetPath;
    private $loginPath;
    private $targetPathParameter;
    private $useReferer;
    private $failurePath;
    private $failureForward;
    private $failurePathParameter;
    
    /**
     * Route that will validate the login link - e.g. "app_login_link_verify".
     * @default NULL
     */
    public function setCheckRoute( $value): self
    {
        $this->checkRoute = $value;
    
        return $this;
    }
    
    /**
     * If true, only HTTP POST requests to "check_route" will be handled by the authenticator.
     * @default false
     */
    public function setCheckPostOnly( $value): self
    {
        $this->checkPostOnly = $value;
    
        return $this;
    }
    
    public function addSignatureProperty( $value): self
    {
        $this->signatureProperties[] = $value;
    
        return $this;
    }
    
    /**
     * The lifetime of the login link in seconds.
     * @default 600
     */
    public function setLifetime(int $value): self
    {
        $this->lifetime = $value;
    
        return $this;
    }
    
    /**
     * Max number of times a login link can be used - null means unlimited within lifetime.
     * @default NULL
     */
    public function setMaxUses(int $value): self
    {
        $this->maxUses = $value;
    
        return $this;
    }
    
    /**
     * Cache service id used to expired links of max_uses is set.
     * @default NULL
     */
    public function setUsedLinkCache( $value): self
    {
        $this->usedLinkCache = $value;
    
        return $this;
    }
    
    /**
     * A service id that implements Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface.
     * @default NULL
     */
    public function setSuccessHandler( $value): self
    {
        $this->successHandler = $value;
    
        return $this;
    }
    
    /**
     * A service id that implements Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface.
     * @default NULL
     */
    public function setFailureHandler( $value): self
    {
        $this->failureHandler = $value;
    
        return $this;
    }
    
    /**
     * The user provider to load users from.
     * @default NULL
     */
    public function setProvider( $value): self
    {
        $this->provider = $value;
    
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
     * @default '/login'
     */
    public function setLoginPath( $value): self
    {
        $this->loginPath = $value;
    
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
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["check_route"])) {
            $this->checkRoute = $value["check_route"];
            unset($value["check_route"]);
        }
    
        if (isset($value["check_post_only"])) {
            $this->checkPostOnly = $value["check_post_only"];
            unset($value["check_post_only"]);
        }
    
        if (isset($value["signature_properties"])) {
            $this->signatureProperties = $value["signature_properties"];
            unset($value["signature_properties"]);
        }
    
        if (isset($value["lifetime"])) {
            $this->lifetime = $value["lifetime"];
            unset($value["lifetime"]);
        }
    
        if (isset($value["max_uses"])) {
            $this->maxUses = $value["max_uses"];
            unset($value["max_uses"]);
        }
    
        if (isset($value["used_link_cache"])) {
            $this->usedLinkCache = $value["used_link_cache"];
            unset($value["used_link_cache"]);
        }
    
        if (isset($value["success_handler"])) {
            $this->successHandler = $value["success_handler"];
            unset($value["success_handler"]);
        }
    
        if (isset($value["failure_handler"])) {
            $this->failureHandler = $value["failure_handler"];
            unset($value["failure_handler"]);
        }
    
        if (isset($value["provider"])) {
            $this->provider = $value["provider"];
            unset($value["provider"]);
        }
    
        if (isset($value["always_use_default_target_path"])) {
            $this->alwaysUseDefaultTargetPath = $value["always_use_default_target_path"];
            unset($value["always_use_default_target_path"]);
        }
    
        if (isset($value["default_target_path"])) {
            $this->defaultTargetPath = $value["default_target_path"];
            unset($value["default_target_path"]);
        }
    
        if (isset($value["login_path"])) {
            $this->loginPath = $value["login_path"];
            unset($value["login_path"]);
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
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->checkRoute) {
            $output["check_route"] = $this->checkRoute;
        }
        if (null !== $this->checkPostOnly) {
            $output["check_post_only"] = $this->checkPostOnly;
        }
        if (null !== $this->signatureProperties) {
            $output["signature_properties"] = $this->signatureProperties;
        }
        if (null !== $this->lifetime) {
            $output["lifetime"] = $this->lifetime;
        }
        if (null !== $this->maxUses) {
            $output["max_uses"] = $this->maxUses;
        }
        if (null !== $this->usedLinkCache) {
            $output["used_link_cache"] = $this->usedLinkCache;
        }
        if (null !== $this->successHandler) {
            $output["success_handler"] = $this->successHandler;
        }
        if (null !== $this->failureHandler) {
            $output["failure_handler"] = $this->failureHandler;
        }
        if (null !== $this->provider) {
            $output["provider"] = $this->provider;
        }
        if (null !== $this->alwaysUseDefaultTargetPath) {
            $output["always_use_default_target_path"] = $this->alwaysUseDefaultTargetPath;
        }
        if (null !== $this->defaultTargetPath) {
            $output["default_target_path"] = $this->defaultTargetPath;
        }
        if (null !== $this->loginPath) {
            $output["login_path"] = $this->loginPath;
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
    
        return $output;
    }
    

}
