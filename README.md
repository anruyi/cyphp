# cyphp
My first php framework named cyphp

point

```php
public function __construct()
    {
        /**
         * 路由器
         */
        //根目录 cyphp，具体需要修改
        if(isset($_SERVER[REQUEST_URI]) && $_SERVER[REQUEST_URI] != 'cyphp/')
    }

```