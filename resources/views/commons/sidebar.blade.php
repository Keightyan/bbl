<section id="left">
    	<nav>
                @if (Auth::check())
                    <ul>
                        <li class="post"><a href="{{ route('lectures.create') }}"><i class="fas fa-pencil-alt mr-2 lead"></i>投 稿 す る</a></li>
                        <li class="pitching"><a href="{{ route('lectures.pitchings.pitchings') }}">ピッチング</a></li>
                        <li class="batting"><a href="{{ route('lectures.battings.battings') }}">バッティング</a></li>
                        <li class="fielding"><a href="{{ route('lectures.fieldings.fieldings') }}">守　備</a></li>
                        <li class="b_running"><a href="{{ route('lectures.runnings.runnings') }}">走　塁</a></li>
                        <li class="mental"><a href="{{ route('lectures.mentals.mentals') }}">メンタル</a></li>
                        <li class="other"><a href="{{ route('lectures.others.others') }}">その他</a></li>
                    </ul>
                @else
                    <ul class="margin-top-45-none">
                        <li class="pitching"><a href="{{ route('lectures.pitchings.pitchings') }}">ピッチング</a></li>
                        <li class="batting"><a href="{{ route('lectures.battings.battings') }}">バッティング</a></li>
                        <li class="fielding"><a href="{{ route('lectures.fieldings.fieldings') }}">守　備</a></li>
                        <li class="b_running"><a href="{{ route('lectures.runnings.runnings') }}">走　塁</a></li>
                        <li class="mental"><a href="{{ route('lectures.mentals.mentals') }}">メンタル</a></li>
                        <li class="other"><a href="{{ route('lectures.others.others') }}">その他</a></li>
                    </ul>
                @endif
		</nav>
    </section>