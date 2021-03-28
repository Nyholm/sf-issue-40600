<?php

namespace Config\Framework;

require_once __DIR__.'/MailerConfig/EnvelopeConfig.php';
require_once __DIR__.'/MailerConfig/HeaderConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MailerConfig
{
    private $enabled;
    private $messageBus;
    private $dsn;
    private $transports;
    private $envelope;
    private $headers;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * The message bus to use. Defaults to the default bus if the Messenger component is installed.
     * @default NULL
     */
    public function setMessageBus( $value): self
    {
        $this->messageBus = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setDsn( $value): self
    {
        $this->dsn = $value;
    
        return $this;
    }
    
    public function addTransport(string $name,  $value): self
    {
        $this->transports[$name] = $value;
    
        return $this;
    }
    
    public function addEnvelope(array $value = []): \Config\Framework\MailerConfig\EnvelopeConfig
    {
        return $this->envelope = new \Config\Framework\MailerConfig\EnvelopeConfig($value);
    }
    
    public function addHeader(string $name, array $value = []): \Config\Framework\MailerConfig\HeaderConfig
    {
        return $this->headers[$name] = new \Config\Framework\MailerConfig\HeaderConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["message_bus"])) {
            $this->messageBus = $value["message_bus"];
            unset($value["message_bus"]);
        }
    
        if (isset($value["dsn"])) {
            $this->dsn = $value["dsn"];
            unset($value["dsn"]);
        }
    
        if (isset($value["transports"])) {
            $this->transports = $value["transports"];
            unset($value["transports"]);
        }
    
        if (isset($value["envelope"])) {
            $this->envelope = new EnvelopeConfig($value["envelope"]);
            unset($value["envelope"]);
        }
    
        if (isset($value["headers"])) {
            $this->headers = array_map(function($v) { return new HeaderConfig($v); }, $value["headers"]);;
            unset($value["headers"]);
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
        if (null !== $this->messageBus) {
            $output["message_bus"] = $this->messageBus;
        }
        if (null !== $this->dsn) {
            $output["dsn"] = $this->dsn;
        }
        if (null !== $this->transports) {
            $output["transports"] = $this->transports;
        }
        if (null !== $this->envelope) {
            $output["envelope"] = $this->envelope->toArray();
        }
        if (null !== $this->headers) {
            $output["headers"] = array_map(function($v) { return $v->toArray(); }, $this->headers);
        }
    
        return $output;
    }
    

}
