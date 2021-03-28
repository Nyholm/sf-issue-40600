<?php

namespace Config\Framework;

require_once __DIR__.'/HttpClientConfig/DefaultOptionsConfig.php';
require_once __DIR__.'/HttpClientConfig/ScopedClientConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HttpClientConfig
{
    private $enabled;
    private $maxHostConnections;
    private $defaultOptions;
    private $mockResponseFactory;
    private $scopedClients;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of connections to a single host.
     * @default NULL
     */
    public function setMaxHostConnections(int $value): self
    {
        $this->maxHostConnections = $value;
    
        return $this;
    }
    
    public function addDefaultOptions(array $value = []): \Config\Framework\HttpClientConfig\DefaultOptionsConfig
    {
        return $this->defaultOptions = new \Config\Framework\HttpClientConfig\DefaultOptionsConfig($value);
    }
    
    /**
     * The id of the service that should generate mock responses. It should be either an invokable or an iterable.
     * @default NULL
     */
    public function setMockResponseFactory( $value): self
    {
        $this->mockResponseFactory = $value;
    
        return $this;
    }
    
    public function addScopedClient(string $name, array $value = []): \Config\Framework\HttpClientConfig\ScopedClientConfig
    {
        return $this->scopedClients[$name] = new \Config\Framework\HttpClientConfig\ScopedClientConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["max_host_connections"])) {
            $this->maxHostConnections = $value["max_host_connections"];
            unset($value["max_host_connections"]);
        }
    
        if (isset($value["default_options"])) {
            $this->defaultOptions = new DefaultOptionsConfig($value["default_options"]);
            unset($value["default_options"]);
        }
    
        if (isset($value["mock_response_factory"])) {
            $this->mockResponseFactory = $value["mock_response_factory"];
            unset($value["mock_response_factory"]);
        }
    
        if (isset($value["scoped_clients"])) {
            $this->scopedClients = array_map(function($v) { return new ScopedClientConfig($v); }, $value["scoped_clients"]);;
            unset($value["scoped_clients"]);
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
        if (null !== $this->maxHostConnections) {
            $output["max_host_connections"] = $this->maxHostConnections;
        }
        if (null !== $this->defaultOptions) {
            $output["default_options"] = $this->defaultOptions->toArray();
        }
        if (null !== $this->mockResponseFactory) {
            $output["mock_response_factory"] = $this->mockResponseFactory;
        }
        if (null !== $this->scopedClients) {
            $output["scoped_clients"] = array_map(function($v) { return $v->toArray(); }, $this->scopedClients);
        }
    
        return $output;
    }
    

}
