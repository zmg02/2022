<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * 默认使用时间戳功能
     * @var bool
     */
    public $timestamps = true;

    /**
     * 获取当前时间
     * @return \Illuminate\Support\Carbon|int
     */
    public function freshTimestamp()
    {
        return time();
    }

    /**
     * 避免转换时间戳为时间字符串
     * @param DateTime|int $value
     * @return DateTime|int
     */
    public function fromDateTime($value)
    {
        return $value;
    }

    /**
     * select的时候避免转换时间为Carbon
     * 模型对象读取字段的时候输出的是标准的日期时间字符串
     * @param mixed $value
     * @return \Illuminate\Support\Carbon|mixed
     */
//    protected function asDateTime($value)
//    {
//        return $value;
//    }

    /**
     * 从数据库获取的为时间戳格式
     * @return string
     */
    public function getDateFormat()
    {
        return 'U';
    }


}
