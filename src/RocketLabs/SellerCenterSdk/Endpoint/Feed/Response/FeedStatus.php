<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\Feed;

/**
 * Class FeedStatus
 */
class FeedStatus extends GenericResponse
{
    const FEED_KEY = 'FeedDetail';

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

        if (isset($this->body[static::FEED_KEY])) {
            $this->feed = new Feed($this->body[static::FEED_KEY]);
        }
    }
}