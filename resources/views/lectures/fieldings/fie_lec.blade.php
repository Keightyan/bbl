<div class="container">
    <div class="head">守備</div>
        
            <div class="row ml-3 mt-5">
    @if ($fieldings->currentPage() == 1)
        @foreach ($fieldings as $fielding)
            @if ($loop->iteration <= 6)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($fielding->image)
                        <a href="{{ route('lectures.show', ['id' => $fielding->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$fielding->image) }}"><p class="new_area-p">NEW！</p></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $fielding->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"><p class="new_area-p">NEW！</p></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $fielding->id]) }}" class="post_text_color">{{ $fielding->title }}</a></div>
                        <time>{{ $fielding->updated_at }}</time>
                        <div>
                            <span class="tag-fielding">{{ $fielding->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
            @endif
        @endforeach
    @elseif ($fielding->currentPage() >= 2)
        @foreach ($fieldings as $fielding)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($fielding->image)
                        <a href="{{ route('lectures.show', ['id' => $fielding->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$fielding->image) }}"></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $fielding->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $fielding->id]) }}" class="post_text_color">{{ $fielding->title }}</a></div>
                        <time>{{ $fielding->updated_at }}</time>
                        <div>
                            <span class="tag-fielding">{{ $fielding->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
        @endforeach
    @endif
    <div class="paginate_total_relative">
    <div class="paginate_total_absolute">
        {{ $fieldings->links('pagination::bootstrap-4') }}
        <p class="mb-4 text-center">総投稿数：{{ $fieldings->total() }}</p>
    </div>
    </div>