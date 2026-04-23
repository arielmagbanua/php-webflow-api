<?php

declare(strict_types=1);

namespace ArielMagbanua\PhpWebflowApi\Auth;

/**
 * AccessToken class
 *
 * This class is used to store the access token and refresh token.
 *
 * @package ArielMagbanua\PhpWebflowApi\Auth
 * @author Ariel Magbanua <ariel@arielmagbanua.com>
 */
class AccessToken
{
    /**
     * The AccessToken constructor
     *
     * @param string $accessToken The access token
     * @param string|null $refreshToken The refresh token
     * @param int|null $expiresIn The expires in
     * @param string|null $tokenType The token type
     * @return void
     */
    public function __construct(
        protected string $accessToken,
        protected ?string $tokenType,
        protected ?array $scopes = [],
    ) {
        //
    }

    /**
     * Get the access token
     *
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Get the token type
     *
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * Get the scopes
     *
     * @return array
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }
}
