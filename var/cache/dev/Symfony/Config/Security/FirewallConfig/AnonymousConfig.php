<?php

namespace Symfony\Config\Security\FirewallConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AnonymousConfig 
{
    private $lazy;
    private $secret;
    
    /**
     * @default false
     * @deprecated Using "anonymous: lazy" to make the firewall lazy is deprecated, use "anonymous: true" and "lazy: true" instead.
     * @return $this
     */
    public function lazy(bool $value): self
    {
        $this->lazy = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @return $this
     */
    public function secret($value): self
    {
        $this->secret = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["lazy"])) {
            $this->lazy = $value["lazy"];
            unset($value["lazy"]);
        }
    
        if (isset($value["secret"])) {
            $this->secret = $value["secret"];
            unset($value["secret"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->lazy) {
            $output["lazy"] = $this->lazy;
        }
        if (null !== $this->secret) {
            $output["secret"] = $this->secret;
        }
    
        return $output;
    }
    

}
