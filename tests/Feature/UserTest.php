<?php

use App\Models\User;

test('Create user with name and email only', function () {
    $data = [
        'name' => 'John Doe',
        'email' => 'john@example.com'
    ];

    $user = User::create($data);
    expect($user->name)->toBe($data['name']);
});
