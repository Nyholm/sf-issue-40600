<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Mercure'.\DIRECTORY_SEPARATOR.'HubConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MercureConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $hubs;
    private $defaultHub;
    private $defaultCookieLifetime;
    private $enableProfiler;
    
    public function hub(string $name, array $value = []): \Symfony\Config\Mercure\HubConfig
    {
        if (!isset($this->hubs[$name])) {
            return $this->hubs[$name] = new \Symfony\Config\Mercure\HubConfig($value);
        }
        if ([] === $value) {
            return $this->hubs[$name];
        }
    
        throw new InvalidConfigurationException(sprintf('The node created by "hub()" has already been initialized. You cannot pass values the second time you call hub().'));
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultHub($value): self
    {
        $this->defaultHub = $value;
    
        return $this;
    }
    
    /**
     * Default lifetime of the cookie containing the JWT, in seconds. Defaults to the value of "framework.session.cookie_lifetime".
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function defaultCookieLifetime($value): self
    {
        $this->defaultCookieLifetime = $value;
    
        return $this;
    }
    
    /**
     * Enable Symfony Web Profiler integration.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableProfiler($value): self
    {
        $this->enableProfiler = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'mercure';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["hubs"])) {
            $this->hubs = array_map(function($v) { return new HubConfig($v); }, $value["hubs"]);;
            unset($value["hubs"]);
        }
    
        if (isset($value["default_hub"])) {
            $this->defaultHub = $value["default_hub"];
            unset($value["default_hub"]);
        }
    
        if (isset($value["default_cookie_lifetime"])) {
            $this->defaultCookieLifetime = $value["default_cookie_lifetime"];
            unset($value["default_cookie_lifetime"]);
        }
    
        if (isset($value["enable_profiler"])) {
            $this->enableProfiler = $value["enable_profiler"];
            unset($value["enable_profiler"]);
        }
    
        if ($value !== []) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->hubs) {
            $output["hubs"] = array_map(function($v) { return $v->toArray(); }, $this->hubs);
        }
        if (null !== $this->defaultHub) {
            $output["default_hub"] = $this->defaultHub;
        }
        if (null !== $this->defaultCookieLifetime) {
            $output["default_cookie_lifetime"] = $this->defaultCookieLifetime;
        }
        if (null !== $this->enableProfiler) {
            $output["enable_profiler"] = $this->enableProfiler;
        }
    
        return $output;
    }
    

}
