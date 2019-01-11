<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Response\FeedOffsetList as FeedOffsetListResponse;

/**
 * Class FeedOffsetList
 * @method FeedOffsetListResponse|ErrorResponse call(Client $client)
 */
class FeedOffsetList extends GenericRequest
{
    const ACTION = 'FeedOffsetList';

    const OFFSET = 'Offset';
    const PAGE_SIZE = 'PageSize';
    const STATUS = 'Status';
    const CREATION_DATE = 'CreationDate';
    const UPDATED_DATE = 'UpdatedDate';

    /**
     * FeedOffsetList constructor.
     */
    public function __construct($offset, $pageSize, $status, $creationDate, $updatedDate)
    {
        $query = [];

        if ($offset) $query[static::OFFSET] = (string) $offset;
        if ($pageSize) $query[static::PAGE_SIZE] = (int) $pageSize;
        if ($status) $query[static::STATUS] = (string) $status;
        if ($creationDate) $query[static::CREATION_DATE] = $creationDate;
        if ($updatedDate) $query[static::UPDATED_DATE] = $updatedDate;

        parent::__construct(
            Client::GET,
            static::ACTION,
            static::V1,
            $query
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return FeedOffsetListResponse::class;
    }
}
