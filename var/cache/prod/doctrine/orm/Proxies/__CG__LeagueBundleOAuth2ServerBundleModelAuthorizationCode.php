<?php

namespace Proxies\__CG__\League\Bundle\OAuth2ServerBundle\Model;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AuthorizationCode extends \League\Bundle\OAuth2ServerBundle\Model\AuthorizationCode implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'identifier', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'expiry', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'userIdentifier', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'client', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'scopes', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'revoked'];
        }

        return ['__isInitialized__', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'identifier', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'expiry', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'userIdentifier', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'client', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'scopes', '' . "\0" . 'League\\Bundle\\OAuth2ServerBundle\\Model\\AuthorizationCode' . "\0" . 'revoked'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AuthorizationCode $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier(): string
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getIdentifier();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpiryDateTime(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpiryDateTime', []);

        return parent::getExpiryDateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getClient(): \League\Bundle\OAuth2ServerBundle\Model\ClientInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', []);

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function getScopes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScopes', []);

        return parent::getScopes();
    }

    /**
     * {@inheritDoc}
     */
    public function isRevoked(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRevoked', []);

        return parent::isRevoked();
    }

    /**
     * {@inheritDoc}
     */
    public function revoke(): \League\Bundle\OAuth2ServerBundle\Model\AuthorizationCodeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'revoke', []);

        return parent::revoke();
    }

}
