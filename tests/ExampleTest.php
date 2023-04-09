<?php

use CraftCodex\OyPhpSdk\Services\Balance;
use CraftCodex\OyPhpSdk\Services\Disburse;
use Illuminate\Support\Str;

it('can get balance', function () {
    $response = Balance::make(
        username: 'oykonnco4',
        apiKey: '2f8441f0-5076-4088-a717-4d37c0c7805b'
    )->send()->json();

    $this->assertEquals($response['status']['code'], '000');
});

it('can remit balance', function () {
    $response = Disburse::make(
        username: 'oykonnco4',
        apiKey: '2f8441f0-5076-4088-a717-4d37c0c7805b'
    )
        ->ref(Str::random(10))
        ->recipient('013', '123456789')
        ->send()
        ->json();

    $this->assertEquals($response['status']['code'], '101');
});
