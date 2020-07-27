<div class="container">
    <div class="head">バッティング</div>
        
            <div class="row ml-3 mt-5">
    @if ($battings->currentPage() == 1)
        @foreach ($battings as $batting)
            @if ($loop->iteration <= 6)
                <div class="col-4">
                    <article class="cont_inner_list">
                    @php
                        $image = $batting->images->first();
                    @endphp
                        @if ($image)
                        <a href="{{ route('lectures.show', ['id' => $batting->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$image->image_path) }}"><p class="new_area-p">NEW！</p></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $batting->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"><p class="new_area-p">NEW！</p></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $batting->id]) }}" class="post_text_color">{{ $batting->title }}</a></div>
                        <time>{{ $batting->updated_at }}</time>
                        <div>
                            <span class="tag-batting">{{ $batting->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
            @endif
        @endforeach
    @elseif ($battings->currentPage() >= 2)
        @foreach ($battings as $batting)
                <div class="col-4">
                    <article class="cont_inner_list">
                    @php
                        $image = $batting->images->first();
                    @endphp
                        @if ($image)
                        <a href="{{ route('lectures.show', ['id' => $batting->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$image->image_path) }}"></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $batting->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $batting->id]) }}" class="post_text_color">{{ $batting->title }}</a></div>
                        <time>{{ $batting->updated_at }}</time>
                        <div>
                            <span class="tag-batting">{{ $batting->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
        @endforeach
    @endif
    <div class="paginate_total_relative">
    <div class="paginate_total_absolute">
        {{ $battings->links('pagination::bootstrap-4') }}
        <p class="mb-4 text-center">総投稿数：{{ $battings->total() }}</p>
    </div>
    </div>