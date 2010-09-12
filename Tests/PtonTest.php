<?php

require_once 'Ipv6TestCase.php';

class PtonTest extends Ipv6TestCase
{
    /**
     * @dataProvider addressProvider
     */
    public function testWithAddress($address, $valid)
    {
        $this->assertEquals(
            $valid,
            @inet_pton(trim($address)) !== false
        );
    }
}
