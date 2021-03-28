<?php

namespace Config\Framework\WorkflowsConfig;

require_once __DIR__.'/WorkflowsConfig/AuditTrailConfig.php';
require_once __DIR__.'/WorkflowsConfig/MarkingStoreConfig.php';
require_once __DIR__.'/WorkflowsConfig/PlaceConfig.php';
require_once __DIR__.'/WorkflowsConfig/TransitionConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class WorkflowsConfig
{
    private $auditTrail;
    private $type;
    private $markingStore;
    private $supports;
    private $supportStrategy;
    private $initialMarking;
    private $eventsToDispatch;
    private $places;
    private $transitions;
    private $metadata;
    
    public function addAuditTrail(array $value = []): \Config\Framework\WorkflowsConfig\WorkflowsConfig\AuditTrailConfig
    {
        return $this->auditTrail = new \Config\Framework\WorkflowsConfig\WorkflowsConfig\AuditTrailConfig($value);
    }
    
    /**
     * @default 'state_machine'
     * @param 'workflow'|'state_machine' $value
     */
    public function setType(string $value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    public function addMarkingStore(array $value = []): \Config\Framework\WorkflowsConfig\WorkflowsConfig\MarkingStoreConfig
    {
        return $this->markingStore = new \Config\Framework\WorkflowsConfig\WorkflowsConfig\MarkingStoreConfig($value);
    }
    
    public function addSupport( $value): self
    {
        $this->supports[] = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setSupportStrategy( $value): self
    {
        $this->supportStrategy = $value;
    
        return $this;
    }
    
    public function addInitialMarking( $value): self
    {
        $this->initialMarking[] = $value;
    
        return $this;
    }
    
    /**
     * Select which Transition events should be dispatched for this Workflow
     * @example workflow.enter
     * @example workflow.transition
     * @default NULL
     */
    public function setEventsToDispatch($value): self
    {
        $this->eventsToDispatch = $value;
    
        return $this;
    }
    
    public function addPlace(array $value = []): \Config\Framework\WorkflowsConfig\WorkflowsConfig\PlaceConfig
    {
        return $this->places[] = new \Config\Framework\WorkflowsConfig\WorkflowsConfig\PlaceConfig($value);
    }
    
    public function addTransition(array $value = []): \Config\Framework\WorkflowsConfig\WorkflowsConfig\TransitionConfig
    {
        return $this->transitions[] = new \Config\Framework\WorkflowsConfig\WorkflowsConfig\TransitionConfig($value);
    }
    
    public function addMetadata( $value): self
    {
        $this->metadata[] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["audit_trail"])) {
            $this->auditTrail = new AuditTrailConfig($value["audit_trail"]);
            unset($value["audit_trail"]);
        }
    
        if (isset($value["type"])) {
            $this->type = $value["type"];
            unset($value["type"]);
        }
    
        if (isset($value["marking_store"])) {
            $this->markingStore = new MarkingStoreConfig($value["marking_store"]);
            unset($value["marking_store"]);
        }
    
        if (isset($value["supports"])) {
            $this->supports = $value["supports"];
            unset($value["supports"]);
        }
    
        if (isset($value["support_strategy"])) {
            $this->supportStrategy = $value["support_strategy"];
            unset($value["support_strategy"]);
        }
    
        if (isset($value["initial_marking"])) {
            $this->initialMarking = $value["initial_marking"];
            unset($value["initial_marking"]);
        }
    
        if (isset($value["events_to_dispatch"])) {
            $this->eventsToDispatch = $value["events_to_dispatch"];
            unset($value["events_to_dispatch"]);
        }
    
        if (isset($value["places"])) {
            $this->places = array_map(function($v) { return new PlaceConfig($v); }, $value["places"]);;
            unset($value["places"]);
        }
    
        if (isset($value["transitions"])) {
            $this->transitions = array_map(function($v) { return new TransitionConfig($v); }, $value["transitions"]);;
            unset($value["transitions"]);
        }
    
        if (isset($value["metadata"])) {
            $this->metadata = $value["metadata"];
            unset($value["metadata"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->auditTrail) {
            $output["audit_trail"] = $this->auditTrail->toArray();
        }
        if (null !== $this->type) {
            $output["type"] = $this->type;
        }
        if (null !== $this->markingStore) {
            $output["marking_store"] = $this->markingStore->toArray();
        }
        if (null !== $this->supports) {
            $output["supports"] = $this->supports;
        }
        if (null !== $this->supportStrategy) {
            $output["support_strategy"] = $this->supportStrategy;
        }
        if (null !== $this->initialMarking) {
            $output["initial_marking"] = $this->initialMarking;
        }
        if (null !== $this->eventsToDispatch) {
            $output["events_to_dispatch"] = $this->eventsToDispatch;
        }
        if (null !== $this->places) {
            $output["places"] = array_map(function($v) { return $v->toArray(); }, $this->places);
        }
        if (null !== $this->transitions) {
            $output["transitions"] = array_map(function($v) { return $v->toArray(); }, $this->transitions);
        }
        if (null !== $this->metadata) {
            $output["metadata"] = $this->metadata;
        }
    
        return $output;
    }
    

}
