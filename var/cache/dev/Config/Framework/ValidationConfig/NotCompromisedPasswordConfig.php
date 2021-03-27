<?php

namespace Config\Framework\ValidationConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class NotCompromisedPasswordConfig
{
    private $enabled;
    private $endpoint;
    
    /**
     * When disabled, compromised passwords will be accepted as valid.
     * @default true
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * API endpoint for the NotCompromisedPassword Validator.
     * @default NULL
     */
    public function setEndpoint( $value): self
    {
        $this->endpoint = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->endpoint) {
            $output["endpoint"] = $this->endpoint;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["endpoint"])) {
            $this->endpoint = $value["endpoint"];
            unset($value["endpoint"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
