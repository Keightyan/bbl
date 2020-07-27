<div class="container">
    <div class="head">メンタル</div>
        
            <div class="row ml-3 mt-5">
    @if ($mentals->currentPage() == 1)
        @foreach ($mentals as $mental)
            @if ($loop->iteration <= 6)
                <div class="col-4">
                    <article class="cont_inner_list">
                    @php
                        $image = $mental->images->first();
                    @endphp
                        @if ($image)
                        <a href="{{ route('lectures.show', ['id' => $mental->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$image->image_path) }}"><p class="new_area-p">NEW！</p></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $mental->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"><p class="new_area-p">NEW！</p></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $mental->id]) }}" class="post_text_color">{{ $mental->title }}</a></div>
                        <time>{{ $mental->updated_at }}</time>
                        <div>
                            <span class="tag-mental">{{ $mental->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
            @endif
        @endforeach
    @elseif ($mentals->currentPage() >= 2)
        @foreach ($mentals as $mental)
                <div class="col-4">
                    <article class="cont_inner_list">
                    @php
                        $image = $mental->images->first();
                    @endphp
                        @if ($image)
                        <a href="{{ route('lectures.show', ['id' => $mental->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$image->image_path) }}"></div></figure></a>
                        @else
                        <a href="{{ route('lectures.show', ['id' => $mental->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"></div></figure></a>
                        @endif
                        <section class="post_meta-all multiline line-8">
                        <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $mental->id]) }}" class="post_text_color">{{ $mental->title }}</a></div>
                        <time>{{ $mental->updated_at }}</time>
                        <div>
                            <span class="tag-mental">{{ $mental->category_name }}</span>
                        </div>
                        </section>
                    </article>
                </div>
        @endforeach
    @endif
    <div class="paginate_total_relative">
    <div class="paginate_total_absolute">
        {{ $mentals->links('pagination::bootstrap-4') }}
        <p class="mb-4 text-center">総投稿数：{{ $mentals->total() }}</p>
    </div>
    </div>