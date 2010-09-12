<?php

require_once 'Tests/AeronRegexTest.php';
require_once 'Tests/DartwareRegexTest.php';
require_once 'Tests/FilterTest.php';
require_once 'Tests/PtonTest.php';
require_once 'Tests/Rfc3986RegexTest.php';

class Ipv6TestSuite extends PHPUnit_Framework_TestSuite
{
    /**
     * Main method for running this test suite
     *
     * @return void
     */
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new Ipv6TestSuite('IPv6 test suite');

        $suite->addTestSuite('AeronRegexTest');
        $suite->addTestSuite('DartwareRegexTest');
        $suite->addTestSuite('FilterTest');
        $suite->addTestSuite('PtonTest');
        $suite->addTestSuite('Rfc3986RegexTest');

        return $suite;
    }
}
