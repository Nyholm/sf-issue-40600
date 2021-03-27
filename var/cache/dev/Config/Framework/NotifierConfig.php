<?php

namespace Config\Framework;

require_once __DIR__.'/NotifierConfig/AdminRecipientConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class NotifierConfig
{
    private $enabled;
    private $chatterTransports;
    private $texterTransports;
    private $notificationOnFailedMessages;
    private $channelPolicy;
    private $adminRecipients;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function addChatterTransport(string $name,  $value): self
    {
        $this->chatterTransports[$name] = $value;
    
        return $this;
    }
    
    public function addTexterTransport(string $name,  $value): self
    {
        $this->texterTransports[$name] = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function setNotificationOnFailedMessages(bool $value): self
    {
        $this->notificationOnFailedMessages = $value;
    
        return $this;
    }
    
    public function addChannelPolicy(string $name, array $value): self
    {
        $this->channelPolicy[$name] = $value;
    
        return $this;
    }
    
    public function addAdminRecipient(array $value = []): \Config\Framework\NotifierConfig\AdminRecipientConfig
    {
        return $this->adminRecipients[] = new \Config\Framework\NotifierConfig\AdminRecipientConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->chatterTransports) {
            $output["chatter_transports"] = $this->chatterTransports;
        }
        if (null !== $this->texterTransports) {
            $output["texter_transports"] = $this->texterTransports;
        }
        if (null !== $this->notificationOnFailedMessages) {
            $output["notification_on_failed_messages"] = $this->notificationOnFailedMessages;
        }
        if (null !== $this->channelPolicy) {
            $output["channel_policy"] = $this->channelPolicy;
        }
        if (null !== $this->adminRecipients) {
            $output["admin_recipients"] = array_map(function($v) { return $v->toArray(); }, $this->adminRecipients);
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["chatter_transports"])) {
            $this->chatterTransports = $value["chatter_transports"];
            unset($value["chatter_transports"]);
        }
    
        if (isset($value["texter_transports"])) {
            $this->texterTransports = $value["texter_transports"];
            unset($value["texter_transports"]);
        }
    
        if (isset($value["notification_on_failed_messages"])) {
            $this->notificationOnFailedMessages = $value["notification_on_failed_messages"];
            unset($value["notification_on_failed_messages"]);
        }
    
        if (isset($value["channel_policy"])) {
            $this->channelPolicy = $value["channel_policy"];
            unset($value["channel_policy"]);
        }
    
        if (isset($value["admin_recipients"])) {
            $this->adminRecipients = array_map(function($v) { return new AdminRecipientConfig($v); }, $value["admin_recipients"]);;
            unset($value["admin_recipients"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
