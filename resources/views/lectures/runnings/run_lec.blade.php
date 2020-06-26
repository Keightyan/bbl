<div class="container">
    <div class="head">走塁</div>
        
            <div class="row ml-3 mt-5">
    @if ($runnings->currentPage() == 1)
        @foreach ($runnings as $running)
            @if ($loop->iteration <= 6)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($running->image)
                        <a href="{{ route('lectures.show', ['id' => $running->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$running->image) }}"><p class="new_area-p">NEW！</p></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $running->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"><p class="new_area-p">NEW！</p></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $running->id]) }}" class="post_text_color">{{ $running->title }}</a></div>
                        <time>{{ $running->updated_at }}</time>
                        <div>
                            <span class="tag-running">{{ $running->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
            @endif
        @endforeach
    @elseif ($runnings->currentPage() >= 2)
        @foreach ($runnings as $running)
                <div class="col-4">
                    <article class="cont_inner_list">
                        @if ($running->image)
                        <a href="{{ route('lectures.show', ['id' => $running->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$running->image) }}"></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $running->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $running->id]) }}" class="post_text_color">{{ $running->title }}</a></div>
                        <time>{{ $running->updated_at }}</time>
                        <div>
                            <span class="tag-running">{{ $running->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
        @endforeach
    @endif
    <div class="paginate_total_relative">
    <div class="paginate_total_absolute">
        {{ $runnings->links('pagination::bootstrap-4') }}
        <p class="mb-4 text-center">総投稿数：{{ $runnings->total() }}</p>
    </div>
    </div>