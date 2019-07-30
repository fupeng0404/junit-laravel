<h1 align="center"> junit-laravel </h1>

<p align="center"> 这是一个基于laravel框架的单元测试组件.</p>

## 框架要求
Laravel >= 5.1

## 安装

```shell
$ composer require fupeng/junit-laravel -vvv
```

## 配置
方法1：在 "config/app.php" providers数组中注册服务提供者，增加：Fupeng\JunitLaravel\Providers\JunitServiceProvider::class

方法2：在composer.json中引入该依赖，例如：
```
"extra":{
    "laravel":{
        "providers":[
            "Fupeng\\JunitLaravel\\Providers\\JunitServiceProvider"
        ]
    }
}
```

## 访问方式
查看路由列表
```
php artisan route:list

| GET|HEAD  | junit |              | Fupeng\JunitLaravel\Http\Controllers\JunitController@index | web |
| POST      | junit | junit.store  | Fupeng\JunitLaravel\Http\Controllers\JunitController@store | web |

```

## License

MIT