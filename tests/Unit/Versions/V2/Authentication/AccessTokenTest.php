<?php

declare(strict_types=1);

namespace ArielMagbanua\PhpWebflowApi\Tests\Unit\Versions\V2\Authentication;

use ArielMagbanua\PhpWebflowApi\DataApi\Versions\V2\Authentication\AccessToken;
use PHPUnit\Framework\TestCase;

class AccessTokenTest extends TestCase
{
    public function testAccessToken(): void
    {
        $accessToken = new AccessToken(
            accessToken: 'test',
            scopes: ['test'],
            tokenType: 'Bearer',
        );

        $this->assertEquals('test', $accessToken->getAccessToken());
        $this->assertEquals(['test'], $accessToken->getScopes());
        $this->assertEquals('Bearer', $accessToken->getTokenType());
    }
}
