<?php

use App\Models\User;

test('the page is rendered by users', function () {

    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('backup-tasks.create'));

    $response->assertOk();

    $this->assertAuthenticatedAs($user);
});

test('the page is not rendered by guests', function () {

    $response = $this->get(route('backup-tasks.create'));

    $response->assertRedirect(route('login'));

    $this->assertGuest();
});