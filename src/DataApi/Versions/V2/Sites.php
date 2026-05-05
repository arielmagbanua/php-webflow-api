<?php

declare(strict_types=1);

namespace ArielMagbanua\PhpWebflowApi\DataApi\Versions\V2;

use ArielMagbanua\PhpWebflowApi\DataApi\Sites\Contracts\Sites as SitesContract;

/**
 * The Sites class for the Webflow API
 *
 * @package ArielMagbanua\PhpWebflowApi\DataApi\Sites\V2
 * @todo Create a test for this class
 */
class Sites extends SitesContract
{
    /**
     * The Sites constructor
     *
     * @param string $accessToken The access token
     */
    public function __construct(string $accessToken)
    {
        parent::__construct(accessToken: $accessToken, version: 'v2');
    }

    /**
     * List of all sites the provided access token is able to access.
     */
    public function listSites(): ?array
    {
        return $this->sendRequest(
            method: 'GET',
            uri: 'sites',
        );
    }

    /**
     * Get details of a site.
     *
     * @param string $siteId The site ID
     */
    public function getSite(string $siteId): ?array
    {
        return $this->sendRequest(
            method: 'GET',
            uri: 'sites/' . $siteId,
        );
    }

    /**
     * Get a list of all custom domains related to site.
     *
     * @param string $siteId The site ID
     * @return array|null
     */
    public function getCustomDomains(string $siteId): ?array
    {
        return $this->sendRequest(
            method: 'GET',
            uri: 'sites/' . $siteId . '/custom_domains',
        );
    }

    /**
     * Publishes a site or an individual page to one or more domains.
     * If multiple individual pages are published to staging, publishing from staging to production publishes all staged changes.
     *
     * @param string $siteId
     * @return array|null
     */
    public function publishSite(string $siteId): ?array
    {
        return $this->sendRequest(
            method: 'POST',
            uri: 'sites/' . $siteId . '/publish',
        );
    }
}
