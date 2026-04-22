<?php

declare(strict_types=1);

namespace ArielMagbanua\PhpWebflowApi\Tests\Auth;

use ArielMagbanua\PhpWebflowApi\Auth\AccessToken;
use PHPUnit\Framework\TestCase;

class AccessTokenTest extends TestCase
{
    public function testAccessToken(): void
    {
        $accessToken = new AccessToken(
            accessToken: 'test',
            refreshToken: 'test',
            expiresIn: 1000,
            tokenType: 'Bearer',
        );

        $this->assertEquals('test', $accessToken->getAccessToken());
        $this->assertEquals('test', $accessToken->getRefreshToken());
        $this->assertEquals(1000, $accessToken->getExpiresIn());
        $this->assertEquals('Bearer', $accessToken->getTokenType());
    }
}
