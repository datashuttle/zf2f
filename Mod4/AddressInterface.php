<?php
/**
 * Sample Address Interface
 *
 * Filename: AddressInterface.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

Interface AddressInterface
{

    public function getAddress1();

    public function setAddress1();

    public function getAddress2();

    public function setAddress2();

    public function getCity();

    public function setCity();

    public function getStateProv();

    public function setStateProv();

    public function getMailCode();

    public function setMailCode();
}