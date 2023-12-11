<?php

namespace App\Repositories;

use App\Models\Sanctum\PersonalAccessToken;

class PersonalAccessTokenRepository
{
    protected $personalAccessToken;

    public function __construct(PersonalAccessToken $personalAccessToken)
    {
        $this->personalAccessToken = $personalAccessToken;
    }

    public function findByToken(string $token)
    {
        $token = PersonalAccessToken::findToken($token);
        return $token;
    }

}