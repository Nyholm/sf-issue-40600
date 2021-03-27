<?php

namespace Config\Framework\MailerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EnvelopeConfig
{
    private $sender;
    private $recipients;
    
    /**
     * @default NULL
     */
    public function setSender( $value): self
    {
        $this->sender = $value;
    
        return $this;
    }
    
    public function addRecipients( $value): self
    {
        $this->recipients[] = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->sender) {
            $output["sender"] = $this->sender;
        }
        if (null !== $this->recipients) {
            $output["recipients"] = $this->recipients;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["sender"])) {
            $this->sender = $value["sender"];
            unset($value["sender"]);
        }
    
        if (isset($value["recipients"])) {
            $this->recipients = $value["recipients"];
            unset($value["recipients"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}