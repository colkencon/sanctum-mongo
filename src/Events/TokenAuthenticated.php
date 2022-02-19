<?php

namespace ColkenCon\Sanctum\Events;

class TokenAuthenticated
{
    /**
     * The personal access token that was authenticated.
     *
     * @var \ColkenCon\Sanctum\PersonalAccessToken
     */
    public $token;

    /**
     * Create a new event instance.
     *
     * @param  \ColkenCon\Sanctum\PersonalAccessToken  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
}
