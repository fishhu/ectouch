<p align="center"><img src="https://www.ectouch.cn/images/common/logo.png"></p>

<p align="center">
<a href="https://travis-ci.org/ectouch/ectouch"><img src="https://travis-ci.org/ectouch/ectouch.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/ectouch/ectouch"><img src="https://poser.pugx.org/ectouch/ectouch/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/ectouch/ectouch"><img src="https://poser.pugx.org/ectouch/ectouch/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/ectouch/ectouch"><img src="https://poser.pugx.org/ectouch/ectouch/license.svg" alt="License"></a>
</p>

## 概况

ECTouch 是一款开源免费的商城系统，为中小企业提供最佳的移动电商解决方案。能够帮助企业和个人快速构建手机移动商城并减少二次开发带来的成本。

采用稳定的 Laravel 框架开发，执行效率、扩展性、稳定性值得信赖。可以轻松的部署到各个平台，大大提高开发效率。

- 移动端社会化登录
- 短信验证码功能
- 微信公众平台对接
- 订单快递包裹跟踪
- 多种渠道支付接口
- 数据与ecshop无缝对接

## 服务器要求

ECTouch 会有一些系统上的要求。当然，这些要求在主流虚拟机上都已经完全配置好了。

然而，如果你自行搭建生产环境 ，你需要确保你的服务器上安装了下面的几个拓展：

- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## 安装

ECTouch 使用 Composer 来管理代码依赖。所以，在使用 ECTouch 之前，请先确认你的电脑上安装了 Composer。

1、下载归档包（推荐）

http://www.ectouch.cn/download

2、通过 Git 克隆安装

> git clone https://github.com/ectouch/ectouch

> composer udpate

3、通过 Composer Create-Project

你也可以通过 Composer 在命令行运行 create-project 命令来安装 ECTouch：

> composer create-project --prefer-dist ectouch/ectouch mobile


## 配置

1、web 目录

在安装 ECTouch 之后，你需要配置你的 Web 服务器的根目录为 public 目录。 这个目录的 index.php 文件作为所有 HTTP 请求进入应用的前端处理器。

2、配置文件

ECTouch 所有的配置文件都存放在 config 目录下。每个选项都被加入文档，所以你可以自由的浏览文件，轻松的熟悉你的选项。

3、目录权限

安装 ECTouch 之后， 你需要配置一些权限 。 storage 和 bootstrap/cache 目录应该允许你的 Web 服务器写入，否则 ECTouch 将无法写入。

4、应用程序密钥

在你安装完 ECTouch 后，首先需要做的事情是设置一个随机字符串的密钥。

通常这个密钥会有 32 字符长。这个密钥可以被设置在 .env 环境文件中。如果你还没将 .env.example 文件重命名为 .env，那么你现在应该去设置下。如果你没有设置应用程序密钥，你的用户 Session 和 其他加密数据将不安全！

5、伪静态

- Apache

ECTouch 通过 public/.htaccess 文件来让 URL 不需要 index.php 即可访问。在 Apache 启用伪静态之前，请确认是否有开启 mod_rewrite 模块，以便 .htaccess 文件发挥作用。

如果 ECTouch 附带的 .htaccess 文件在 Apache 中无法使用的话，请尝试下方的做法：

```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

- Nginx

如果你使用 Nginx ，在你的网站配置中加入下述代码将会转发所有的请求到 index.php 前端控制器。

```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## 贡献&社区

谢谢你考虑为 ECTouch 做出贡献，欢迎Fork，欢迎PR。

- ECTouch官方主站       http://www.ectouch.cn
- 技术支持论坛          http://wenda.ecmoban.com

## Security Vulnerabilities

If you discover a security vulnerability within ECTouch, please send an e-mail to carson at docxcn@gmail.com. All security vulnerabilities will be promptly addressed.

## License

The ECTouch e-commerce system is open-sourced software licensed under the [GPL license](https://opensource.org/licenses/GPL-3.0).
