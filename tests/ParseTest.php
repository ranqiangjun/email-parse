<?php

namespace Email\Tests;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../src/Parse.php');

use Email\Parse;

class InflectTest extends \PHPUnit_Framework_TestCase
{
    function testParseEmailAddresses()
    {
        $tests = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . "/testspec1.yml"));

        foreach($tests as $test) {
            $emails = $test['emails'];
            $multiple = $test['multiple'];
            $expectedResult = $test['result'];
            $actualResult = Parse::getInstance()->parse($emails, $multiple);

            $this->assertSame($expectedResult, $actualResult, print_r([$emails, $multiple, json_encode($expectedResult), json_encode($actualResult)], true));
        }
    }
}
