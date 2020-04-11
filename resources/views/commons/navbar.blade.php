<header>
    	<div id="header_wrap">
    		<section id="info">
    			<span>野球人のためのレクチャー共有サイト</span>
    		</section>

    		<section id="sns">
    			<ul>
    				<li><img src="https://amanoshokudo.jp/common/images/icon/i_fb.png"></li>
    				<li><img src="https://amanoshokudo.jp/common/images/icon/i_twi.png"></li>
    			</ul>
    		</section>
    	</div>
    </header>


    <section id="wrapper">

    <section id="header2">
    	<section id="title">
    		<div id="logo">
          <a href="/"></a>
    			<h1>BaseBall Library</h1>
    			<p>野球好きが集う知恵袋</p>
    		</div>
    	</section>

    <section id="ad">
    	広告
    </section>

    		<ul>
                <li><a href="/about">BBLについて</a></li>
                <li><a href="">いいい</a></li>
                <li><a href="">ううう</a></li>
            </ul>
            
            <ul class="auth_ul">
                @if (Auth::check())
                    <li></li>
                    <li class="nav-item dropdown auth_user_name">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('users.show', 'マイ プロフィール', ['is' => Auth::id()]) !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト',) !!}</li>
                        </ul>
                    </li>
                @else
                    <li>{!! link_to_route('login.get', 'ログイン', [], []) !!}</li>
                    <li>{!! link_to_route('signup.get', 'ユーザー登録', [], []) !!}</li>
                @endif
            </ul>

    </section>

    	<div class="clear"></div>

      <section id="sp_menu">
        スマホ用メニュー
      </section>

      <section id="sp_info">
<p>「<span style="color: red;"> ●● </span>を<span style="font-size: 22px;">意識</span>して練習してます」、
「<span style="color: red;"> ●● </span>を<span style="color: red;"> ●● </span>したら<span style="font-size: 22px;">改善</span>したよ」等、
<p style="text-align: center;">あなたの <span style="color: #0a4974; font-size: 24px; text-decoration: underline; font-weight: bold;">野球ノウハウ</span> をお待ちしています！</p>
</section>

      <!-- 各ページで適宜、id名やclass名を変えて対応する
      <section id="sp_info">
      <p>「<span style="color: red;"> ●● </span>を<span style="font-size: 22px;">意識</span>して練習してます」、
      「<span style="color: red;"> ●● </span>を<span style="color: red;"> ●● </span>したら<span style="font-size: 22px;">改善</span>したよ」等、
      <p style="text-align: center;">あなたの <span style="color: #0a4974; font-size: 24px; text-decoration: underline; font-weight: bold;">野球ノウハウ</span> をお待ちしています！</p>
      </section>
      -->

    <section id="catch">
  <div>
  <p>「<span style="color: red;"> ●● </span>を<span style="font-size: 22px;">意識</span>して練習してます」、
  「<span style="color: red;"> ●● </span>を<span style="color: red;"> ●● </span>したら<span style="font-size: 22px;">改善</span>したよ」等、
  <p style="text-align: center;">あなたの <span style="color: #0a4974; font-size: 24px; text-decoration: underline; font-weight: bold;">野球ノウハウ</span> をお待ちしています！</p>
  </div>
</section>