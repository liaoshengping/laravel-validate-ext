<?php


namespace Liaosp\LaravelValidateExt;


class Validates
{


    /**
     * 验证某个字段的值只能是汉字、字母和数字
     */
    public function chsAlphaNum($attribute, $value)
    {
        return $this->preg('/^[\x{4e00}-\x{9fa5}a-zA-Z0-9]+$/u', $value);
    }

    /**
     * 验证某个字段的值只能是汉字
     */
    public function chs($attribute, $value)
    {
        return $this->preg('/^[\x{4e00}-\x{9fa5}]+$/u', $value);
    }

    /**
     * 验证某个字段的值只能是汉字、字母
     */
    public function chsAlpha($attribute, $value)
    {
        return $this->preg('/^[\x{4e00}-\x{9fa5}a-zA-Z]+$/u', $value);
    }

    /**
     * 验证某个字段的值只能是汉字、字母、数字和下划线_及破折号-
     */
    public function chsDash($attribute, $value)
    {
        return $this->preg('/^[\x{4e00}-\x{9fa5}a-zA-Z0-9\_\-]+$/u', $value);
    }

    /**
     * 验证某个字段的值是否为手机号
     */
    public function mobile($attribute, $value)
    {
        return $this->preg('/^1[3-9][0-9]\d{8}$/', $value);
    }

    /**
     * 验证某个字段的值是否身份证
     */
    public function idCard($attribute, $value)
    {
        return $this->preg('/(^[1-9]\d{5}(18|19|([23]\d))\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$)|(^[1-9]\d{5}\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{2}$)/', $value);
    }

    /**
     * 验证
     * @param $match
     * @return bool
     */
    private function preg($perg, $value)
    {

        return preg_match($perg, (string)$value);
    }

}