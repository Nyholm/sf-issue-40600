<?php

namespace Symfony\Config\Mercure;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HubConfig'.\DIRECTORY_SEPARATOR.'JwtConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HubConfig 
{
    private $url;
    private $publicUrl;
    private $jwt;
    private $jwtProvider;
    private $bus;
    
    /**
     * URL of the hub's publish endpoint
     * @example https://demo.mercure.rocks/.well-known/mercure
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->url = $value;
    
        return $this;
    }
    
    /**
     * URL of the hub's public endpoint
     * @example https://demo.mercure.rocks/.well-known/mercure
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function publicUrl($value): self
    {
        $this->publicUrl = $value;
    
        return $this;
    }
    
    public function jwt(array $value = []): \Symfony\Config\Mercure\HubConfig\JwtConfig
    {
        if (null === $this->jwt) {
            $this->jwt = new \Symfony\Config\Mercure\HubConfig\JwtConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The node created by "jwt()" has already been initialized. You cannot pass values the second time you call jwt().'));
        }
    
        return $this->jwt;
    }
    
    /**
     * The ID of a service to call to generate the JSON Web Token.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The child node "jwt_provider" at path "" is deprecated, use "jwt.provider" instead.
     * @return $this
     */
    public function jwtProvider($value): self
    {
        $this->jwtProvider = $value;
    
        return $this;
    }
    
    /**
     * Name of the Messenger bus where the handler for this hub must be registered. Default to the default bus if Messenger is enabled.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bus($value): self
    {
        $this->bus = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['url'])) {
            $this->url = $value['url'];
            unset($value['url']);
        }
    
        if (isset($value['public_url'])) {
            $this->publicUrl = $value['public_url'];
            unset($value['public_url']);
        }
    
        if (isset($value['jwt'])) {
            $this->jwt = new \Symfony\Config\Mercure\HubConfig\JwtConfig($value['jwt']);
            unset($value['jwt']);
        }
    
        if (isset($value['jwt_provider'])) {
            $this->jwtProvider = $value['jwt_provider'];
            unset($value['jwt_provider']);
        }
    
        if (isset($value['bus'])) {
            $this->bus = $value['bus'];
            unset($value['bus']);
        }
    
        if ($value !== []) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->url) {
            $output['url'] = $this->url;
        }
        if (null !== $this->publicUrl) {
            $output['public_url'] = $this->publicUrl;
        }
        if (null !== $this->jwt) {
            $output['jwt'] = $this->jwt->toArray();
        }
        if (null !== $this->jwtProvider) {
            $output['jwt_provider'] = $this->jwtProvider;
        }
        if (null !== $this->bus) {
            $output['bus'] = $this->bus;
        }
    
        return $output;
    }
    

}
