<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>注册-FengPear账号</title>
<link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css" rel="external nofollow" />
<script src="https://www.layuicdn.com/layui/layui.js" charset="utf-8"></script>
</head>
<body>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
 <legend>注册-FengPear账号</legend>
</fieldset> 
<div style="padding: 20px; background-color: #F2F2F2;">
 <div class="layui-row layui-col-space15">
 <div class="layui-col-md6">
  <div class="layui-card">
  <div class="layui-card-header">注册</div>
  <div class="layui-card-body">
			<form class="layui-form" action="re.php" method="post" onsubmit="return checkForm(this)" lay-filter="example">
			 <div class="layui-form-item">
			 <label class="layui-form-label">账号</label>
			 <div class="layui-input-block">
			  <input type="text" name="username" placeholder="请输入账号" class="layui-input">
			 </div>
			 </div>
			 <div class="layui-form-item">
			 <label class="layui-form-label">密码</label>
			 <div class="layui-input-block">
			  <input type="password" name="password" placeholder="请输入密码" class="layui-input">
			 </div>
			 </div>			 
			 <div class="layui-form-item">
			 <div class="layui-input-block">
			  <input type="submit" class="layui-btn layui-btn-normal" value="立即注册"/>
			 </div>
			 </div>
			</form>
  </div>
  </div>
 </div>
 <div class="layui-col-md6">
  <div class="layui-card">
  </div>
 </div>
 </div>
</div>
<script type="text/javascript">
	// 验证输入不为空的脚本代码
	function checkForm(form) {
	if(form.username.value == "") {
	alert("用户名不能为空!");
	form.username.focus();
	return false;
	}
	if(form.password.value == "") {
	alert("密码不能为空!");
	form.password.focus();
	return false;
	}
	return true;
	}
</script>
</body>
</html>