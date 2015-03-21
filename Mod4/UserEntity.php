<?php
/**
 * Sample UserEntity Dependencies
 *
 * Filename: UserEntity.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace HardDependency {
    use AddressEntity;
    use EmailVo;

    /** Example of a hard dependency for an address entity instance
     *
     */
    class UserEntity
    {

        protected $addresses;
        protected $emails;

        public function __construct(array $params)
        {
            $this->addresses[] = new AddressEntity($params);
            $this->emails[] = new EmailVo($params['email']);
        }

    }
}

namespace ConstructorDependency {

    /**
     * Example of a constructor dependency for an address entity instance
     */
    class UserEntity
    {
        protected $addresses;
        protected $emails;
        protected $params;

        public function __construct(\AddressInterface $address, \EmailVo $email, array $params)
        {
            $this->$param = $params;
            $this->addresses[] = $address;
            $this->emails[] = $email;
        }
    }
}

namespace SoftDependency {

    /**
     * Example of a soft dependency for an address entity and email value object instance
     */
    class UserEntity
    {
        protected $addresses;
        protected $emails;
        protected $params;

        public function __construct(array $params)
        {
            $this->$param = $params;
        }

        public function setAddress(\AddressInterface $address){
            $this->addresses[] = $address;
        }

        public function setEmail(\EmailVo $email){
            $this->emails[] = $email;
        }

    }
}

namespace SmDependency {

    /**
     * Example decoupling use of a IoC container abstraction service manager($sm)
     * for an address entity and email value object instances
     */
    class UserEntity
    {
        protected $sm;
        protected $addresses;
        protected $emails;
        protected $params;

        public function __construct(\ServiceManager $sm, array $params)
        {
            $this->$param = $params;
            $this->addresses[] = $sm->get('AddressEntity');
            $this->emails[] = $sm->get('EmailEntity');
        }

        public function setAddress(\AddressInterface $address){
            $this->addresses[] = $address;
        }

        public function setEmail(\EmailVo $email){
            $this->emails[] = $email;
        }

    }
}