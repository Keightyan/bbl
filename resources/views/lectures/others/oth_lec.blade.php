<div class="container">
    <div class="head">その他</div>
    
            <div class="row ml-3 mt-5">
    @if ($others->currentPage() == 1)
        @foreach ($others as $other)
            @if ($loop->iteration <= 6)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($other->image)
                        <a href="{{ route('lectures.show', ['id' => $other->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$other->image) }}"><p class="new_area-p">NEW！</p></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $other->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"><p class="new_area-p">NEW！</p></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $other->id]) }}" class="post_text_color">{{ $other->title }}</a></div>
                        <time>{{ $other->updated_at }}</time>
                        <div>
                            <span class="tag-other">{{ $other->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
            @endif
        @endforeach
    @elseif ($others->currentPage() >= 2)
        @foreach ($others as $other)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($other->image)
                        <a href="{{ route('lectures.show', ['id' => $other->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$other->image) }}"></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $other->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $other->id]) }}" class="post_text_color">{{ $other->title }}</a></div>
                        <time>{{ $other->updated_at }}</time>
                        <div>
                            <span class="tag-other">{{ $other->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
        @endforeach
    @endif
    <div class="paginate_total_relative">
    <div class="paginate_total_absolute">
        {{ $others->links('pagination::bootstrap-4') }}
        <p class="mb-4 text-center">総投稿数：{{ $others->total() }}</p>
    </div>
    </div>