<?php
declare(strict_types=1);

use Tests\TestCase;

class ValidateTest extends TestCase
{
    /**
     * 验证某个字段的值只能是汉字、字母和数字
     */
    public function testChsAlphaNum()
    {
        $data = ['name' => '小L'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chsAlphaNum']);

        $this->assertTrue(!$v->fails());

        $data = ['name' => '小L.'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chsAlphaNum']);

        $this->assertFalse(!$v->fails());
    }


    /**
     * 验证某个字段的值只能是汉字
     */
    public function testChs()
    {
        $data = ['name' => '小廖'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chs']);

        $this->assertTrue(!$v->fails());

        $data = ['name' => '小廖one'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chs']);

        $this->assertFalse(!$v->fails());
    }

    /**
     * 验证某个字段的值只能是汉字、字母
     */
    public function testChsAlpha()
    {
        $data = ['name' => '小廖one'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chsAlpha']);

        $this->assertTrue(!$v->fails());

        $data = ['name' => '小廖one11,,'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chsAlpha']);

        $this->assertFalse(!$v->fails());
    }

    /**
     * 验证某个字段的值只能是汉字、字母、数字和下划线_及破折号-
     */
    public function testChsDash()
    {
        $data = ['name' => '小廖one_-'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chsDash']);

        $this->assertTrue(!$v->fails());

        $data = ['name' => '小廖one11,,?????'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['name' => 'chsDash']);

        $this->assertFalse(!$v->fails());
    }

    /**
     * 验证某个字段的值是否为手机号
     */
    public function testMobile()
    {
        $data = ['phone' => '15080206811'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['phone' => 'mobile']);

        $this->assertTrue(!$v->fails());

        $data = ['phone' => '150802068'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['phone' => 'mobile']);

        $this->assertFalse(!$v->fails());
    }

    /**
     * 验证某个字段的值是否身份证
     */
    public function testIdCard()
    {
        $data = ['idCard' => '110101199003071970'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['idCard' => 'idCard']);

        $this->assertTrue(!$v->fails());

        $data = ['idCard' => '11010119900307197'];

        $v = \Illuminate\Support\Facades\Validator::make($data, ['idCard' => 'idCard']);

        $this->assertFalse(!$v->fails());
    }
}