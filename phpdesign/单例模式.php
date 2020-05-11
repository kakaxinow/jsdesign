<!-- php设计模式---单例模式 -->
<?php
class Single
{
    private static $instance = null;

    /**
     * 禁止外部new 实例
     * Single constructor.
     */
    private function __construct()
    {
    }

    /**
     * 禁止外部克隆对象
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 如果$instance 为空，就new一个实例，赋值后返回，如果不为空，就直接返回
     * @return Single|null
     */
    public function getInstance(){
        if(!self::$instance){
            self::$instance = new Single();
        }
        return self::$instance;
    }


}
