<?php

require_once 'Ipv6TestCase.php';

class FilterTest extends Ipv6TestCase
{
    /**
     * @dataProvider addressProvider
     */
    public function testWithAddress($address, $valid)
    {
        $this->assertEquals(
            $valid,
            filter_var(trim($address), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false
        );
    }
}
