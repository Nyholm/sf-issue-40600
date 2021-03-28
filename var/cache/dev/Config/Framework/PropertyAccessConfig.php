<?php

namespace Config\Framework;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PropertyAccessConfig
{
    private $enabled;
    private $magicCall;
    private $magicGet;
    private $magicSet;
    private $throwExceptionOnInvalidIndex;
    private $throwExceptionOnInvalidPropertyPath;
    
    /**
     * @default true
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setMagicCall(bool $value): self
    {
        $this->magicCall = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setMagicGet(bool $value): self
    {
        $this->magicGet = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setMagicSet(bool $value): self
    {
        $this->magicSet = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setThrowExceptionOnInvalidIndex(bool $value): self
    {
        $this->throwExceptionOnInvalidIndex = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setThrowExceptionOnInvalidPropertyPath(bool $value): self
    {
        $this->throwExceptionOnInvalidPropertyPath = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["magic_call"])) {
            $this->magicCall = $value["magic_call"];
            unset($value["magic_call"]);
        }
    
        if (isset($value["magic_get"])) {
            $this->magicGet = $value["magic_get"];
            unset($value["magic_get"]);
        }
    
        if (isset($value["magic_set"])) {
            $this->magicSet = $value["magic_set"];
            unset($value["magic_set"]);
        }
    
        if (isset($value["throw_exception_on_invalid_index"])) {
            $this->throwExceptionOnInvalidIndex = $value["throw_exception_on_invalid_index"];
            unset($value["throw_exception_on_invalid_index"]);
        }
    
        if (isset($value["throw_exception_on_invalid_property_path"])) {
            $this->throwExceptionOnInvalidPropertyPath = $value["throw_exception_on_invalid_property_path"];
            unset($value["throw_exception_on_invalid_property_path"]);
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
        if (null !== $this->magicCall) {
            $output["magic_call"] = $this->magicCall;
        }
        if (null !== $this->magicGet) {
            $output["magic_get"] = $this->magicGet;
        }
        if (null !== $this->magicSet) {
            $output["magic_set"] = $this->magicSet;
        }
        if (null !== $this->throwExceptionOnInvalidIndex) {
            $output["throw_exception_on_invalid_index"] = $this->throwExceptionOnInvalidIndex;
        }
        if (null !== $this->throwExceptionOnInvalidPropertyPath) {
            $output["throw_exception_on_invalid_property_path"] = $this->throwExceptionOnInvalidPropertyPath;
        }
    
        return $output;
    }
    

}
