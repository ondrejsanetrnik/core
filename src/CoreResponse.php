<?php

namespace Ondrejsanetrnik\Core;


/**
 * Class that is used to communicate redirects to the user from various places in the aplication
 */
class CoreResponse
{
    /**
     * Mesage explaining why the action was unsucessful
     *
     * @var string $message
     */
    public $message;

    /**
     * Sucessful?
     *
     * @var bool $success
     */
    public $success;

    /**
     * Data passed with success
     *
     * @var mixed $data
     */
    public $data;

    /**
     * Sets the response as sucessful. Optionally passes some data
     *
     * @param mixed $data
     * @return CoreResponse
     */
    public function success(mixed $data = null): CoreResponse
    {
        $this->success = true;
        if ($data) $this->setData($data);
        return $this;
    }

    /**
     * Sets the data of the response
     *
     * @param mixed $data
     * @return CoreResponse
     */
    public function setData(mixed $data): CoreResponse
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Sets the response as unsucessful
     *
     * @param string $message
     * @return CoreResponse
     */
    public function fail(string $message): CoreResponse
    {
        $this->success = false;
        $this->message = $message;
        return $this;
    }
}
