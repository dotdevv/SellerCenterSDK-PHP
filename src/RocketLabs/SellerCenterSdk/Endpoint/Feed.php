<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Feed\Request\FeedList;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Request\FeedOffsetList;

/**
 * Class Feed
 */
class Feed
{
    /**
     * @return FeedList
     */
    public function feedList()
    {
        return new FeedList();
    }

    /**
     * @return FeedOffsetList
     */
    public function feedOffsetList($offset = 0, $pageSize = 10, $status = null, $creationDate = null, $updatedDate = null)
    {
        return new FeedOffsetList($offset, $pageSize, $status, $creationDate, $updatedDate);
    }
}
