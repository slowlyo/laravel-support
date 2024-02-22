<?php

namespace Slowlyo\Support;

use Illuminate\Support\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // 注入宏
        Macro::handle();

        // 记录 sql
        SqlRecord::listen();
    }
}
