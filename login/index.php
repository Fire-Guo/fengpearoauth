<!DOCTYPE html>
<html lang="zh-cn"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<title>FengPear账号授权登录</title>
<!-- fonts -->
<link rel="stylesheet" href="static/login/font-awesome.min.css">
<!-- bootsrtap -->
<link rel="stylesheet" href="static/login/bootstrap.min.css">
<!-- base.css -->
<link rel="stylesheet" href="static/login/base.css">
<!-- theme.css -->
<link rel="stylesheet" href="static/login/theme.css">
<!-- jquery -->
<script src="static/login/jquery.min.js"></script>
<!-- bootsrtap -->
<script src="static/login/bootstrap.bundle.min.js"></script>
<!-- base.js-->
<script src="static/login/base.js" data-id="daicuo" data-file="/admin/admin.php" data-root="/admin/" data-view="apps/admin/view/" data-upload="/admin/api/upload/save" data-module="admin" data-controll="index" data-action="login" data-page="1" data-user-id="0" data-lang="zh-cn"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 pt-5">
      <div class="card text-center">
        <div class="card-header h6">
          FengPear账号授权登录        </div>
        <div class="card-body pb-2">
          <form action="./login.php" method="post" role="form" data-toggle="form">
          <div class="input-group input-group-sm mb-3">
            <input type="text" class="form-control" id="username" name="username" required="true" placeholder="帐号" autocomplete="off">
          </div>
          <div class="input-group input-group-sm mb-3">

            <input type="password" class="form-control" id="password" name="password" required="true" placeholder="密码" autocomplete="off">
          </div>
          <p class="card-text">
            <button class="btn btn-info btn-block mb-3 btn-purple" type="submit">登录</button>
           </p>
          </form>
        </div>
        <div class="card-footer bg-white text-muted">
<small>该应用授权获取你的：</small><br>
<small>UID和登录凭据（登录凭据包含公开用户资料）</small><br>
                    Powerer by <a class="text-purple" href="https://github.com/Fire-Guo/fengpearoauth" target="_blank">FengPear Oauth</a><br>
                  </div>
      </div>
    </div>
  </div>
</div>
</body></html>