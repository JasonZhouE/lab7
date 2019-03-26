<?php

$response = $client->request('GET', 'https://api.github.com/user', [
        'auth' => ['user', 'pass']
]);

$client->get('photos');

$client->delete('photos/13');$response = $client->request('GET', 'https://api.github.com/user', [
        'auth' => ['user', 'pass']
]);

$client->get('photos');

$client->delete('photos/13');

