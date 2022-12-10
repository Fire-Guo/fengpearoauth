# FengPear OAuth

#### 介绍
这是一个非常实用的oauth登录程序。根据这个程序，可以实现多个软件共用一个账号。
没有安装程序，使用请自行修改数据库信息。
目前为api形式，网页型登录页面还在制作中。
api调用方式：https://server/oauth/login.php?username=用户名&password=密码
返回值：[uid]/false(账号或密码错误)

#### 软件架构
oauth文件夹：登录调用
register文件夹：注册网页

#### 参与贡献

1.  Fork 本仓库
2.  新建 Feat_xxx 分支
3.  提交代码
4.  新建 Pull Request