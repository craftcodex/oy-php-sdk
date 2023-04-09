<?php

namespace CraftCodex\OyPhpSdk\Services;

use CraftCodex\OyPhpSdk\Constants\Method;
use CraftCodex\OyPhpSdk\OyPhpSdk;

class Disburse extends OyPhpSdk
{
    protected ?string $path = "remit";

    protected array $data = [
        "recipient_bank" => "",
        "recipient_account" => "",
        "amount" => 10000,
        "note" => "",
        "partner_trx_id" => "",
        "email" => "",
    ];

    protected string $method = Method::POST;

    public function recipient(string $bankCode, string $bankAccountNumber): static
    {
        $this->data['recipient_bank'] = $bankCode;
        $this->data['recipient_account'] = $bankAccountNumber;

        return $this;
    }

    public function amount(int $amount = 10000): static
    {
        $this->data['amount'] = $amount;

        return $this;
    }

    public function note(string $note): static
    {
        $this->data['note'] = $note;

        return $this;
    }

    public function ref(string $ref): static
    {
        $this->data['partner_trx_id'] = $ref;

        return $this;
    }

    public function email(string $email): static
    {
        $this->data['email'] = $email;

        return $this;
    }
}
