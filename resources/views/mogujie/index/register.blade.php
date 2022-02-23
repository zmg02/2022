@include('mogujie.index.header', ['title'=>'注册'])
<style>
  .content li:nth-of-type(3){
    margin-top: 0;
  }
</style>
<div class="content">
  <a href="#"></a>
  <div class="right">

    <div>
      <div class="head register">
        注 册
      </div>
      <form action="{{ url('mogujie/register') }}" method="post">
        @csrf
        <span class="warn">邮箱/手机号</span>

        <input type="text" id="phone" name="phone" placeholder="手机号" class="nomal @error('phone') is-invalid @enderror">
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" id="email" name="email" placeholder="邮箱" class="nomal @error('email') is-invalid @enderror">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" id="password" name="password" placeholder="密码" class="nomal @error('password') is-invalid @enderror">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="确认密码" class="nomal @error('password_confirmation') is-invalid @enderror">
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="submit" value="submit">
        <input type="submit" value="注册">
      </form>
      <ul>
        <li><a href="#"> QQ登录</a></li>
        <li><a href="#"> 微信登录</a></li>
        <li><a href="{{ url('mogujie/login') }}" class="login">已有账号？去登录</a></li>
      </ul>
    </div>

  </div>
</div>

@include('mogujie.index.footer')



