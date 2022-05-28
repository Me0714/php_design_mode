<?php
/**
 * 单例模式
 * 4私1公；
 * 私有化构造方法： 防止使用 new 创建多个实例；
 * 私有化克隆方法： 防止 clone 多个实例；
 * 私有化重建方法： 防止反序列化
 * 私有化静态属性： 防止直接访问存储实例的属性
 * 使用：常见使用在数据库实例化
 */

class DB {
    private static $instance = null;
    public static function getInstance(){
        if(null == self::$instance){
            //new static 和 new self区别
            //new self 指的是第一次new的类
            //new static 延迟静态绑定 绑定的是当前调用的类
            self::$instance =  new static();
        }
        return self::$instance;
    }
    private function __construct(){

    }
    private function __clone(){

    }
    private function __wakeup(){

    }

}

 $db1 = DB::getInstance();
 $db2 = DB::getInstance();
 $db3 = DB::getInstance();
 var_dump($db1);
 var_dump($db2);
 var_dump($db3);