<?php


namespace Fupeng\JunitLaravel\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class JunitServiceProvider extends ServiceProvider
{
    public function register() {
        // 注册组件路由
        $this -> registerRoutes();
        // 指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'junit'
        );
    }

    public function boot() {

    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            // 定义访问路由的域名
            // 'domain' => config('telescope.domain', null),
            // 是定义路由的命名空间
            'namespace' => 'Fupeng\JunitLaravel\Http\Controllers',
            // 这是前缀
            'prefix' => 'junit',
            // 这是中间件
            'middleware' => 'web',
        ];
    }
}