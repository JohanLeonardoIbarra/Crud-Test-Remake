<?php

namespace ContainerUcYchce;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera1273 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd10e1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3954a = [
        
    ];

    public function getConnection()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getConnection', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getMetadataFactory', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getExpressionBuilder', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'beginTransaction', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getCache', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'transactional', array('func' => $func), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'commit', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->commit();
    }

    public function rollback()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'rollback', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getClassMetadata', array('className' => $className), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'createQuery', array('dql' => $dql), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'createNamedQuery', array('name' => $name), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'createQueryBuilder', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'flush', array('entity' => $entity), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'clear', array('entityName' => $entityName), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->clear($entityName);
    }

    public function close()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'close', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->close();
    }

    public function persist($entity)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'persist', array('entity' => $entity), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'remove', array('entity' => $entity), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'refresh', array('entity' => $entity), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'detach', array('entity' => $entity), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'merge', array('entity' => $entity), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'contains', array('entity' => $entity), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getEventManager', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getConfiguration', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'isOpen', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getUnitOfWork', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getProxyFactory', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'initializeObject', array('obj' => $obj), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'getFilters', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'isFiltersStateClean', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'hasFilters', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return $this->valueHoldera1273->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd10e1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera1273) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera1273 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera1273->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, '__get', ['name' => $name], $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        if (isset(self::$publicProperties3954a[$name])) {
            return $this->valueHoldera1273->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1273;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera1273;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1273;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera1273;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, '__isset', array('name' => $name), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1273;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera1273;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, '__unset', array('name' => $name), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1273;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera1273;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, '__clone', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        $this->valueHoldera1273 = clone $this->valueHoldera1273;
    }

    public function __sleep()
    {
        $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, '__sleep', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;

        return array('valueHoldera1273');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd10e1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd10e1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd10e1 && ($this->initializerd10e1->__invoke($valueHoldera1273, $this, 'initializeProxy', array(), $this->initializerd10e1) || 1) && $this->valueHoldera1273 = $valueHoldera1273;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1273;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1273;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
