<?php

namespace Config\Security;

require_once __DIR__.'/FirewallConfig/LogoutConfig.php';
require_once __DIR__.'/FirewallConfig/SwitchUserConfig.php';
require_once __DIR__.'/FirewallConfig/X509Config.php';
require_once __DIR__.'/FirewallConfig/RemoteUserConfig.php';
require_once __DIR__.'/FirewallConfig/GuardConfig.php';
require_once __DIR__.'/FirewallConfig/LoginThrottlingConfig.php';
require_once __DIR__.'/FirewallConfig/FormLoginConfig.php';
require_once __DIR__.'/FirewallConfig/FormLoginLdapConfig.php';
require_once __DIR__.'/FirewallConfig/JsonLoginConfig.php';
require_once __DIR__.'/FirewallConfig/JsonLoginLdapConfig.php';
require_once __DIR__.'/FirewallConfig/LoginLinkConfig.php';
require_once __DIR__.'/FirewallConfig/HttpBasicConfig.php';
require_once __DIR__.'/FirewallConfig/HttpBasicLdapConfig.php';
require_once __DIR__.'/FirewallConfig/RememberMeConfig.php';
require_once __DIR__.'/FirewallConfig/AnonymousConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FirewallConfig
{
    private $pattern;
    private $host;
    private $methods;
    private $security;
    private $userChecker;
    private $requestMatcher;
    private $accessDeniedUrl;
    private $accessDeniedHandler;
    private $entryPoint;
    private $provider;
    private $stateless;
    private $lazy;
    private $context;
    private $logout;
    private $switchUser;
    private $x509;
    private $remoteUser;
    private $guard;
    private $customAuthenticators;
    private $loginThrottling;
    private $formLogin;
    private $formLoginLdap;
    private $jsonLogin;
    private $jsonLoginLdap;
    private $loginLink;
    private $httpBasic;
    private $httpBasicLdap;
    private $rememberMe;
    private $anonymous;
    
    /**
     * @default NULL
     */
    public function setPattern( $value): self
    {
        $this->pattern = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setHost( $value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    public function addMethods( $value): self
    {
        $this->methods[] = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setSecurity(bool $value): self
    {
        $this->security = $value;
    
        return $this;
    }
    
    /**
     * The UserChecker to use when authenticating users in this firewall.
     * @default 'security.user_checker'
     */
    public function setUserChecker( $value): self
    {
        $this->userChecker = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setRequestMatcher( $value): self
    {
        $this->requestMatcher = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setAccessDeniedUrl( $value): self
    {
        $this->accessDeniedUrl = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setAccessDeniedHandler( $value): self
    {
        $this->accessDeniedHandler = $value;
    
        return $this;
    }
    
    /**
     * An enabled authenticator name or a service id that implements "Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface"
     * @default NULL
     */
    public function setEntryPoint( $value): self
    {
        $this->entryPoint = $value;
    
        return $this;
    }
    
    /**
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
    public function setStateless(bool $value): self
    {
        $this->stateless = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setLazy(bool $value): self
    {
        $this->lazy = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setContext( $value): self
    {
        $this->context = $value;
    
        return $this;
    }
    
    public function addLogout(array $value = []): \Config\Security\FirewallConfig\LogoutConfig
    {
        return $this->logout = new \Config\Security\FirewallConfig\LogoutConfig($value);
    }
    
    public function addSwitchUser(array $value = []): \Config\Security\FirewallConfig\SwitchUserConfig
    {
        return $this->switchUser = new \Config\Security\FirewallConfig\SwitchUserConfig($value);
    }
    
    public function addX509(array $value = []): \Config\Security\FirewallConfig\X509Config
    {
        return $this->x509 = new \Config\Security\FirewallConfig\X509Config($value);
    }
    
    public function addRemoteUser(array $value = []): \Config\Security\FirewallConfig\RemoteUserConfig
    {
        return $this->remoteUser = new \Config\Security\FirewallConfig\RemoteUserConfig($value);
    }
    
    public function addGuard(array $value = []): \Config\Security\FirewallConfig\GuardConfig
    {
        return $this->guard = new \Config\Security\FirewallConfig\GuardConfig($value);
    }
    
    public function addCustomAuthenticator( $value): self
    {
        $this->customAuthenticators[] = $value;
    
        return $this;
    }
    
    public function addLoginThrottling(array $value = []): \Config\Security\FirewallConfig\LoginThrottlingConfig
    {
        return $this->loginThrottling = new \Config\Security\FirewallConfig\LoginThrottlingConfig($value);
    }
    
    public function addFormLogin(array $value = []): \Config\Security\FirewallConfig\FormLoginConfig
    {
        return $this->formLogin = new \Config\Security\FirewallConfig\FormLoginConfig($value);
    }
    
    public function addFormLoginLdap(array $value = []): \Config\Security\FirewallConfig\FormLoginLdapConfig
    {
        return $this->formLoginLdap = new \Config\Security\FirewallConfig\FormLoginLdapConfig($value);
    }
    
    public function addJsonLogin(array $value = []): \Config\Security\FirewallConfig\JsonLoginConfig
    {
        return $this->jsonLogin = new \Config\Security\FirewallConfig\JsonLoginConfig($value);
    }
    
    public function addJsonLoginLdap(array $value = []): \Config\Security\FirewallConfig\JsonLoginLdapConfig
    {
        return $this->jsonLoginLdap = new \Config\Security\FirewallConfig\JsonLoginLdapConfig($value);
    }
    
    public function addLoginLink(array $value = []): \Config\Security\FirewallConfig\LoginLinkConfig
    {
        return $this->loginLink = new \Config\Security\FirewallConfig\LoginLinkConfig($value);
    }
    
    public function addHttpBasic(array $value = []): \Config\Security\FirewallConfig\HttpBasicConfig
    {
        return $this->httpBasic = new \Config\Security\FirewallConfig\HttpBasicConfig($value);
    }
    
    public function addHttpBasicLdap(array $value = []): \Config\Security\FirewallConfig\HttpBasicLdapConfig
    {
        return $this->httpBasicLdap = new \Config\Security\FirewallConfig\HttpBasicLdapConfig($value);
    }
    
    public function addRememberMe(array $value = []): \Config\Security\FirewallConfig\RememberMeConfig
    {
        return $this->rememberMe = new \Config\Security\FirewallConfig\RememberMeConfig($value);
    }
    
    public function addAnonymous(array $value = []): \Config\Security\FirewallConfig\AnonymousConfig
    {
        return $this->anonymous = new \Config\Security\FirewallConfig\AnonymousConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["pattern"])) {
            $this->pattern = $value["pattern"];
            unset($value["pattern"]);
        }
    
        if (isset($value["host"])) {
            $this->host = $value["host"];
            unset($value["host"]);
        }
    
        if (isset($value["methods"])) {
            $this->methods = $value["methods"];
            unset($value["methods"]);
        }
    
        if (isset($value["security"])) {
            $this->security = $value["security"];
            unset($value["security"]);
        }
    
        if (isset($value["user_checker"])) {
            $this->userChecker = $value["user_checker"];
            unset($value["user_checker"]);
        }
    
        if (isset($value["request_matcher"])) {
            $this->requestMatcher = $value["request_matcher"];
            unset($value["request_matcher"]);
        }
    
        if (isset($value["access_denied_url"])) {
            $this->accessDeniedUrl = $value["access_denied_url"];
            unset($value["access_denied_url"]);
        }
    
        if (isset($value["access_denied_handler"])) {
            $this->accessDeniedHandler = $value["access_denied_handler"];
            unset($value["access_denied_handler"]);
        }
    
        if (isset($value["entry_point"])) {
            $this->entryPoint = $value["entry_point"];
            unset($value["entry_point"]);
        }
    
        if (isset($value["provider"])) {
            $this->provider = $value["provider"];
            unset($value["provider"]);
        }
    
        if (isset($value["stateless"])) {
            $this->stateless = $value["stateless"];
            unset($value["stateless"]);
        }
    
        if (isset($value["lazy"])) {
            $this->lazy = $value["lazy"];
            unset($value["lazy"]);
        }
    
        if (isset($value["context"])) {
            $this->context = $value["context"];
            unset($value["context"]);
        }
    
        if (isset($value["logout"])) {
            $this->logout = new LogoutConfig($value["logout"]);
            unset($value["logout"]);
        }
    
        if (isset($value["switch_user"])) {
            $this->switchUser = new SwitchUserConfig($value["switch_user"]);
            unset($value["switch_user"]);
        }
    
        if (isset($value["x509"])) {
            $this->x509 = new X509Config($value["x509"]);
            unset($value["x509"]);
        }
    
        if (isset($value["remote_user"])) {
            $this->remoteUser = new RemoteUserConfig($value["remote_user"]);
            unset($value["remote_user"]);
        }
    
        if (isset($value["guard"])) {
            $this->guard = new GuardConfig($value["guard"]);
            unset($value["guard"]);
        }
    
        if (isset($value["custom_authenticators"])) {
            $this->customAuthenticators = $value["custom_authenticators"];
            unset($value["custom_authenticators"]);
        }
    
        if (isset($value["login_throttling"])) {
            $this->loginThrottling = new LoginThrottlingConfig($value["login_throttling"]);
            unset($value["login_throttling"]);
        }
    
        if (isset($value["form_login"])) {
            $this->formLogin = new FormLoginConfig($value["form_login"]);
            unset($value["form_login"]);
        }
    
        if (isset($value["form_login_ldap"])) {
            $this->formLoginLdap = new FormLoginLdapConfig($value["form_login_ldap"]);
            unset($value["form_login_ldap"]);
        }
    
        if (isset($value["json_login"])) {
            $this->jsonLogin = new JsonLoginConfig($value["json_login"]);
            unset($value["json_login"]);
        }
    
        if (isset($value["json_login_ldap"])) {
            $this->jsonLoginLdap = new JsonLoginLdapConfig($value["json_login_ldap"]);
            unset($value["json_login_ldap"]);
        }
    
        if (isset($value["login_link"])) {
            $this->loginLink = new LoginLinkConfig($value["login_link"]);
            unset($value["login_link"]);
        }
    
        if (isset($value["http_basic"])) {
            $this->httpBasic = new HttpBasicConfig($value["http_basic"]);
            unset($value["http_basic"]);
        }
    
        if (isset($value["http_basic_ldap"])) {
            $this->httpBasicLdap = new HttpBasicLdapConfig($value["http_basic_ldap"]);
            unset($value["http_basic_ldap"]);
        }
    
        if (isset($value["remember_me"])) {
            $this->rememberMe = new RememberMeConfig($value["remember_me"]);
            unset($value["remember_me"]);
        }
    
        if (isset($value["anonymous"])) {
            $this->anonymous = new AnonymousConfig($value["anonymous"]);
            unset($value["anonymous"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->pattern) {
            $output["pattern"] = $this->pattern;
        }
        if (null !== $this->host) {
            $output["host"] = $this->host;
        }
        if (null !== $this->methods) {
            $output["methods"] = $this->methods;
        }
        if (null !== $this->security) {
            $output["security"] = $this->security;
        }
        if (null !== $this->userChecker) {
            $output["user_checker"] = $this->userChecker;
        }
        if (null !== $this->requestMatcher) {
            $output["request_matcher"] = $this->requestMatcher;
        }
        if (null !== $this->accessDeniedUrl) {
            $output["access_denied_url"] = $this->accessDeniedUrl;
        }
        if (null !== $this->accessDeniedHandler) {
            $output["access_denied_handler"] = $this->accessDeniedHandler;
        }
        if (null !== $this->entryPoint) {
            $output["entry_point"] = $this->entryPoint;
        }
        if (null !== $this->provider) {
            $output["provider"] = $this->provider;
        }
        if (null !== $this->stateless) {
            $output["stateless"] = $this->stateless;
        }
        if (null !== $this->lazy) {
            $output["lazy"] = $this->lazy;
        }
        if (null !== $this->context) {
            $output["context"] = $this->context;
        }
        if (null !== $this->logout) {
            $output["logout"] = $this->logout->toArray();
        }
        if (null !== $this->switchUser) {
            $output["switch_user"] = $this->switchUser->toArray();
        }
        if (null !== $this->x509) {
            $output["x509"] = $this->x509->toArray();
        }
        if (null !== $this->remoteUser) {
            $output["remote_user"] = $this->remoteUser->toArray();
        }
        if (null !== $this->guard) {
            $output["guard"] = $this->guard->toArray();
        }
        if (null !== $this->customAuthenticators) {
            $output["custom_authenticators"] = $this->customAuthenticators;
        }
        if (null !== $this->loginThrottling) {
            $output["login_throttling"] = $this->loginThrottling->toArray();
        }
        if (null !== $this->formLogin) {
            $output["form_login"] = $this->formLogin->toArray();
        }
        if (null !== $this->formLoginLdap) {
            $output["form_login_ldap"] = $this->formLoginLdap->toArray();
        }
        if (null !== $this->jsonLogin) {
            $output["json_login"] = $this->jsonLogin->toArray();
        }
        if (null !== $this->jsonLoginLdap) {
            $output["json_login_ldap"] = $this->jsonLoginLdap->toArray();
        }
        if (null !== $this->loginLink) {
            $output["login_link"] = $this->loginLink->toArray();
        }
        if (null !== $this->httpBasic) {
            $output["http_basic"] = $this->httpBasic->toArray();
        }
        if (null !== $this->httpBasicLdap) {
            $output["http_basic_ldap"] = $this->httpBasicLdap->toArray();
        }
        if (null !== $this->rememberMe) {
            $output["remember_me"] = $this->rememberMe->toArray();
        }
        if (null !== $this->anonymous) {
            $output["anonymous"] = $this->anonymous->toArray();
        }
    
        return $output;
    }
    

}
