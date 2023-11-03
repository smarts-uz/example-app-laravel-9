<?php

namespace Tests\Unit;

use App\Http\Controllers\UppyController;
use Tests\TestCase;

class UppyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_uploadImage()
    {
        $controller = new UppyController();
        $controller->uploadImage(request());
        $this->assertTrue(true);
    }
}
