<?php

namespace Config\Framework;

require_once __DIR__.'/RateLimiterConfig/LimiterConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RateLimiterConfig
{
    private $enabled;
    private $limiters;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function addLimiter(string $name, array $value = []): \Config\Framework\RateLimiterConfig\LimiterConfig
    {
        return $this->limiters[$name] = new \Config\Framework\RateLimiterConfig\LimiterConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["limiters"])) {
            $this->limiters = array_map(function($v) { return new LimiterConfig($v); }, $value["limiters"]);;
            unset($value["limiters"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->limiters) {
            $output["limiters"] = array_map(function($v) { return $v->toArray(); }, $this->limiters);
        }
    
        return $output;
    }
    

}
