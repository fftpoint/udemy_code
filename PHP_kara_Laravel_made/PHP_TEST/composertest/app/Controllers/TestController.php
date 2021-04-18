<?php

namespace App\Controllers;

use App\Models\TestModel;
use App\Models\TestModes;

class TestController
{
    public function run() {
        $model = new TestModel;
        echo $model->getHello();
    }
}
