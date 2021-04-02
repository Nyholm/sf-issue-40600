<?php

namespace Symfony\Config\Security\FirewallConfig;

require_once __DIR__.'/LogoutConfig/DeleteCookieConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LogoutConfig 
{
    private $csrfParameter;
    private $csrfTokenGenerator;
    private $csrfTokenId;
    private $path;
    private $target;
    private $successHandler;
    private $invalidateSession;
    private $deleteCookies;
    private $handlers;
    
    /**
     * @default '_csrf_token'
     */
    public function csrfParameter( $value): self
    {
        $this->csrfParameter = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function csrfTokenGenerator( $value): self
    {
        $this->csrfTokenGenerator = $value;
    
        return $this;
    }
    
    /**
     * @default 'logout'
     */
    public function csrfTokenId( $value): self
    {
        $this->csrfTokenId = $value;
    
        return $this;
    }
    
    /**
     * @default '/logout'
     */
    public function path( $value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     */
    public function target( $value): self
    {
        $this->target = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function successHandler( $value): self
    {
        $this->successHandler = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function invalidateSession(bool $value): self
    {
        $this->invalidateSession = $value;
    
        return $this;
    }
    
    public function deleteCookie(string $name, array $value = []): \Symfony\Config\Security\FirewallConfig\LogoutConfig\DeleteCookieConfig
    {
        return $this->deleteCookies[$name] = new \Symfony\Config\Security\FirewallConfig\LogoutConfig\DeleteCookieConfig($value);
    }
    
    public function handler( $value): self
    {
        $this->handlers = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["csrf_parameter"])) {
            $this->csrfParameter = $value["csrf_parameter"];
            unset($value["csrf_parameter"]);
        }
    
        if (isset($value["csrf_token_generator"])) {
            $this->csrfTokenGenerator = $value["csrf_token_generator"];
            unset($value["csrf_token_generator"]);
        }
    
        if (isset($value["csrf_token_id"])) {
            $this->csrfTokenId = $value["csrf_token_id"];
            unset($value["csrf_token_id"]);
        }
    
        if (isset($value["path"])) {
            $this->path = $value["path"];
            unset($value["path"]);
        }
    
        if (isset($value["target"])) {
            $this->target = $value["target"];
            unset($value["target"]);
        }
    
        if (isset($value["success_handler"])) {
            $this->successHandler = $value["success_handler"];
            unset($value["success_handler"]);
        }
    
        if (isset($value["invalidate_session"])) {
            $this->invalidateSession = $value["invalidate_session"];
            unset($value["invalidate_session"]);
        }
    
        if (isset($value["delete_cookies"])) {
            $this->deleteCookies = array_map(function($v) { return new DeleteCookieConfig($v); }, $value["delete_cookies"]);;
            unset($value["delete_cookies"]);
        }
    
        if (isset($value["handlers"])) {
            $this->handlers = $value["handlers"];
            unset($value["handlers"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->csrfParameter) {
            $output["csrf_parameter"] = $this->csrfParameter;
        }
        if (null !== $this->csrfTokenGenerator) {
            $output["csrf_token_generator"] = $this->csrfTokenGenerator;
        }
        if (null !== $this->csrfTokenId) {
            $output["csrf_token_id"] = $this->csrfTokenId;
        }
        if (null !== $this->path) {
            $output["path"] = $this->path;
        }
        if (null !== $this->target) {
            $output["target"] = $this->target;
        }
        if (null !== $this->successHandler) {
            $output["success_handler"] = $this->successHandler;
        }
        if (null !== $this->invalidateSession) {
            $output["invalidate_session"] = $this->invalidateSession;
        }
        if (null !== $this->deleteCookies) {
            $output["delete_cookies"] = array_map(function($v) { return $v->toArray(); }, $this->deleteCookies);
        }
        if (null !== $this->handlers) {
            $output["handlers"] = $this->handlers;
        }
    
        return $output;
    }
    

}
