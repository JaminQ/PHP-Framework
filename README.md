# PHP-Framework
一个自用PHP服务端开发目录结构及架构，自行封装了一些轮子。

## 代码结构

```
PHP-Framework/
├── action/                     //action目录
│   └── action_demo.php         //action demo
├── demo/                       //demo目录
├── lib/                        //php库目录（自己造的轮子）
│   ├── console.class.php       //class: 自行编写的用于输出控制台信息到文件
│   ├── database.class.php      //class: 自行编写的用于执行数据库操作
│   └── request.class.php       //class: 自行编写的用于处理请求
├── .gitignore                  //git忽略列表
├── config.php                  //软件配置文件
├── controller.php              //controller文件
├── index.php                   //软件主入口
└── README.md                   //架构说明书
```

## TODO
- 考虑POST请求的处理情况
- 完善console类
    - Add some interesting usage
    - Change file type to .log, make it more convenient to view on MacOS's console
- 完善database类
    - 增加debug功能
    - 完善show_error功能
- 完善request类
    - 考虑拆分为request和response两个类