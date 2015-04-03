<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    /**
     * アプリケーションの生成
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }

}
