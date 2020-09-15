## Install

See this: https://github.com/aschmelyun/laravel-scheduled-tasks-docker

```
git clone github.com/curder/laravel-docker-demo.git laravel-docker-demo

cd laravel-docker-demo
composer install -vvv
cp .env.example .env
```

## Usage


### Docker composer build

```
docker-compose up -d --build app
```

以下是为我们的Web服务器构建的，其暴露端口详细说明：

- **nginx** -:1080
- **MySQL** -:13306
- **PHP**   -:19000

包括三个其他容器，它们可以处理Composer，NPM和Artisan命令，而不必在本地计算机上安装这些平台。从项目根目录使用以下命令示例，并对其进行修改以适合您的特定用例。

- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate`


### 永久MySQL存储

默认情况下，无论何时关闭Docker网络，在销毁容器后，MySQL数据都将被删除。如果您希望在关闭和备份容器后保留持久性数据，请执行以下操作：

MySQL在项目根目录中`./docker/mysql/data`，在`docker-compose.yml`文件中的mysql服务下，添加以下行：

```
volumes:
  - ./docker/mysql/data:/var/lib/mysql
```
