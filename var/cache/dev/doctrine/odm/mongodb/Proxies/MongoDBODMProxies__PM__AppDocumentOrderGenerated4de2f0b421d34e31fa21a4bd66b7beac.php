<?php

namespace MongoDBODMProxies\__PM__\App\Document\Order;

class Generated4de2f0b421d34e31fa21a4bd66b7beac extends \App\Document\Order implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd10e1 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker6fad2 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3954a = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privateProperties3994d = [
        'productName' => [
            'App\\Document\\Order' => true,
        ],
        'userId' => [
            'App\\Document\\Order' => true,
        ],
        'quantity' => [
            'App\\Document\\Order' => true,
        ],
        'unitPrice' => [
            'App\\Document\\Order' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertieseea97 = [
        
    ];

    private static $signature4de2f0b421d34e31fa21a4bd66b7beac = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxODoiQXBwXERvY3VtZW50XE9yZGVyIjtzOjc6ImZhY3RvcnkiO3M6NDQ6IlByb3h5TWFuYWdlclxGYWN0b3J5XExhenlMb2FkaW5nR2hvc3RGYWN0b3J5IjtzOjE5OiJwcm94eU1hbmFnZXJWZXJzaW9uIjtzOjQ4OiJ2MS4wLjEyQDg0MTlmMDE1ODcxNWIzMGQ0Yjk5YTViZDM3YzZhMzk2NzE5OTRhZDciO3M6MTI6InByb3h5T3B0aW9ucyI7YToxOntzOjE3OiJza2lwcGVkUHJvcGVydGllcyI7YToxOntpOjA7czoyMjoiAEFwcFxEb2N1bWVudFxPcmRlcgBpZCI7fX19';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializer8cb43($methodName, array $parameters)
    {
        if ($this->initializationTracker6fad2 || ! $this->initializerd10e1) {
            return;
        }

        $this->initializationTracker6fad2 = true;




        $nonReferenceableProperties = new class() {
            public ?string $productName_on_App_Document_Order;
            public ?int $userId_on_App_Document_Order;
            public ?int $quantity_on_App_Document_Order;
            public ?float $unitPrice_on_App_Document_Order;
        };
        $properties = [
            '' . "\0" . 'App\\Document\\Order' . "\0" . 'productName' => & $nonReferenceableProperties->productName_on_App_Document_Order,
            '' . "\0" . 'App\\Document\\Order' . "\0" . 'userId' => & $nonReferenceableProperties->userId_on_App_Document_Order,
            '' . "\0" . 'App\\Document\\Order' . "\0" . 'quantity' => & $nonReferenceableProperties->quantity_on_App_Document_Order,
            '' . "\0" . 'App\\Document\\Order' . "\0" . 'unitPrice' => & $nonReferenceableProperties->unitPrice_on_App_Document_Order,
        ];



        $result = $this->initializerd10e1->__invoke($this, $methodName, $parameters, $this->initializerd10e1, $properties);
        static $cacheAssignApp_Document_Order;

        $cacheAssignApp_Document_Order ?? $cacheAssignApp_Document_Order = \Closure::bind(function ($instance, $nonReferenceableProperties) {
            isset($nonReferenceableProperties->productName_on_App_Document_Order) && $this->productName = $nonReferenceableProperties->productName_on_App_Document_Order;
            isset($nonReferenceableProperties->userId_on_App_Document_Order) && $this->userId = $nonReferenceableProperties->userId_on_App_Document_Order;
            isset($nonReferenceableProperties->quantity_on_App_Document_Order) && $this->quantity = $nonReferenceableProperties->quantity_on_App_Document_Order;
            isset($nonReferenceableProperties->unitPrice_on_App_Document_Order) && $this->unitPrice = $nonReferenceableProperties->unitPrice_on_App_Document_Order;
        }, $this, 'App\\Document\\Order');

        $cacheAssignApp_Document_Order($this, $nonReferenceableProperties);
        $this->initializationTracker6fad2 = false;

        return $result;
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

        \Closure::bind(function (\App\Document\Order $instance) {
            unset($instance->productName, $instance->userId, $instance->quantity, $instance->unitPrice);
        }, $instance, 'App\\Document\\Order')->__invoke($instance);

        $instance->initializerd10e1 = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializerd10e1 && ! $this->initializationTracker6fad2 && $this->callInitializer8cb43('__get', array('name' => $name));

        if (isset(self::$publicProperties3954a[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedPropertieseea97[$name])) {
            if ($this->initializationTracker6fad2) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertieseea97[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privateProperties3994d[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties3994d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker6fad2 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties3994d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

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

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializerd10e1 && $this->callInitializer8cb43('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicProperties3954a[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedPropertieseea97[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertieseea97[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privateProperties3994d[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties3994d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties3994d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializerd10e1 && $this->callInitializer8cb43('__isset', array('name' => $name));

        if (isset(self::$publicProperties3954a[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedPropertieseea97[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertieseea97[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties3994d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties3994d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializerd10e1 && $this->callInitializer8cb43('__unset', array('name' => $name));

        if (isset(self::$publicProperties3954a[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedPropertieseea97[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertieseea97[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privateProperties3994d[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties3994d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties3994d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializerd10e1 && $this->callInitializer8cb43('__clone', []);
    }

    public function __sleep()
    {
        $this->initializerd10e1 && $this->callInitializer8cb43('__sleep', []);

        return array_keys((array) $this);
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
        return $this->initializerd10e1 && $this->callInitializer8cb43('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializerd10e1;
    }
}
