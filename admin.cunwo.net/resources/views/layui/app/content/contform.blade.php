

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layuiAdmin 评论管理 iframe 框</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="{{asset('layui-admin-v1.2.1/src/layuiadmin/layui/css/layui.css')}}" media="all">
  <link rel="stylesheet" href="{{asset('layui-admin-v1.2.1/src/layuiadmin/style/admin.css')}}" media="all">
</head>
<body>

  <div class="layui-form" lay-filter="layuiadmin-form-comment" id="layuiadmin-form-comment" style="padding: 20px 30px 0 0;">
    <div class="layui-form-item">
      <label class="layui-form-label">评论内容</label>
      <div class="layui-input-block">
        <textarea name="content" lay-verify="required" placeholder="请输入" class="layui-textarea"></textarea>
      </div>
    </div>
    <div class="layui-form-item layui-hide">
      <label class="layui-form-label"></label>
      <div class="layui-input-inline">
        <input type="button" lay-submit lay-filter="layuiadmin-app-comm-submit" id="layuiadmin-app-comm-submit" value="确认" class="layui-btn">
      </div>
    </div>
  </div>

  <script src="{{asset('layui-admin-v1.2.1/src/layuiadmin/layui/layui.js')}}"></script>
  <script>
  layui.config({
    base: '/layui-admin-v1.2.1/src/layuiadmin/' //静态资源所在路径
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index', 'form'], function(){
    var $ = layui.$
    ,form = layui.form;
    
  });
  </script>
</body>
</html>