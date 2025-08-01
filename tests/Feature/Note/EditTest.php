<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('example2', function() {
    $this->assertTrue(true);
});
