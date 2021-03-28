<?php

namespace Config\Framework;

require_once __DIR__.'/SerializerConfig/MappingConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SerializerConfig
{
    private $enabled;
    private $enableAnnotations;
    private $nameConverter;
    private $circularReferenceHandler;
    private $maxDepthHandler;
    private $mapping;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function setEnableAnnotations(bool $value): self
    {
        $this->enableAnnotations = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setNameConverter( $value): self
    {
        $this->nameConverter = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setCircularReferenceHandler( $value): self
    {
        $this->circularReferenceHandler = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setMaxDepthHandler( $value): self
    {
        $this->maxDepthHandler = $value;
    
        return $this;
    }
    
    public function addMapping(array $value = []): \Config\Framework\SerializerConfig\MappingConfig
    {
        return $this->mapping = new \Config\Framework\SerializerConfig\MappingConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["enable_annotations"])) {
            $this->enableAnnotations = $value["enable_annotations"];
            unset($value["enable_annotations"]);
        }
    
        if (isset($value["name_converter"])) {
            $this->nameConverter = $value["name_converter"];
            unset($value["name_converter"]);
        }
    
        if (isset($value["circular_reference_handler"])) {
            $this->circularReferenceHandler = $value["circular_reference_handler"];
            unset($value["circular_reference_handler"]);
        }
    
        if (isset($value["max_depth_handler"])) {
            $this->maxDepthHandler = $value["max_depth_handler"];
            unset($value["max_depth_handler"]);
        }
    
        if (isset($value["mapping"])) {
            $this->mapping = new MappingConfig($value["mapping"]);
            unset($value["mapping"]);
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
        if (null !== $this->enableAnnotations) {
            $output["enable_annotations"] = $this->enableAnnotations;
        }
        if (null !== $this->nameConverter) {
            $output["name_converter"] = $this->nameConverter;
        }
        if (null !== $this->circularReferenceHandler) {
            $output["circular_reference_handler"] = $this->circularReferenceHandler;
        }
        if (null !== $this->maxDepthHandler) {
            $output["max_depth_handler"] = $this->maxDepthHandler;
        }
        if (null !== $this->mapping) {
            $output["mapping"] = $this->mapping->toArray();
        }
    
        return $output;
    }
    

}
