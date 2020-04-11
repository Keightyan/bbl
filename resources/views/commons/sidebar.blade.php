<section id="left">
    	<nav>
                @if (Auth::check())
                    <ul>
                        <li class="post"><a href="/post"><i class="fas fa-pencil-alt mr-2 lead"></i> 投 稿 す る</a></li>
                        <li class="pitching"><a href="pitching.html">ピッチング</a></li>
                        <li class="batting"><a href="batting.html">バッティング</a></li>
                        <li class="fielding"><a href="fielding.html">守　備</a></li>
                        <li class="b_running"><a href="running.html">走　塁</a></li>
                        <li class="mental"><a href="mental.html">メンタル</a></li>
                        <li class="other"><a href="other.html">その他</a></li>
                    </ul>
                @else
                    <ul class="margin-top-45-none">
                        <li class="pitching"><a href="pitching.html">ピッチング</a></li>
                        <li class="batting"><a href="batting.html">バッティング</a></li>
                        <li class="fielding"><a href="fielding.html">守　備</a></li>
                        <li class="b_running"><a href="running.html">走　塁</a></li>
                        <li class="mental"><a href="mental.html">メンタル</a></li>
                        <li class="other"><a href="other.html">その他</a></li>
                    </ul>
                @endif
		</nav>
    </section>