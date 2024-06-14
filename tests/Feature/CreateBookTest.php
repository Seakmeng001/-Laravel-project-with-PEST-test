<?php

it('has createbook page', function () {
    $response = $this->get('/createbook');

    $response->assertStatus(200);
});
