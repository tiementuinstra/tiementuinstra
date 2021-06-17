<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to search for media items in a user's library.
 * If the album id is specified, this call will return the list of media items
 * in the album. If neither filters nor album id are
 * specified, this call will return all media items in a user's Google Photos
 * library.
 * If filters are specified, this call will return all media items in
 * the user's library that fulfill the filter criteria.
 * Filters and album id must not both be set, as this will result in an
 * invalid request.
 *
 * Generated from protobuf message <code>google.photos.library.v1.SearchMediaItemsRequest</code>
 */
class SearchMediaItemsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier of an album. If populated, lists all media items in
     * specified album. Can't set in conjunction with any filters.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     */
    protected $album_id = '';
    /**
     * Maximum number of media items to return in the response. Fewer media items
     * might be returned than the specified number. The default `pageSize` is 25,
     * the maximum is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A continuation token to get the next page of the results. Adding this to
     * the request returns the rows after the `pageToken`. The `pageToken` should
     * be the value returned in the `nextPageToken` parameter in the response to
     * the `searchMediaItems` request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Filters to apply to the request. Can't be set in conjunction with an
     * `albumId`.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.Filters filters = 4;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $album_id
     *           Identifier of an album. If populated, lists all media items in
     *           specified album. Can't set in conjunction with any filters.
     *     @type int $page_size
     *           Maximum number of media items to return in the response. Fewer media items
     *           might be returned than the specified number. The default `pageSize` is 25,
     *           the maximum is 100.
     *     @type string $page_token
     *           A continuation token to get the next page of the results. Adding this to
     *           the request returns the rows after the `pageToken`. The `pageToken` should
     *           be the value returned in the `nextPageToken` parameter in the response to
     *           the `searchMediaItems` request.
     *     @type \Google\Photos\Library\V1\Filters $filters
     *           Filters to apply to the request. Can't be set in conjunction with an
     *           `albumId`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier of an album. If populated, lists all media items in
     * specified album. Can't set in conjunction with any filters.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     * @return string
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * Identifier of an album. If populated, lists all media items in
     * specified album. Can't set in conjunction with any filters.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAlbumId($var)
    {
        GPBUtil::checkString($var, True);
        $this->album_id = $var;

        return $this;
    }

    /**
     * Maximum number of media items to return in the response. Fewer media items
     * might be returned than the specified number. The default `pageSize` is 25,
     * the maximum is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of media items to return in the response. Fewer media items
     * might be returned than the specified number. The default `pageSize` is 25,
     * the maximum is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A continuation token to get the next page of the results. Adding this to
     * the request returns the rows after the `pageToken`. The `pageToken` should
     * be the value returned in the `nextPageToken` parameter in the response to
     * the `searchMediaItems` request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A continuation token to get the next page of the results. Adding this to
     * the request returns the rows after the `pageToken`. The `pageToken` should
     * be the value returned in the `nextPageToken` parameter in the response to
     * the `searchMediaItems` request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Filters to apply to the request. Can't be set in conjunction with an
     * `albumId`.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.Filters filters = 4;</code>
     * @return \Google\Photos\Library\V1\Filters
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Filters to apply to the request. Can't be set in conjunction with an
     * `albumId`.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.Filters filters = 4;</code>
     * @param \Google\Photos\Library\V1\Filters $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Google\Photos\Library\V1\Filters::class);
        $this->filters = $var;

        return $this;
    }

}

