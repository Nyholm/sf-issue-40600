<?php

namespace Symfony\Config\Monolog\HandlerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PublisherConfig 
{
    private $id;
    private $hostname;
    private $port;
    private $chunkSize;
    
    /**
     * @default null
     */
    public function id($value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * @default null
     */
    public function hostname($value): self
    {
        $this->hostname = $value;
    
        return $this;
    }
    
    /**
     * @default 12201
     */
    public function port($value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * @default 1420
     */
    public function chunkSize($value): self
    {
        $this->chunkSize = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["id"])) {
            $this->id = $value["id"];
            unset($value["id"]);
        }
    
        if (isset($value["hostname"])) {
            $this->hostname = $value["hostname"];
            unset($value["hostname"]);
        }
    
        if (isset($value["port"])) {
            $this->port = $value["port"];
            unset($value["port"]);
        }
    
        if (isset($value["chunk_size"])) {
            $this->chunkSize = $value["chunk_size"];
            unset($value["chunk_size"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->id) {
            $output["id"] = $this->id;
        }
        if (null !== $this->hostname) {
            $output["hostname"] = $this->hostname;
        }
        if (null !== $this->port) {
            $output["port"] = $this->port;
        }
        if (null !== $this->chunkSize) {
            $output["chunk_size"] = $this->chunkSize;
        }
    
        return $output;
    }
    

}
