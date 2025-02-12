<?php declare(strict_types = 1);

namespace DnsMadeEasy\Tests\Unit;

use DnsMadeEasy\Client;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testCreateClient(): void
    {
        $client = new Client();

        Assert::assertSame('https://api.dnsmadeeasy.com/V2.0', $client->getEndpoint());
    }
}
