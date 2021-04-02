<?php

namespace Symfony\Config\Framework\HttpClientConfig;

require_once __DIR__.'/ScopedClientConfig/PeerFingerprintConfig.php';
require_once __DIR__.'/ScopedClientConfig/RetryFailedConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ScopedClientConfig 
{
    private $scope;
    private $baseUri;
    private $authBasic;
    private $authBearer;
    private $authNtlm;
    private $query;
    private $headers;
    private $maxRedirects;
    private $httpVersion;
    private $resolve;
    private $proxy;
    private $noProxy;
    private $timeout;
    private $maxDuration;
    private $bindto;
    private $verifyPeer;
    private $verifyHost;
    private $cafile;
    private $capath;
    private $localCert;
    private $localPk;
    private $passphrase;
    private $ciphers;
    private $peerFingerprint;
    private $retryFailed;
    
    /**
     * The regular expression that the request URL must match before adding the other options. When none is provided, the base URI is used instead.
     * @default NULL
     */
    public function scope( $value): self
    {
        $this->scope = $value;
    
        return $this;
    }
    
    /**
     * The URI to resolve relative URLs, following rules in RFC 3985, section 2.
     * @default NULL
     */
    public function baseUri( $value): self
    {
        $this->baseUri = $value;
    
        return $this;
    }
    
    /**
     * An HTTP Basic authentication "username:password".
     * @default NULL
     */
    public function authBasic( $value): self
    {
        $this->authBasic = $value;
    
        return $this;
    }
    
    /**
     * A token enabling HTTP Bearer authorization.
     * @default NULL
     */
    public function authBearer( $value): self
    {
        $this->authBearer = $value;
    
        return $this;
    }
    
    /**
     * A "username:password" pair to use Microsoft NTLM authentication (requires the cURL extension).
     * @default NULL
     */
    public function authNtlm( $value): self
    {
        $this->authNtlm = $value;
    
        return $this;
    }
    
    public function query(string $key,  $value): self
    {
        $this->query[$key] = $value;
    
        return $this;
    }
    
    public function header(string $name,  $value): self
    {
        $this->headers[$name] = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of redirects to follow.
     * @default NULL
     */
    public function maxRedirects(int $value): self
    {
        $this->maxRedirects = $value;
    
        return $this;
    }
    
    /**
     * The default HTTP version, typically 1.1 or 2.0, leave to null for the best version.
     * @default NULL
     */
    public function httpVersion( $value): self
    {
        $this->httpVersion = $value;
    
        return $this;
    }
    
    public function resolve(string $host,  $value): self
    {
        $this->resolve[$host] = $value;
    
        return $this;
    }
    
    /**
     * The URL of the proxy to pass requests through or null for automatic detection.
     * @default NULL
     */
    public function proxy( $value): self
    {
        $this->proxy = $value;
    
        return $this;
    }
    
    /**
     * A comma separated list of hosts that do not require a proxy to be reached.
     * @default NULL
     */
    public function noProxy( $value): self
    {
        $this->noProxy = $value;
    
        return $this;
    }
    
    /**
     * The idle timeout, defaults to the "default_socket_timeout" ini parameter.
     * @default NULL
     */
    public function timeout(float $value): self
    {
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * The maximum execution time for the request+response as a whole.
     * @default NULL
     */
    public function maxDuration(float $value): self
    {
        $this->maxDuration = $value;
    
        return $this;
    }
    
    /**
     * A network interface name, IP address, a host name or a UNIX socket to bind to.
     * @default NULL
     */
    public function bindto( $value): self
    {
        $this->bindto = $value;
    
        return $this;
    }
    
    /**
     * Indicates if the peer should be verified in an SSL/TLS context.
     * @default NULL
     */
    public function verifyPeer(bool $value): self
    {
        $this->verifyPeer = $value;
    
        return $this;
    }
    
    /**
     * Indicates if the host should exist as a certificate common name.
     * @default NULL
     */
    public function verifyHost(bool $value): self
    {
        $this->verifyHost = $value;
    
        return $this;
    }
    
    /**
     * A certificate authority file.
     * @default NULL
     */
    public function cafile( $value): self
    {
        $this->cafile = $value;
    
        return $this;
    }
    
    /**
     * A directory that contains multiple certificate authority files.
     * @default NULL
     */
    public function capath( $value): self
    {
        $this->capath = $value;
    
        return $this;
    }
    
    /**
     * A PEM formatted certificate file.
     * @default NULL
     */
    public function localCert( $value): self
    {
        $this->localCert = $value;
    
        return $this;
    }
    
    /**
     * A private key file.
     * @default NULL
     */
    public function localPk( $value): self
    {
        $this->localPk = $value;
    
        return $this;
    }
    
    /**
     * The passphrase used to encrypt the "local_pk" file.
     * @default NULL
     */
    public function passphrase( $value): self
    {
        $this->passphrase = $value;
    
        return $this;
    }
    
    /**
     * A list of SSL/TLS ciphers separated by colons, commas or spaces (e.g. "RC3-SHA:TLS13-AES-128-GCM-SHA256"...)
     * @default NULL
     */
    public function ciphers( $value): self
    {
        $this->ciphers = $value;
    
        return $this;
    }
    
    public function peerFingerprint(array $value = []): \Symfony\Config\Framework\HttpClientConfig\ScopedClientConfig\PeerFingerprintConfig
    {
        if (null === $this->peerFingerprint) {
            $this->peerFingerprint = new \Symfony\Config\Framework\HttpClientConfig\ScopedClientConfig\PeerFingerprintConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "peerFingerprint()" has already been initialized. You cannot pass values the second time you call peerFingerprint().'));
        }
    
        return $this->peerFingerprint;
    }
    
    public function retryFailed(array $value = []): \Symfony\Config\Framework\HttpClientConfig\ScopedClientConfig\RetryFailedConfig
    {
        if (null === $this->retryFailed) {
            $this->retryFailed = new \Symfony\Config\Framework\HttpClientConfig\ScopedClientConfig\RetryFailedConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "retryFailed()" has already been initialized. You cannot pass values the second time you call retryFailed().'));
        }
    
        return $this->retryFailed;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["scope"])) {
            $this->scope = $value["scope"];
            unset($value["scope"]);
        }
    
        if (isset($value["base_uri"])) {
            $this->baseUri = $value["base_uri"];
            unset($value["base_uri"]);
        }
    
        if (isset($value["auth_basic"])) {
            $this->authBasic = $value["auth_basic"];
            unset($value["auth_basic"]);
        }
    
        if (isset($value["auth_bearer"])) {
            $this->authBearer = $value["auth_bearer"];
            unset($value["auth_bearer"]);
        }
    
        if (isset($value["auth_ntlm"])) {
            $this->authNtlm = $value["auth_ntlm"];
            unset($value["auth_ntlm"]);
        }
    
        if (isset($value["query"])) {
            $this->query = $value["query"];
            unset($value["query"]);
        }
    
        if (isset($value["headers"])) {
            $this->headers = $value["headers"];
            unset($value["headers"]);
        }
    
        if (isset($value["max_redirects"])) {
            $this->maxRedirects = $value["max_redirects"];
            unset($value["max_redirects"]);
        }
    
        if (isset($value["http_version"])) {
            $this->httpVersion = $value["http_version"];
            unset($value["http_version"]);
        }
    
        if (isset($value["resolve"])) {
            $this->resolve = $value["resolve"];
            unset($value["resolve"]);
        }
    
        if (isset($value["proxy"])) {
            $this->proxy = $value["proxy"];
            unset($value["proxy"]);
        }
    
        if (isset($value["no_proxy"])) {
            $this->noProxy = $value["no_proxy"];
            unset($value["no_proxy"]);
        }
    
        if (isset($value["timeout"])) {
            $this->timeout = $value["timeout"];
            unset($value["timeout"]);
        }
    
        if (isset($value["max_duration"])) {
            $this->maxDuration = $value["max_duration"];
            unset($value["max_duration"]);
        }
    
        if (isset($value["bindto"])) {
            $this->bindto = $value["bindto"];
            unset($value["bindto"]);
        }
    
        if (isset($value["verify_peer"])) {
            $this->verifyPeer = $value["verify_peer"];
            unset($value["verify_peer"]);
        }
    
        if (isset($value["verify_host"])) {
            $this->verifyHost = $value["verify_host"];
            unset($value["verify_host"]);
        }
    
        if (isset($value["cafile"])) {
            $this->cafile = $value["cafile"];
            unset($value["cafile"]);
        }
    
        if (isset($value["capath"])) {
            $this->capath = $value["capath"];
            unset($value["capath"]);
        }
    
        if (isset($value["local_cert"])) {
            $this->localCert = $value["local_cert"];
            unset($value["local_cert"]);
        }
    
        if (isset($value["local_pk"])) {
            $this->localPk = $value["local_pk"];
            unset($value["local_pk"]);
        }
    
        if (isset($value["passphrase"])) {
            $this->passphrase = $value["passphrase"];
            unset($value["passphrase"]);
        }
    
        if (isset($value["ciphers"])) {
            $this->ciphers = $value["ciphers"];
            unset($value["ciphers"]);
        }
    
        if (isset($value["peer_fingerprint"])) {
            $this->peerFingerprint = new PeerFingerprintConfig($value["peer_fingerprint"]);
            unset($value["peer_fingerprint"]);
        }
    
        if (isset($value["retry_failed"])) {
            $this->retryFailed = new RetryFailedConfig($value["retry_failed"]);
            unset($value["retry_failed"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->scope) {
            $output["scope"] = $this->scope;
        }
        if (null !== $this->baseUri) {
            $output["base_uri"] = $this->baseUri;
        }
        if (null !== $this->authBasic) {
            $output["auth_basic"] = $this->authBasic;
        }
        if (null !== $this->authBearer) {
            $output["auth_bearer"] = $this->authBearer;
        }
        if (null !== $this->authNtlm) {
            $output["auth_ntlm"] = $this->authNtlm;
        }
        if (null !== $this->query) {
            $output["query"] = $this->query;
        }
        if (null !== $this->headers) {
            $output["headers"] = $this->headers;
        }
        if (null !== $this->maxRedirects) {
            $output["max_redirects"] = $this->maxRedirects;
        }
        if (null !== $this->httpVersion) {
            $output["http_version"] = $this->httpVersion;
        }
        if (null !== $this->resolve) {
            $output["resolve"] = $this->resolve;
        }
        if (null !== $this->proxy) {
            $output["proxy"] = $this->proxy;
        }
        if (null !== $this->noProxy) {
            $output["no_proxy"] = $this->noProxy;
        }
        if (null !== $this->timeout) {
            $output["timeout"] = $this->timeout;
        }
        if (null !== $this->maxDuration) {
            $output["max_duration"] = $this->maxDuration;
        }
        if (null !== $this->bindto) {
            $output["bindto"] = $this->bindto;
        }
        if (null !== $this->verifyPeer) {
            $output["verify_peer"] = $this->verifyPeer;
        }
        if (null !== $this->verifyHost) {
            $output["verify_host"] = $this->verifyHost;
        }
        if (null !== $this->cafile) {
            $output["cafile"] = $this->cafile;
        }
        if (null !== $this->capath) {
            $output["capath"] = $this->capath;
        }
        if (null !== $this->localCert) {
            $output["local_cert"] = $this->localCert;
        }
        if (null !== $this->localPk) {
            $output["local_pk"] = $this->localPk;
        }
        if (null !== $this->passphrase) {
            $output["passphrase"] = $this->passphrase;
        }
        if (null !== $this->ciphers) {
            $output["ciphers"] = $this->ciphers;
        }
        if (null !== $this->peerFingerprint) {
            $output["peer_fingerprint"] = $this->peerFingerprint->toArray();
        }
        if (null !== $this->retryFailed) {
            $output["retry_failed"] = $this->retryFailed->toArray();
        }
    
        return $output;
    }
    

}