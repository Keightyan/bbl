<div class="container">
    <div class="head">ピッチング</div>
        
            <div class="row ml-3 mt-5">
    @if ($pitchings->currentPage() == 1)
        @foreach ($pitchings as $pitching)
            @if ($loop->iteration <= 6)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($pitching->image)
                        <a href="{{ route('lectures.show', ['id' => $pitching->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$pitching->image) }}"><p class="new_area-p">NEW！</p></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $pitching->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"><p class="new_area-p">NEW！</p></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $pitching->id]) }}" class="post_text_color">{{ $pitching->title }}</a></div>
                        <time>{{ $pitching->updated_at }}</time>
                        <div>
                            <span class="tag-pitching">{{ $pitching->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
            @endif
        @endforeach
    @elseif ($pitchings->currentPage() >= 2)
        @foreach ($pitchings as $pitching)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($pitching->image)
                        <a href="{{ route('lectures.show', ['id' => $pitching->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$pitching->image) }}"></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $pitching->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $pitching->id]) }}" class="post_text_color">{{ $pitching->title }}</a></div>
                        <time>{{ $pitching->updated_at }}</time>
                        <div>
                            <span class="tag-pitching">{{ $pitching->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
        @endforeach
    @endif
    <div class="paginate_total_relative">
    <div class="paginate_total_absolute">
        {{ $pitchings->links('pagination::bootstrap-4') }}
        <p class="mb-4 text-center">総投稿数：{{ $pitchings->total() }}</p>
    </div>
    </div>