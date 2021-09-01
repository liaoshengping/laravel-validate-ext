<?php


namespace Liaosp\LaravelValidateExt;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class LaravelValidateExtProvider extends ServiceProvider
{
    private $validate_names = [
 //      'chsDash' => ':attribute只能是汉字、字母、数字和下划线_及破折号-',
        'chs' => '只能是汉字',
        'chsAlphaNum' => '只能是汉字、字母和数字',
        'chsAlpha' => '只能是汉字、字母',
        'chsDash' => '只能是汉字、字母、数字和下划线_及破折号-',
        'mobile' => '输入正确的手机号',
        'idCard' => '输入正确的身份证',

    ];


    public function boot()
    {
        foreach ($this->validate_names as $name => $message) {
            Validator::extend($name, 'Liaosp\LaravelValidateExt\Validates@' . $name, $message);
        }
    }


}