<?php

namespace ContainerUhNYk86;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6fa5a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb09b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties422a3 = [
        
    ];

    public function getConnection()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getConnection', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getMetadataFactory', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getExpressionBuilder', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'beginTransaction', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getCache', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getCache();
    }

    public function transactional($func)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'transactional', array('func' => $func), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'wrapInTransaction', array('func' => $func), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'commit', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->commit();
    }

    public function rollback()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'rollback', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getClassMetadata', array('className' => $className), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'createQuery', array('dql' => $dql), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'createNamedQuery', array('name' => $name), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'createQueryBuilder', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'flush', array('entity' => $entity), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'clear', array('entityName' => $entityName), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->clear($entityName);
    }

    public function close()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'close', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->close();
    }

    public function persist($entity)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'persist', array('entity' => $entity), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'remove', array('entity' => $entity), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'refresh', array('entity' => $entity), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'detach', array('entity' => $entity), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'merge', array('entity' => $entity), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getRepository', array('entityName' => $entityName), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'contains', array('entity' => $entity), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getEventManager', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getConfiguration', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'isOpen', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getUnitOfWork', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getProxyFactory', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'initializeObject', array('obj' => $obj), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'getFilters', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'isFiltersStateClean', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'hasFilters', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return $this->valueHolder6fa5a->hasFilters();
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

        $instance->initializereb09b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6fa5a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6fa5a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6fa5a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, '__get', ['name' => $name], $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        if (isset(self::$publicProperties422a3[$name])) {
            return $this->valueHolder6fa5a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fa5a;

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

        $targetObject = $this->valueHolder6fa5a;
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
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fa5a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6fa5a;
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
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, '__isset', array('name' => $name), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fa5a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6fa5a;
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
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, '__unset', array('name' => $name), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fa5a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6fa5a;
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
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, '__clone', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        $this->valueHolder6fa5a = clone $this->valueHolder6fa5a;
    }

    public function __sleep()
    {
        $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, '__sleep', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;

        return array('valueHolder6fa5a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereb09b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereb09b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereb09b && ($this->initializereb09b->__invoke($valueHolder6fa5a, $this, 'initializeProxy', array(), $this->initializereb09b) || 1) && $this->valueHolder6fa5a = $valueHolder6fa5a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6fa5a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6fa5a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
