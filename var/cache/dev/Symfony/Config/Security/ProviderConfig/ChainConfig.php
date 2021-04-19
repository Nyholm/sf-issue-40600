<?php

namespace Symfony\Config\Security\ProviderConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ChainConfig 
{
    private $providers;
    
    /**
     * @return $this
     */
    public function providers(array $value): self
    {
        $this->providers = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["providers"])) {
            $this->providers = $value["providers"];
            unset($value["providers"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->providers) {
            $output["providers"] = $this->providers;
        }
    
        return $output;
    }
    

}
