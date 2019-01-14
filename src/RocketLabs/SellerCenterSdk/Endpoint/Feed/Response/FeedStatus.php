<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\Feed;

/**
 * Class FeedStatus
 */
class FeedStatus extends GenericResponse
{
    const FEEDS_KEY = 'Feeds';
    const FEED_KEY = 'Feed';

    /**
     * @var Feed
     */
    private $feed;

    /**
     * @return Feed
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        if (isset($this->body[static::FEEDS_KEY][static::FEED_KEY])) {
            $this->feed = new Feed($this->body[static::FEEDS_KEY][static::FEED_KEY]);
        }
    }
}
