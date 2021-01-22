<?php

namespace App\Http\Controllers\Helpers;

class MyConstants
{
    const API_INVALID_REQUEST_CODE = 1;
    const API_INVALID_REQUEST_MSG = 'Invalid Request';

    const API_NON_UNIQUE_PHONE_CODE = 2;
    const API_NON_UNIQUE_PHONE_MSG = 'Non-unique phone number';

    const API_NON_UNIQUE_AGENTID_CODE = 2;
    const API_NON_UNIQUE_AGENTID_MSG = 'Non-unique agent ID';

    const API_NON_EMAIL_CODE = 3;
    const API_NON_EMAIL_MSG = 'Non-unique email';

    const API_GENERAL_ERROR_CODE = 4;
    const API_GENERAL_ERROR_MSG = 'Unknown error';
}
