<?php

require_once 'Ipv6TestCase.php';

class Aeron3RegexTest extends Ipv6TestCase
{
    private $_regex = '/^(((?=(?>.*?::)(?!.*::)))(::)?([0-9A-F]{1,4}::?){0,5}|([0-9A-F]{1,4}:){6})(\2([0-9A-F]{1,4}(::?|$)){0,2}|((25[0-5]|(2[0-4]|1\d|[1-9])?\d)(\.|$)){4}|[0-9A-F]{1,4}:[0-9A-F]{1,4})(?<![^:]:|\.)\z/';

    /**
     * @dataProvider addressProvider
     */
    public function testWithAddress($address, $valid)
    {
        $this->assertEquals(
            $valid,
            preg_match($this->_regex, $address) > 0
        );
    }
}
