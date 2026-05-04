<?php

declare(strict_types=1);

namespace ArielMagbanua\PhpWebflowApi\DataApi\Versions\V2;

use ArielMagbanua\PhpWebflowApi\DataApi\Api;

/**
 * The Sites contract for the Webflow API
 *
 * @package ArielMagbanua\PhpWebflowApi\Versions\V2
 * @author Ariel Magbanua <ariel@arielmagbanua.com>
 */
abstract class Sites extends Api
{
    /**
     * The Sites constructor
     *
     * @param string $accessToken The access token
     */
    public function __construct(string $accessToken, string $version)
    {
        parent::__construct(accessToken: $accessToken, version: $version);
    }

    /**
     * List of all sites the provided access token is able to access.
     */
    abstract public function listSites(): ?array;

    /**
     * Get details of a site.
     *
     * @param string $siteId The site ID
     */
    abstract public function getSite(string $siteId): ?array;

    /**
     * Get a list of all custom domains related to site.
     *
     * @param string $siteId The site ID
     * @return array|null
     */
    abstract public function getCustomDomains(string $siteId): ?array;

    /**
     * Publishes a site or an individual page to one or more domains.
     * If multiple individual pages are published to staging, publishing from staging to production publishes all staged changes.
     *
     * @param string $siteId
     * @return array|null
     */
    abstract public function publishSite(string $siteId): ?array;
}
