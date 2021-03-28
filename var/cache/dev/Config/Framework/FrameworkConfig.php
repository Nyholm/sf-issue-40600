<?php

namespace Config\Framework;

require_once __DIR__.'/CsrfProtectionConfig.php';
require_once __DIR__.'/FormConfig.php';
require_once __DIR__.'/HttpCacheConfig.php';
require_once __DIR__.'/EsiConfig.php';
require_once __DIR__.'/SsiConfig.php';
require_once __DIR__.'/FragmentsConfig.php';
require_once __DIR__.'/ProfilerConfig.php';
require_once __DIR__.'/WorkflowsConfig.php';
require_once __DIR__.'/RouterConfig.php';
require_once __DIR__.'/SessionConfig.php';
require_once __DIR__.'/RequestConfig.php';
require_once __DIR__.'/AssetsConfig.php';
require_once __DIR__.'/TranslatorConfig.php';
require_once __DIR__.'/ValidationConfig.php';
require_once __DIR__.'/AnnotationsConfig.php';
require_once __DIR__.'/SerializerConfig.php';
require_once __DIR__.'/PropertyAccessConfig.php';
require_once __DIR__.'/PropertyInfoConfig.php';
require_once __DIR__.'/CacheConfig.php';
require_once __DIR__.'/PhpErrorsConfig.php';
require_once __DIR__.'/WebLinkConfig.php';
require_once __DIR__.'/LockConfig.php';
require_once __DIR__.'/MessengerConfig.php';
require_once __DIR__.'/HttpClientConfig.php';
require_once __DIR__.'/MailerConfig.php';
require_once __DIR__.'/SecretsConfig.php';
require_once __DIR__.'/NotifierConfig.php';
require_once __DIR__.'/RateLimiterConfig.php';
require_once __DIR__.'/UidConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FrameworkConfig
{
    private $secret;
    private $httpMethodOverride;
    private $ide;
    private $test;
    private $defaultLocale;
    private $trustedHosts;
    private $trustedProxies;
    private $trustedHeaders;
    private $errorController;
    private $csrfProtection;
    private $form;
    private $httpCache;
    private $esi;
    private $ssi;
    private $fragments;
    private $profiler;
    private $workflows;
    private $router;
    private $session;
    private $request;
    private $assets;
    private $translator;
    private $validation;
    private $annotations;
    private $serializer;
    private $propertyAccess;
    private $propertyInfo;
    private $cache;
    private $phpErrors;
    private $webLink;
    private $lock;
    private $messenger;
    private $disallowSearchEngineIndex;
    private $httpClient;
    private $mailer;
    private $secrets;
    private $notifier;
    private $rateLimiter;
    private $uid;
    
    /**
     * @default NULL
     */
    public function setSecret( $value): self
    {
        $this->secret = $value;
    
        return $this;
    }
    
    /**
     * Set true to enable support for the '_method' request parameter to determine the intended HTTP method on POST requests. Note: When using the HttpCache, you need to call the method in your front controller instead
     * @default true
     */
    public function setHttpMethodOverride( $value): self
    {
        $this->httpMethodOverride = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setIde( $value): self
    {
        $this->ide = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setTest(bool $value): self
    {
        $this->test = $value;
    
        return $this;
    }
    
    /**
     * @default 'en'
     */
    public function setDefaultLocale( $value): self
    {
        $this->defaultLocale = $value;
    
        return $this;
    }
    
    public function addTrustedHosts( $value): self
    {
        $this->trustedHosts[] = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setTrustedProxies( $value): self
    {
        $this->trustedProxies = $value;
    
        return $this;
    }
    
    public function addTrustedHeaders(string $value): self
    {
        $this->trustedHeaders[] = $value;
    
        return $this;
    }
    
    /**
     * @default 'error_controller'
     */
    public function setErrorController( $value): self
    {
        $this->errorController = $value;
    
        return $this;
    }
    
    public function addCsrfProtection(array $value = []): \Config\Framework\CsrfProtectionConfig
    {
        return $this->csrfProtection = new \Config\Framework\CsrfProtectionConfig($value);
    }
    
    public function addForm(array $value = []): \Config\Framework\FormConfig
    {
        return $this->form = new \Config\Framework\FormConfig($value);
    }
    
    public function addHttpCache(array $value = []): \Config\Framework\HttpCacheConfig
    {
        return $this->httpCache = new \Config\Framework\HttpCacheConfig($value);
    }
    
    public function addEsi(array $value = []): \Config\Framework\EsiConfig
    {
        return $this->esi = new \Config\Framework\EsiConfig($value);
    }
    
    public function addSsi(array $value = []): \Config\Framework\SsiConfig
    {
        return $this->ssi = new \Config\Framework\SsiConfig($value);
    }
    
    public function addFragments(array $value = []): \Config\Framework\FragmentsConfig
    {
        return $this->fragments = new \Config\Framework\FragmentsConfig($value);
    }
    
    public function addProfiler(array $value = []): \Config\Framework\ProfilerConfig
    {
        return $this->profiler = new \Config\Framework\ProfilerConfig($value);
    }
    
    public function addWorkflows(array $value = []): \Config\Framework\WorkflowsConfig
    {
        return $this->workflows = new \Config\Framework\WorkflowsConfig($value);
    }
    
    public function addRouter(array $value = []): \Config\Framework\RouterConfig
    {
        return $this->router = new \Config\Framework\RouterConfig($value);
    }
    
    public function addSession(array $value = []): \Config\Framework\SessionConfig
    {
        return $this->session = new \Config\Framework\SessionConfig($value);
    }
    
    public function addRequest(array $value = []): \Config\Framework\RequestConfig
    {
        return $this->request = new \Config\Framework\RequestConfig($value);
    }
    
    public function addAssets(array $value = []): \Config\Framework\AssetsConfig
    {
        return $this->assets = new \Config\Framework\AssetsConfig($value);
    }
    
    public function addTranslator(array $value = []): \Config\Framework\TranslatorConfig
    {
        return $this->translator = new \Config\Framework\TranslatorConfig($value);
    }
    
    public function addValidation(array $value = []): \Config\Framework\ValidationConfig
    {
        return $this->validation = new \Config\Framework\ValidationConfig($value);
    }
    
    public function addAnnotations(array $value = []): \Config\Framework\AnnotationsConfig
    {
        return $this->annotations = new \Config\Framework\AnnotationsConfig($value);
    }
    
    public function addSerializer(array $value = []): \Config\Framework\SerializerConfig
    {
        return $this->serializer = new \Config\Framework\SerializerConfig($value);
    }
    
    public function addPropertyAccess(array $value = []): \Config\Framework\PropertyAccessConfig
    {
        return $this->propertyAccess = new \Config\Framework\PropertyAccessConfig($value);
    }
    
    public function addPropertyInfo(array $value = []): \Config\Framework\PropertyInfoConfig
    {
        return $this->propertyInfo = new \Config\Framework\PropertyInfoConfig($value);
    }
    
    public function addCache(array $value = []): \Config\Framework\CacheConfig
    {
        return $this->cache = new \Config\Framework\CacheConfig($value);
    }
    
    public function addPhpErrors(array $value = []): \Config\Framework\PhpErrorsConfig
    {
        return $this->phpErrors = new \Config\Framework\PhpErrorsConfig($value);
    }
    
    public function addWebLink(array $value = []): \Config\Framework\WebLinkConfig
    {
        return $this->webLink = new \Config\Framework\WebLinkConfig($value);
    }
    
    public function addLock(array $value = []): \Config\Framework\LockConfig
    {
        return $this->lock = new \Config\Framework\LockConfig($value);
    }
    
    public function addMessenger(array $value = []): \Config\Framework\MessengerConfig
    {
        return $this->messenger = new \Config\Framework\MessengerConfig($value);
    }
    
    /**
     * Enabled by default when debug is enabled.
     * @default true
     */
    public function setDisallowSearchEngineIndex(bool $value): self
    {
        $this->disallowSearchEngineIndex = $value;
    
        return $this;
    }
    
    public function addHttpClient(array $value = []): \Config\Framework\HttpClientConfig
    {
        return $this->httpClient = new \Config\Framework\HttpClientConfig($value);
    }
    
    public function addMailer(array $value = []): \Config\Framework\MailerConfig
    {
        return $this->mailer = new \Config\Framework\MailerConfig($value);
    }
    
    public function addSecrets(array $value = []): \Config\Framework\SecretsConfig
    {
        return $this->secrets = new \Config\Framework\SecretsConfig($value);
    }
    
    public function addNotifier(array $value = []): \Config\Framework\NotifierConfig
    {
        return $this->notifier = new \Config\Framework\NotifierConfig($value);
    }
    
    public function addRateLimiter(array $value = []): \Config\Framework\RateLimiterConfig
    {
        return $this->rateLimiter = new \Config\Framework\RateLimiterConfig($value);
    }
    
    public function addUid(array $value = []): \Config\Framework\UidConfig
    {
        return $this->uid = new \Config\Framework\UidConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["secret"])) {
            $this->secret = $value["secret"];
            unset($value["secret"]);
        }
    
        if (isset($value["http_method_override"])) {
            $this->httpMethodOverride = $value["http_method_override"];
            unset($value["http_method_override"]);
        }
    
        if (isset($value["ide"])) {
            $this->ide = $value["ide"];
            unset($value["ide"]);
        }
    
        if (isset($value["test"])) {
            $this->test = $value["test"];
            unset($value["test"]);
        }
    
        if (isset($value["default_locale"])) {
            $this->defaultLocale = $value["default_locale"];
            unset($value["default_locale"]);
        }
    
        if (isset($value["trusted_hosts"])) {
            $this->trustedHosts = $value["trusted_hosts"];
            unset($value["trusted_hosts"]);
        }
    
        if (isset($value["trusted_proxies"])) {
            $this->trustedProxies = $value["trusted_proxies"];
            unset($value["trusted_proxies"]);
        }
    
        if (isset($value["trusted_headers"])) {
            $this->trustedHeaders = $value["trusted_headers"];
            unset($value["trusted_headers"]);
        }
    
        if (isset($value["error_controller"])) {
            $this->errorController = $value["error_controller"];
            unset($value["error_controller"]);
        }
    
        if (isset($value["csrf_protection"])) {
            $this->csrfProtection = new CsrfProtectionConfig($value["csrf_protection"]);
            unset($value["csrf_protection"]);
        }
    
        if (isset($value["form"])) {
            $this->form = new FormConfig($value["form"]);
            unset($value["form"]);
        }
    
        if (isset($value["http_cache"])) {
            $this->httpCache = new HttpCacheConfig($value["http_cache"]);
            unset($value["http_cache"]);
        }
    
        if (isset($value["esi"])) {
            $this->esi = new EsiConfig($value["esi"]);
            unset($value["esi"]);
        }
    
        if (isset($value["ssi"])) {
            $this->ssi = new SsiConfig($value["ssi"]);
            unset($value["ssi"]);
        }
    
        if (isset($value["fragments"])) {
            $this->fragments = new FragmentsConfig($value["fragments"]);
            unset($value["fragments"]);
        }
    
        if (isset($value["profiler"])) {
            $this->profiler = new ProfilerConfig($value["profiler"]);
            unset($value["profiler"]);
        }
    
        if (isset($value["workflows"])) {
            $this->workflows = new WorkflowsConfig($value["workflows"]);
            unset($value["workflows"]);
        }
    
        if (isset($value["router"])) {
            $this->router = new RouterConfig($value["router"]);
            unset($value["router"]);
        }
    
        if (isset($value["session"])) {
            $this->session = new SessionConfig($value["session"]);
            unset($value["session"]);
        }
    
        if (isset($value["request"])) {
            $this->request = new RequestConfig($value["request"]);
            unset($value["request"]);
        }
    
        if (isset($value["assets"])) {
            $this->assets = new AssetsConfig($value["assets"]);
            unset($value["assets"]);
        }
    
        if (isset($value["translator"])) {
            $this->translator = new TranslatorConfig($value["translator"]);
            unset($value["translator"]);
        }
    
        if (isset($value["validation"])) {
            $this->validation = new ValidationConfig($value["validation"]);
            unset($value["validation"]);
        }
    
        if (isset($value["annotations"])) {
            $this->annotations = new AnnotationsConfig($value["annotations"]);
            unset($value["annotations"]);
        }
    
        if (isset($value["serializer"])) {
            $this->serializer = new SerializerConfig($value["serializer"]);
            unset($value["serializer"]);
        }
    
        if (isset($value["property_access"])) {
            $this->propertyAccess = new PropertyAccessConfig($value["property_access"]);
            unset($value["property_access"]);
        }
    
        if (isset($value["property_info"])) {
            $this->propertyInfo = new PropertyInfoConfig($value["property_info"]);
            unset($value["property_info"]);
        }
    
        if (isset($value["cache"])) {
            $this->cache = new CacheConfig($value["cache"]);
            unset($value["cache"]);
        }
    
        if (isset($value["php_errors"])) {
            $this->phpErrors = new PhpErrorsConfig($value["php_errors"]);
            unset($value["php_errors"]);
        }
    
        if (isset($value["web_link"])) {
            $this->webLink = new WebLinkConfig($value["web_link"]);
            unset($value["web_link"]);
        }
    
        if (isset($value["lock"])) {
            $this->lock = new LockConfig($value["lock"]);
            unset($value["lock"]);
        }
    
        if (isset($value["messenger"])) {
            $this->messenger = new MessengerConfig($value["messenger"]);
            unset($value["messenger"]);
        }
    
        if (isset($value["disallow_search_engine_index"])) {
            $this->disallowSearchEngineIndex = $value["disallow_search_engine_index"];
            unset($value["disallow_search_engine_index"]);
        }
    
        if (isset($value["http_client"])) {
            $this->httpClient = new HttpClientConfig($value["http_client"]);
            unset($value["http_client"]);
        }
    
        if (isset($value["mailer"])) {
            $this->mailer = new MailerConfig($value["mailer"]);
            unset($value["mailer"]);
        }
    
        if (isset($value["secrets"])) {
            $this->secrets = new SecretsConfig($value["secrets"]);
            unset($value["secrets"]);
        }
    
        if (isset($value["notifier"])) {
            $this->notifier = new NotifierConfig($value["notifier"]);
            unset($value["notifier"]);
        }
    
        if (isset($value["rate_limiter"])) {
            $this->rateLimiter = new RateLimiterConfig($value["rate_limiter"]);
            unset($value["rate_limiter"]);
        }
    
        if (isset($value["uid"])) {
            $this->uid = new UidConfig($value["uid"]);
            unset($value["uid"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->secret) {
            $output["secret"] = $this->secret;
        }
        if (null !== $this->httpMethodOverride) {
            $output["http_method_override"] = $this->httpMethodOverride;
        }
        if (null !== $this->ide) {
            $output["ide"] = $this->ide;
        }
        if (null !== $this->test) {
            $output["test"] = $this->test;
        }
        if (null !== $this->defaultLocale) {
            $output["default_locale"] = $this->defaultLocale;
        }
        if (null !== $this->trustedHosts) {
            $output["trusted_hosts"] = $this->trustedHosts;
        }
        if (null !== $this->trustedProxies) {
            $output["trusted_proxies"] = $this->trustedProxies;
        }
        if (null !== $this->trustedHeaders) {
            $output["trusted_headers"] = $this->trustedHeaders;
        }
        if (null !== $this->errorController) {
            $output["error_controller"] = $this->errorController;
        }
        if (null !== $this->csrfProtection) {
            $output["csrf_protection"] = $this->csrfProtection->toArray();
        }
        if (null !== $this->form) {
            $output["form"] = $this->form->toArray();
        }
        if (null !== $this->httpCache) {
            $output["http_cache"] = $this->httpCache->toArray();
        }
        if (null !== $this->esi) {
            $output["esi"] = $this->esi->toArray();
        }
        if (null !== $this->ssi) {
            $output["ssi"] = $this->ssi->toArray();
        }
        if (null !== $this->fragments) {
            $output["fragments"] = $this->fragments->toArray();
        }
        if (null !== $this->profiler) {
            $output["profiler"] = $this->profiler->toArray();
        }
        if (null !== $this->workflows) {
            $output["workflows"] = $this->workflows->toArray();
        }
        if (null !== $this->router) {
            $output["router"] = $this->router->toArray();
        }
        if (null !== $this->session) {
            $output["session"] = $this->session->toArray();
        }
        if (null !== $this->request) {
            $output["request"] = $this->request->toArray();
        }
        if (null !== $this->assets) {
            $output["assets"] = $this->assets->toArray();
        }
        if (null !== $this->translator) {
            $output["translator"] = $this->translator->toArray();
        }
        if (null !== $this->validation) {
            $output["validation"] = $this->validation->toArray();
        }
        if (null !== $this->annotations) {
            $output["annotations"] = $this->annotations->toArray();
        }
        if (null !== $this->serializer) {
            $output["serializer"] = $this->serializer->toArray();
        }
        if (null !== $this->propertyAccess) {
            $output["property_access"] = $this->propertyAccess->toArray();
        }
        if (null !== $this->propertyInfo) {
            $output["property_info"] = $this->propertyInfo->toArray();
        }
        if (null !== $this->cache) {
            $output["cache"] = $this->cache->toArray();
        }
        if (null !== $this->phpErrors) {
            $output["php_errors"] = $this->phpErrors->toArray();
        }
        if (null !== $this->webLink) {
            $output["web_link"] = $this->webLink->toArray();
        }
        if (null !== $this->lock) {
            $output["lock"] = $this->lock->toArray();
        }
        if (null !== $this->messenger) {
            $output["messenger"] = $this->messenger->toArray();
        }
        if (null !== $this->disallowSearchEngineIndex) {
            $output["disallow_search_engine_index"] = $this->disallowSearchEngineIndex;
        }
        if (null !== $this->httpClient) {
            $output["http_client"] = $this->httpClient->toArray();
        }
        if (null !== $this->mailer) {
            $output["mailer"] = $this->mailer->toArray();
        }
        if (null !== $this->secrets) {
            $output["secrets"] = $this->secrets->toArray();
        }
        if (null !== $this->notifier) {
            $output["notifier"] = $this->notifier->toArray();
        }
        if (null !== $this->rateLimiter) {
            $output["rate_limiter"] = $this->rateLimiter->toArray();
        }
        if (null !== $this->uid) {
            $output["uid"] = $this->uid->toArray();
        }
    
        return $output;
    }
    

}
