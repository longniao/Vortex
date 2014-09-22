##Vortex
Vortex是一个APP推送平台，全异步非阻塞Server。


###发起人
* longniao [https://github.com/longniao]


###维护者
* longniao [https://github.com/longniao]


##特色

    1) 性能强悍 (大部分api可以在10ms内处理完)
    2) 实时推送
    3) 队列支持  (beanstalk, redis)


##相关扩展

    *生产环境推荐：
    1) https://github.com/matyhtf/swoole  (高性能socket模块)
    2）https://github.com/shenzhe/phpredis    (redis，用于cache,conn等)

    *使用react做socket，需要：
    1) 编译选项加上: --enable-pcntl --enable-sockets
    2) http://pecl.php.net/package/libevent   (libevent库)
    3) https://github.com/krakjoe/pthreads     (多线程支持，可选)


##环境要求
PHP >= 5.4
##协议

MIT license
