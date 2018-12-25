# peach-rabbitmq
pear让你更畅快地编程。peach-rabbitmq是以peach-api为基础，增加RabbitMQ消费者必要服务，重整为支持队列消费服务的项目。 

### 前提准备

必要服务支持：php-cli、RabbitMQ

可选服务支持：

### 使用说明

```
cd /yourProjectParentPath

composer create-project peachpear/peach-rabbitmq yourProjectName

cd /path/yourProjectName/backend/config

ln -sf dev.php main.php
```

### 运行示例
```
cd /path/yourProjectName/public

// ticket队列消费者开始运行
php yii consumer/start ticket

// ticket队列消费者停止运行
php yii consumer/stop ticket

// ticket队列消费者重启运行
php yii consumer/restart ticket
```

#### 特别说明
其实，这个项目中最核心的就是AMQP连接RabbitMQ那一段代码，完全可以不使用框架。
之所以借用Yii2框架，就是为了方便使用日志功能，日志这一块可以注意下。

#### 目录结构
```
├── backend
|   ├── components
|   ├── config
|   ├── controllers
|   └── lib
├── common
│   ├── components
│   ├── config
│   ├── dao
│   ├── exception
│   ├── lib
│   ├── misc
│   ├── models
│   └── service
└── console
    ├── components
    ├── config
    └── controllers    
```

#### 编码规范
```
1.PHP所有 关键字 必须 全部小写（常量 true 、false 和 null 也 必须 全部小写）
2.命名model对应的class 必须 以Model结尾
3.命名service对应的class 必须 以Service结尾
4.命名dao对应的class 必须 以Dao结尾
5.数据库查询返回接口 应该 使用model对象/对象列表
6.数据库的key必须是dbname+DB形式，e.g:dbname为test,则key为testDB
7.dao目录存放sql语句或者orm
8.model目录存放对应的数据实例对象
9.service目录存放业务逻辑处理
```
