<?php

namespace App\Services;

use stdClass;

class MailChimpNewsletter implements Newsletter
{
    public function __construct(protected \MailchimpMarketing\ApiClient $client)
    {
    }

    public function isEmailUnique(string $email): bool|int|string
    {
        $list ??= config('services.mailchimp.lists.subscribers');
        $membersList = $this->client->lists->getListMembersInfo($list)->members;
        return array_search($email, $membersList);
    }

    public function subscribe(string $email, string $list = null): stdClass
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
