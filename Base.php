<?php
namespace comtools;


Class Base
{
    static $instance;

    public static function Instance()
    {
        $class = get_called_class();
        if (empty(self::$instance[$class]))
        {
            self::$instance[$class] = new $class;
        }

        return self::$instance[$class];
    }
}
