<?php

namespace Config\Framework;

require_once __DIR__.'/FormConfig/CsrfProtectionConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FormConfig
{
    private $enabled;
    private $csrfProtection;
    private $legacyErrorMessages;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function addCsrfProtection(array $value = []): \Config\Framework\FormConfig\CsrfProtectionConfig
    {
        return $this->csrfProtection = new \Config\Framework\FormConfig\CsrfProtectionConfig($value);
    }
    
    /**
     * @default true
     */
    public function setLegacyErrorMessages(bool $value): self
    {
        $this->legacyErrorMessages = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->csrfProtection) {
            $output["csrf_protection"] = $this->csrfProtection->toArray();
        }
        if (null !== $this->legacyErrorMessages) {
            $output["legacy_error_messages"] = $this->legacyErrorMessages;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["csrf_protection"])) {
            $this->csrfProtection = new CsrfProtectionConfig($value["csrf_protection"]);
            unset($value["csrf_protection"]);
        }
    
        if (isset($value["legacy_error_messages"])) {
            $this->legacyErrorMessages = $value["legacy_error_messages"];
            unset($value["legacy_error_messages"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
