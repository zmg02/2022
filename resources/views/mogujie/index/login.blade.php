
@include('mogujie.index.header',['title'=>'登录'])

  <div class="content">
  <a href="#"></a>
  <div class="right">

    <div>
      <div class="head register">
        登 录
      </div>
      <form action="{{ url('mogujie/register') }}" method="post">
        @csrf
{{--        错误信息<span class="warn">请输入邮箱/手机号</span>--}}
        <input type="text" id="account" name="account" placeholder="邮箱/手机号" class="nomal @error('phone') is-invalid @enderror">
        @error('account')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="password" id="password" name="password" placeholder="密码" class="nomal @error('password') is-invalid @enderror">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="hidden" name="submit" value="submit">
        <input type="submit" value="注册">
      </form>
      <ul>
        <li><a href="#"> QQ登录</a></li>
        <li><a href="#"> 微信登录</a></li>
        <li><a href="#" class="forget">忘记密码</a></li>
        <li><a href="{{ url('mogujie/register') }}" class="register">没有账号？去注册</a></li>
      </ul>
    </div>

  </div>
</div>


@include('mogujie.index.footer')
