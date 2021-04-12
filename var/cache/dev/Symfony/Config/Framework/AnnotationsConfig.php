<?php

namespace Symfony\Config\Framework;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AnnotationsConfig 
{
    private $enabled;
    private $cache;
    private $fileCacheDir;
    private $debug;
    
    /**
     * @default true
     * @return $this
     */
    public function enabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'php_array'
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/annotations'
     * @return $this
     */
    public function fileCacheDir($value): self
    {
        $this->fileCacheDir = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @return $this
     */
    public function debug(bool $value): self
    {
        $this->debug = $value;
    
        return $this;
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
    
        if (isset($value["file_cache_dir"])) {
            $this->fileCacheDir = $value["file_cache_dir"];
            unset($value["file_cache_dir"]);
        }
    
        if (isset($value["debug"])) {
            $this->debug = $value["debug"];
            unset($value["debug"]);
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
        if (null !== $this->fileCacheDir) {
            $output["file_cache_dir"] = $this->fileCacheDir;
        }
        if (null !== $this->debug) {
            $output["debug"] = $this->debug;
        }
    
        return $output;
    }
    

}
