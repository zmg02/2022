@section('header')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>2022 - {{ $title }}</title>
  <link rel="stylesheet" href="/css/mogujie/login.css">
  <script src="/js/mogujie/jquery-1.11.1.js"></script>
  <script src="/js/mogujie/login.js"></script>
</head>
<body>
<div class="wrap">
  <div>
    <a href="{{ url('mogujie/index') }}">{{ config('app.name') }}</a>
    <span>依《网络安全法》相关要求，即日起{{ config('app.name') }}会员登陆需绑定手机。为保障您的账户安全及正常使用，如您尚未绑定，请尽快完成绑定，感谢您的理解和支持!</span>
  </div>
</div>
@show
