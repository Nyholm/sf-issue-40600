<?php

namespace Symfony\Config;

require_once __DIR__.'/Monolog/HandlerConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MonologConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $useMicroseconds;
    private $channels;
    private $handlers;
    
    /**
     * @default true
     */
    public function useMicroseconds($value): self
    {
        $this->useMicroseconds = $value;
    
        return $this;
    }
    
    public function channel($value): self
    {
        $this->channels = $value;
    
        return $this;
    }
    
    public function handler(string $name, array $value = []): \Symfony\Config\Monolog\HandlerConfig
    {
        return $this->handlers[$name] ?? $this->handlers[$name] = new \Symfony\Config\Monolog\HandlerConfig($value);
    }
    
    public function getExtensionAlias(): string
    {
        return 'monolog';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["use_microseconds"])) {
            $this->useMicroseconds = $value["use_microseconds"];
            unset($value["use_microseconds"]);
        }
    
        if (isset($value["channels"])) {
            $this->channels = $value["channels"];
            unset($value["channels"]);
        }
    
        if (isset($value["handlers"])) {
            $this->handlers = array_map(function($v) { return new HandlerConfig($v); }, $value["handlers"]);;
            unset($value["handlers"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->useMicroseconds) {
            $output["use_microseconds"] = $this->useMicroseconds;
        }
        if (null !== $this->channels) {
            $output["channels"] = $this->channels;
        }
        if (null !== $this->handlers) {
            $output["handlers"] = array_map(function($v) { return $v->toArray(); }, $this->handlers);
        }
    
        return $output;
    }
    

}
