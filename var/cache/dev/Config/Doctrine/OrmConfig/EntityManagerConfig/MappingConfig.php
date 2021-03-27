<?php

namespace Config\Doctrine\OrmConfig\EntityManagerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MappingConfig
{
    private $mapping;
    private $type;
    private $dir;
    private $alias;
    private $prefix;
    private $isBundle;
    
    /**
     * @default true
     */
    public function setMapping( $value): self
    {
        $this->mapping = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setType( $value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setDir( $value): self
    {
        $this->dir = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setAlias( $value): self
    {
        $this->alias = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setPrefix( $value): self
    {
        $this->prefix = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setIsBundle(bool $value): self
    {
        $this->isBundle = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->mapping) {
            $output["mapping"] = $this->mapping;
        }
        if (null !== $this->type) {
            $output["type"] = $this->type;
        }
        if (null !== $this->dir) {
            $output["dir"] = $this->dir;
        }
        if (null !== $this->alias) {
            $output["alias"] = $this->alias;
        }
        if (null !== $this->prefix) {
            $output["prefix"] = $this->prefix;
        }
        if (null !== $this->isBundle) {
            $output["is_bundle"] = $this->isBundle;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["mapping"])) {
            $this->mapping = $value["mapping"];
            unset($value["mapping"]);
        }
    
        if (isset($value["type"])) {
            $this->type = $value["type"];
            unset($value["type"]);
        }
    
        if (isset($value["dir"])) {
            $this->dir = $value["dir"];
            unset($value["dir"]);
        }
    
        if (isset($value["alias"])) {
            $this->alias = $value["alias"];
            unset($value["alias"]);
        }
    
        if (isset($value["prefix"])) {
            $this->prefix = $value["prefix"];
            unset($value["prefix"]);
        }
    
        if (isset($value["is_bundle"])) {
            $this->isBundle = $value["is_bundle"];
            unset($value["is_bundle"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
