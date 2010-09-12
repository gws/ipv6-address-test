<?php

require_once 'Ipv6TestCase.php';

class AeronRegexTest extends Ipv6TestCase
{
    private $_regex = '/^\s*((?=.*::.*)(::)?([0-9A-F]{1,4}(:(?=[0-9A-F])|(?!\2)(?!\5)(::)|\z)){0,7}|((?=.*::.*)(::)?([0-9A-F]{1,4}(:(?=[0-9A-F])|(?!\7)(?!\10)(::))){0,5}|([0-9A-F]{1,4}:){6})((25[0-5]|(2[0-4]|1[0-9]|[1-9]?)[0-9])(\.(?=.)|\z)){4}|([0-9A-F]{1,4}:){7}[0-9A-F]{1,4})\s*$/i';

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
