<?php

namespace Config\Security;

require_once __DIR__.'/AccessDecisionManagerConfig.php';
require_once __DIR__.'/EncoderConfig.php';
require_once __DIR__.'/PasswordHasherConfig.php';
require_once __DIR__.'/ProviderConfig.php';
require_once __DIR__.'/FirewallConfig.php';
require_once __DIR__.'/AccessControlConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SecurityConfig
{
    private $accessDeniedUrl;
    private $sessionFixationStrategy;
    private $hideUserNotFound;
    private $alwaysAuthenticateBeforeGranting;
    private $eraseCredentials;
    private $enableAuthenticatorManager;
    private $accessDecisionManager;
    private $encoders;
    private $passwordHashers;
    private $providers;
    private $firewalls;
    private $accessControl;
    private $roleHierarchy;
    
    /**
     * @example /foo/error403
     * @default NULL
     */
    public function setAccessDeniedUrl( $value): self
    {
        $this->accessDeniedUrl = $value;
    
        return $this;
    }
    
    /**
     * @default 'migrate'
     * @param 'none'|'migrate'|'invalidate' $value
     */
    public function setSessionFixationStrategy(string $value): self
    {
        $this->sessionFixationStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setHideUserNotFound(bool $value): self
    {
        $this->hideUserNotFound = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setAlwaysAuthenticateBeforeGranting(bool $value): self
    {
        $this->alwaysAuthenticateBeforeGranting = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setEraseCredentials(bool $value): self
    {
        $this->eraseCredentials = $value;
    
        return $this;
    }
    
    /**
     * Enables the new Symfony Security system based on Authenticators, all used authenticators must support this before enabling this.
     * @default false
     */
    public function setEnableAuthenticatorManager(bool $value): self
    {
        $this->enableAuthenticatorManager = $value;
    
        return $this;
    }
    
    public function addAccessDecisionManager(array $value = []): \Config\Security\AccessDecisionManagerConfig
    {
        return $this->accessDecisionManager = new \Config\Security\AccessDecisionManagerConfig($value);
    }
    
    public function addEncoder(string $class, array $value = []): \Config\Security\EncoderConfig
    {
        return $this->encoders[$class] = new \Config\Security\EncoderConfig($value);
    }
    
    public function addPasswordHasher(string $class, array $value = []): \Config\Security\PasswordHasherConfig
    {
        return $this->passwordHashers[$class] = new \Config\Security\PasswordHasherConfig($value);
    }
    
    public function addProvider(string $name, array $value = []): \Config\Security\ProviderConfig
    {
        return $this->providers[$name] = new \Config\Security\ProviderConfig($value);
    }
    
    public function addFirewall(string $name, array $value = []): \Config\Security\FirewallConfig
    {
        return $this->firewalls[$name] = new \Config\Security\FirewallConfig($value);
    }
    
    public function addAccessControl(array $value = []): \Config\Security\AccessControlConfig
    {
        return $this->accessControl[] = new \Config\Security\AccessControlConfig($value);
    }
    
    public function addRoleHierarchy(string $id, array $value): self
    {
        $this->roleHierarchy[$id] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["access_denied_url"])) {
            $this->accessDeniedUrl = $value["access_denied_url"];
            unset($value["access_denied_url"]);
        }
    
        if (isset($value["session_fixation_strategy"])) {
            $this->sessionFixationStrategy = $value["session_fixation_strategy"];
            unset($value["session_fixation_strategy"]);
        }
    
        if (isset($value["hide_user_not_found"])) {
            $this->hideUserNotFound = $value["hide_user_not_found"];
            unset($value["hide_user_not_found"]);
        }
    
        if (isset($value["always_authenticate_before_granting"])) {
            $this->alwaysAuthenticateBeforeGranting = $value["always_authenticate_before_granting"];
            unset($value["always_authenticate_before_granting"]);
        }
    
        if (isset($value["erase_credentials"])) {
            $this->eraseCredentials = $value["erase_credentials"];
            unset($value["erase_credentials"]);
        }
    
        if (isset($value["enable_authenticator_manager"])) {
            $this->enableAuthenticatorManager = $value["enable_authenticator_manager"];
            unset($value["enable_authenticator_manager"]);
        }
    
        if (isset($value["access_decision_manager"])) {
            $this->accessDecisionManager = new AccessDecisionManagerConfig($value["access_decision_manager"]);
            unset($value["access_decision_manager"]);
        }
    
        if (isset($value["encoders"])) {
            $this->encoders = array_map(function($v) { return new EncoderConfig($v); }, $value["encoders"]);;
            unset($value["encoders"]);
        }
    
        if (isset($value["password_hashers"])) {
            $this->passwordHashers = array_map(function($v) { return new PasswordHasherConfig($v); }, $value["password_hashers"]);;
            unset($value["password_hashers"]);
        }
    
        if (isset($value["providers"])) {
            $this->providers = array_map(function($v) { return new ProviderConfig($v); }, $value["providers"]);;
            unset($value["providers"]);
        }
    
        if (isset($value["firewalls"])) {
            $this->firewalls = array_map(function($v) { return new FirewallConfig($v); }, $value["firewalls"]);;
            unset($value["firewalls"]);
        }
    
        if (isset($value["access_control"])) {
            $this->accessControl = array_map(function($v) { return new AccessControlConfig($v); }, $value["access_control"]);;
            unset($value["access_control"]);
        }
    
        if (isset($value["role_hierarchy"])) {
            $this->roleHierarchy = $value["role_hierarchy"];
            unset($value["role_hierarchy"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->accessDeniedUrl) {
            $output["access_denied_url"] = $this->accessDeniedUrl;
        }
        if (null !== $this->sessionFixationStrategy) {
            $output["session_fixation_strategy"] = $this->sessionFixationStrategy;
        }
        if (null !== $this->hideUserNotFound) {
            $output["hide_user_not_found"] = $this->hideUserNotFound;
        }
        if (null !== $this->alwaysAuthenticateBeforeGranting) {
            $output["always_authenticate_before_granting"] = $this->alwaysAuthenticateBeforeGranting;
        }
        if (null !== $this->eraseCredentials) {
            $output["erase_credentials"] = $this->eraseCredentials;
        }
        if (null !== $this->enableAuthenticatorManager) {
            $output["enable_authenticator_manager"] = $this->enableAuthenticatorManager;
        }
        if (null !== $this->accessDecisionManager) {
            $output["access_decision_manager"] = $this->accessDecisionManager->toArray();
        }
        if (null !== $this->encoders) {
            $output["encoders"] = array_map(function($v) { return $v->toArray(); }, $this->encoders);
        }
        if (null !== $this->passwordHashers) {
            $output["password_hashers"] = array_map(function($v) { return $v->toArray(); }, $this->passwordHashers);
        }
        if (null !== $this->providers) {
            $output["providers"] = array_map(function($v) { return $v->toArray(); }, $this->providers);
        }
        if (null !== $this->firewalls) {
            $output["firewalls"] = array_map(function($v) { return $v->toArray(); }, $this->firewalls);
        }
        if (null !== $this->accessControl) {
            $output["access_control"] = array_map(function($v) { return $v->toArray(); }, $this->accessControl);
        }
        if (null !== $this->roleHierarchy) {
            $output["role_hierarchy"] = $this->roleHierarchy;
        }
    
        return $output;
    }
    

}
