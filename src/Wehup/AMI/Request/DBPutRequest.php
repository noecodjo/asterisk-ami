<?php

namespace Wehup\AMI\Request;

/**
 * @returns SuccessResponse
 * @returns PermissionDeniedResponse
 */
class DBPutRequest implements RequestInterface
{

    protected $family;
    protected $key;
    protected $value;

    public function __construct($family, $key, $value)
    {
        $this->family = $family;
        $this->key = $key;
        $this->value = $value;
    }

    public function getAction()
    {
        return 'DBPut';
    }

    public function getParams()
    {
        return array(
            'Family' => $this->family,
            'Key' => $this->key,
            'Val' => $this->value
        );
    }

}
