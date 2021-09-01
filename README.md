<h1 align="center"> Lravel 验证扩展 </h1>

[![Latest Stable Version](https://poser.pugx.org/liaosp/laravel-validate-ext/v/stable)](https://packagist.org/packages/liaosp/laravel-validate-ext)
[![Total Downloads](https://poser.pugx.org/liaosp/laravel-validate-ext/downloads)](https://packagist.org/packages/liaosp/laravel-validate-ext)
[![Daily Downloads](https://poser.pugx.org/liaosp/laravel-validate-ext/d/daily)](https://packagist.org/packages/liaosp/laravel-validate-ext)
[![License](https://poser.pugx.org/liaosp/laravel-validate-ext/license)](https://packagist.org/packages/liaosp/laravel-validate-ext)
[![StyleCI](https://styleci.io/repos/53163405/shield)](https://styleci.io/repos/53163405/)

<p align="center"> 📦Laravel 验证中文，手机号，身份号</p>


## 安装

```shell
$ composer require liaosp/laravel-validate-ext -vvv
```

## 使用

|  标识   | 说明  |
|  ----  | ----  |
| chs  | 验证某个字段的值只能是汉字 |
| chsAlpha  | 验证某个字段的值只能是汉字、字母 |
| chsAlphaNum  | 验证某个字段的值只能是汉字、字母和数字 |
| chsDash  |验证某个字段的值只能是汉字、字母、数字和下划线_及破折号- |
| mobile  |验证手机 |
| idCard  |身份证 |


```php
$data = ['name' => '小廖one'];

$v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chsAlpha']);

$this->assertTrue(!$v->fails());
```

[扩展包编写教程](https://liaosp.blog.csdn.net/article/details/120035631)

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/liaosp/laravel-validate-ext/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/liaosp/laravel-validate-ext/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT