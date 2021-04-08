<?php

namespace Symfony\Config\Framework\Form;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CsrfProtectionConfig 
{
    private $enabled;
    private $fieldName;
    
    /**
     * @default null
     */
    public function enabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default '_token'
     */
    public function fieldName($value): self
    {
        $this->fieldName = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["field_name"])) {
            $this->fieldName = $value["field_name"];
            unset($value["field_name"]);
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
        if (null !== $this->fieldName) {
            $output["field_name"] = $this->fieldName;
        }
    
        return $output;
    }
    

}
