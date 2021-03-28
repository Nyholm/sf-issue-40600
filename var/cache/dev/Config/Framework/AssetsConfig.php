<?php

namespace Config\Framework;

require_once __DIR__.'/AssetsConfig/PackageConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AssetsConfig
{
    private $enabled;
    private $versionStrategy;
    private $version;
    private $versionFormat;
    private $jsonManifestPath;
    private $basePath;
    private $baseUrls;
    private $packages;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setVersionStrategy( $value): self
    {
        $this->versionStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setVersion( $value): self
    {
        $this->version = $value;
    
        return $this;
    }
    
    /**
     * @default '%%s?%%s'
     */
    public function setVersionFormat( $value): self
    {
        $this->versionFormat = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setJsonManifestPath( $value): self
    {
        $this->jsonManifestPath = $value;
    
        return $this;
    }
    
    /**
     */
    public function setBasePath( $value): self
    {
        $this->basePath = $value;
    
        return $this;
    }
    
    public function addBaseUrl( $value): self
    {
        $this->baseUrls[] = $value;
    
        return $this;
    }
    
    public function addPackage(string $name, array $value = []): \Config\Framework\AssetsConfig\PackageConfig
    {
        return $this->packages[$name] = new \Config\Framework\AssetsConfig\PackageConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["version_strategy"])) {
            $this->versionStrategy = $value["version_strategy"];
            unset($value["version_strategy"]);
        }
    
        if (isset($value["version"])) {
            $this->version = $value["version"];
            unset($value["version"]);
        }
    
        if (isset($value["version_format"])) {
            $this->versionFormat = $value["version_format"];
            unset($value["version_format"]);
        }
    
        if (isset($value["json_manifest_path"])) {
            $this->jsonManifestPath = $value["json_manifest_path"];
            unset($value["json_manifest_path"]);
        }
    
        if (isset($value["base_path"])) {
            $this->basePath = $value["base_path"];
            unset($value["base_path"]);
        }
    
        if (isset($value["base_urls"])) {
            $this->baseUrls = $value["base_urls"];
            unset($value["base_urls"]);
        }
    
        if (isset($value["packages"])) {
            $this->packages = array_map(function($v) { return new PackageConfig($v); }, $value["packages"]);;
            unset($value["packages"]);
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
        if (null !== $this->versionStrategy) {
            $output["version_strategy"] = $this->versionStrategy;
        }
        if (null !== $this->version) {
            $output["version"] = $this->version;
        }
        if (null !== $this->versionFormat) {
            $output["version_format"] = $this->versionFormat;
        }
        if (null !== $this->jsonManifestPath) {
            $output["json_manifest_path"] = $this->jsonManifestPath;
        }
        if (null !== $this->basePath) {
            $output["base_path"] = $this->basePath;
        }
        if (null !== $this->baseUrls) {
            $output["base_urls"] = $this->baseUrls;
        }
        if (null !== $this->packages) {
            $output["packages"] = array_map(function($v) { return $v->toArray(); }, $this->packages);
        }
    
        return $output;
    }
    

}
