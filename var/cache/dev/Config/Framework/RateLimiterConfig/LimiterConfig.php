<?php

namespace Config\Framework\RateLimiterConfig;

require_once __DIR__.'/LimiterConfig/RateConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LimiterConfig
{
    private $lockFactory;
    private $cachePool;
    private $storageService;
    private $policy;
    private $limit;
    private $interval;
    private $rate;
    
    /**
     * The service ID of the lock factory used by this limiter (or null to disable locking)
     * @default 'lock.factory'
     */
    public function setLockFactory( $value): self
    {
        $this->lockFactory = $value;
    
        return $this;
    }
    
    /**
     * The cache pool to use for storing the current limiter state
     * @default 'cache.rate_limiter'
     */
    public function setCachePool( $value): self
    {
        $this->cachePool = $value;
    
        return $this;
    }
    
    /**
     * The service ID of a custom storage implementation, this precedes any configured "cache_pool"
     * @default NULL
     */
    public function setStorageService( $value): self
    {
        $this->storageService = $value;
    
        return $this;
    }
    
    /**
     * The algorithm to be used by this limiter
     * @default NULL
     * @param 'fixed_window'|'token_bucket'|'sliding_window'|'no_limit' $value
     */
    public function setPolicy(string $value): self
    {
        $this->policy = $value;
    
        return $this;
    }
    
    /**
     * The maximum allowed hits in a fixed interval or burst
     * @default NULL
     */
    public function setLimit(int $value): self
    {
        $this->limit = $value;
    
        return $this;
    }
    
    /**
     * Configures the fixed interval if "policy" is set to "fixed_window" or "sliding_window". The value must be a number followed by "second", "minute", "hour", "day", "week" or "month" (or their plural equivalent).
     * @default NULL
     */
    public function setInterval( $value): self
    {
        $this->interval = $value;
    
        return $this;
    }
    
    public function addRate(array $value = []): \Config\Framework\RateLimiterConfig\LimiterConfig\RateConfig
    {
        return $this->rate = new \Config\Framework\RateLimiterConfig\LimiterConfig\RateConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->lockFactory) {
            $output["lock_factory"] = $this->lockFactory;
        }
        if (null !== $this->cachePool) {
            $output["cache_pool"] = $this->cachePool;
        }
        if (null !== $this->storageService) {
            $output["storage_service"] = $this->storageService;
        }
        if (null !== $this->policy) {
            $output["policy"] = $this->policy;
        }
        if (null !== $this->limit) {
            $output["limit"] = $this->limit;
        }
        if (null !== $this->interval) {
            $output["interval"] = $this->interval;
        }
        if (null !== $this->rate) {
            $output["rate"] = $this->rate->toArray();
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["lock_factory"])) {
            $this->lockFactory = $value["lock_factory"];
            unset($value["lock_factory"]);
        }
    
        if (isset($value["cache_pool"])) {
            $this->cachePool = $value["cache_pool"];
            unset($value["cache_pool"]);
        }
    
        if (isset($value["storage_service"])) {
            $this->storageService = $value["storage_service"];
            unset($value["storage_service"]);
        }
    
        if (isset($value["policy"])) {
            $this->policy = $value["policy"];
            unset($value["policy"]);
        }
    
        if (isset($value["limit"])) {
            $this->limit = $value["limit"];
            unset($value["limit"]);
        }
    
        if (isset($value["interval"])) {
            $this->interval = $value["interval"];
            unset($value["interval"]);
        }
    
        if (isset($value["rate"])) {
            $this->rate = new RateConfig($value["rate"]);
            unset($value["rate"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}
