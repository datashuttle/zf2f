<?php
/**
 * Sample Email Value Object
 *
 * Filename: EmailVo.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class EmailVo{
    protected $email;

    public function __construct($email){
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}