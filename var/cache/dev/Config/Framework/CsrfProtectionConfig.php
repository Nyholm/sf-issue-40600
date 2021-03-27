<?php

namespace Config\Framework;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CsrfProtectionConfig
{
    private $enabled;
    
    /**
     * @default NULL
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
