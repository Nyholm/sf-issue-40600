<?php

namespace Symfony\Config\Framework\HttpClientConfig\DefaultOptionsConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PeerFingerprintConfig 
{
    private $sha1;
    private $pinsha256;
    private $md5;
    
    /**
     * @default NULL
     */
    public function sha1($value): self
    {
        $this->sha1 = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function pinsha256($value): self
    {
        $this->pinsha256 = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function md5($value): self
    {
        $this->md5 = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["sha1"])) {
            $this->sha1 = $value["sha1"];
            unset($value["sha1"]);
        }
    
        if (isset($value["pin-sha256"])) {
            $this->pinsha256 = $value["pin-sha256"];
            unset($value["pin-sha256"]);
        }
    
        if (isset($value["md5"])) {
            $this->md5 = $value["md5"];
            unset($value["md5"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->sha1) {
            $output["sha1"] = $this->sha1;
        }
        if (null !== $this->pinsha256) {
            $output["pin-sha256"] = $this->pinsha256;
        }
        if (null !== $this->md5) {
            $output["md5"] = $this->md5;
        }
    
        return $output;
    }
    

}
