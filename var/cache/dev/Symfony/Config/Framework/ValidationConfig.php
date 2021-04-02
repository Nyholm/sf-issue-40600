<?php

namespace Symfony\Config\Framework;

require_once __DIR__.'/ValidationConfig/MappingConfig.php';
require_once __DIR__.'/ValidationConfig/NotCompromisedPasswordConfig.php';
require_once __DIR__.'/ValidationConfig/AutoMappingConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ValidationConfig 
{
    private $enabled;
    private $cache;
    private $enableAnnotations;
    private $staticMethod;
    private $translationDomain;
    private $emailValidationMode;
    private $mapping;
    private $notCompromisedPassword;
    private $autoMapping;
    
    /**
     * @default false
     */
    public function enabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function cache( $value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function enableAnnotations(bool $value): self
    {
        $this->enableAnnotations = $value;
    
        return $this;
    }
    
    public function staticMethod( $value): self
    {
        $this->staticMethod = $value;
    
        return $this;
    }
    
    /**
     * @default 'validators'
     */
    public function translationDomain( $value): self
    {
        $this->translationDomain = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     * @param 'html5'|'loose'|'strict' $value
     */
    public function emailValidationMode(string $value): self
    {
        $this->emailValidationMode = $value;
    
        return $this;
    }
    
    public function mapping(array $value = []): \Symfony\Config\Framework\ValidationConfig\MappingConfig
    {
        if (null === $this->mapping) {
            $this->mapping = new \Symfony\Config\Framework\ValidationConfig\MappingConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().'));
        }
    
        return $this->mapping;
    }
    
    public function notCompromisedPassword(array $value = []): \Symfony\Config\Framework\ValidationConfig\NotCompromisedPasswordConfig
    {
        if (null === $this->notCompromisedPassword) {
            $this->notCompromisedPassword = new \Symfony\Config\Framework\ValidationConfig\NotCompromisedPasswordConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "notCompromisedPassword()" has already been initialized. You cannot pass values the second time you call notCompromisedPassword().'));
        }
    
        return $this->notCompromisedPassword;
    }
    
    public function autoMapping(string $namespace, array $value = []): \Symfony\Config\Framework\ValidationConfig\AutoMappingConfig
    {
        return $this->autoMapping[$namespace] = new \Symfony\Config\Framework\ValidationConfig\AutoMappingConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["cache"])) {
            $this->cache = $value["cache"];
            unset($value["cache"]);
        }
    
        if (isset($value["enable_annotations"])) {
            $this->enableAnnotations = $value["enable_annotations"];
            unset($value["enable_annotations"]);
        }
    
        if (isset($value["static_method"])) {
            $this->staticMethod = $value["static_method"];
            unset($value["static_method"]);
        }
    
        if (isset($value["translation_domain"])) {
            $this->translationDomain = $value["translation_domain"];
            unset($value["translation_domain"]);
        }
    
        if (isset($value["email_validation_mode"])) {
            $this->emailValidationMode = $value["email_validation_mode"];
            unset($value["email_validation_mode"]);
        }
    
        if (isset($value["mapping"])) {
            $this->mapping = new MappingConfig($value["mapping"]);
            unset($value["mapping"]);
        }
    
        if (isset($value["not_compromised_password"])) {
            $this->notCompromisedPassword = new NotCompromisedPasswordConfig($value["not_compromised_password"]);
            unset($value["not_compromised_password"]);
        }
    
        if (isset($value["auto_mapping"])) {
            $this->autoMapping = array_map(function($v) { return new AutoMappingConfig($v); }, $value["auto_mapping"]);;
            unset($value["auto_mapping"]);
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
        if (null !== $this->cache) {
            $output["cache"] = $this->cache;
        }
        if (null !== $this->enableAnnotations) {
            $output["enable_annotations"] = $this->enableAnnotations;
        }
        if (null !== $this->staticMethod) {
            $output["static_method"] = $this->staticMethod;
        }
        if (null !== $this->translationDomain) {
            $output["translation_domain"] = $this->translationDomain;
        }
        if (null !== $this->emailValidationMode) {
            $output["email_validation_mode"] = $this->emailValidationMode;
        }
        if (null !== $this->mapping) {
            $output["mapping"] = $this->mapping->toArray();
        }
        if (null !== $this->notCompromisedPassword) {
            $output["not_compromised_password"] = $this->notCompromisedPassword->toArray();
        }
        if (null !== $this->autoMapping) {
            $output["auto_mapping"] = array_map(function($v) { return $v->toArray(); }, $this->autoMapping);
        }
    
        return $output;
    }
    

}
