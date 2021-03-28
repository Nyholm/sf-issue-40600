<?php

namespace Config\Framework;

require_once __DIR__.'/MessengerConfig/RoutingConfig.php';
require_once __DIR__.'/MessengerConfig/SerializerConfig.php';
require_once __DIR__.'/MessengerConfig/TransportConfig.php';
require_once __DIR__.'/MessengerConfig/BusConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MessengerConfig
{
    private $enabled;
    private $routing;
    private $serializer;
    private $transports;
    private $failureTransport;
    private $defaultBus;
    private $buses;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function addRouting(string $message_class, array $value = []): \Config\Framework\MessengerConfig\RoutingConfig
    {
        return $this->routing[$message_class] = new \Config\Framework\MessengerConfig\RoutingConfig($value);
    }
    
    public function addSerializer(array $value = []): \Config\Framework\MessengerConfig\SerializerConfig
    {
        return $this->serializer = new \Config\Framework\MessengerConfig\SerializerConfig($value);
    }
    
    public function addTransport(string $name, array $value = []): \Config\Framework\MessengerConfig\TransportConfig
    {
        return $this->transports[$name] = new \Config\Framework\MessengerConfig\TransportConfig($value);
    }
    
    /**
     * Transport name to send failed messages to (after all retries have failed).
     * @default NULL
     */
    public function setFailureTransport( $value): self
    {
        $this->failureTransport = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setDefaultBus( $value): self
    {
        $this->defaultBus = $value;
    
        return $this;
    }
    
    public function addBus(string $name, array $value = []): \Config\Framework\MessengerConfig\BusConfig
    {
        return $this->buses[$name] = new \Config\Framework\MessengerConfig\BusConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["routing"])) {
            $this->routing = array_map(function($v) { return new RoutingConfig($v); }, $value["routing"]);;
            unset($value["routing"]);
        }
    
        if (isset($value["serializer"])) {
            $this->serializer = new SerializerConfig($value["serializer"]);
            unset($value["serializer"]);
        }
    
        if (isset($value["transports"])) {
            $this->transports = array_map(function($v) { return new TransportConfig($v); }, $value["transports"]);;
            unset($value["transports"]);
        }
    
        if (isset($value["failure_transport"])) {
            $this->failureTransport = $value["failure_transport"];
            unset($value["failure_transport"]);
        }
    
        if (isset($value["default_bus"])) {
            $this->defaultBus = $value["default_bus"];
            unset($value["default_bus"]);
        }
    
        if (isset($value["buses"])) {
            $this->buses = array_map(function($v) { return new BusConfig($v); }, $value["buses"]);;
            unset($value["buses"]);
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
        if (null !== $this->routing) {
            $output["routing"] = array_map(function($v) { return $v->toArray(); }, $this->routing);
        }
        if (null !== $this->serializer) {
            $output["serializer"] = $this->serializer->toArray();
        }
        if (null !== $this->transports) {
            $output["transports"] = array_map(function($v) { return $v->toArray(); }, $this->transports);
        }
        if (null !== $this->failureTransport) {
            $output["failure_transport"] = $this->failureTransport;
        }
        if (null !== $this->defaultBus) {
            $output["default_bus"] = $this->defaultBus;
        }
        if (null !== $this->buses) {
            $output["buses"] = array_map(function($v) { return $v->toArray(); }, $this->buses);
        }
    
        return $output;
    }
    

}
