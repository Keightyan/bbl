<div class="container_home">
    <div class="head d-flex justify-content-between">新着レクチャー<span class="d-inline-block font-weight-normal small">最新の6投稿が表示されます。</span></div>

            <div class="row ml-3 mt-5">

    @foreach ($lectures as $lecture)
    @if ($loop->index <= 5)
        <div class="col-4">
            <article class="cont_inner_list">
            @php
                $image = $lecture->images->first();
            @endphp
                @if ($image)
                    <a href="{{ route('lectures.show', ['id' => $lecture->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img class="thumbnail" src="{{ asset('storage/'.$image->image_path) }}"><p class="new_area-p">NEW！</p></div></figure></a>
                @else
                    <a href="{{ route('lectures.show', ['id' => $lecture->id]) }}"><figure class="post_thumbnail"><div class="new_area-img"><img src="./img/noimage.gif"><p class="new_area-p">NEW！</p></div></figure></a>
                @endif
                    <section class="post_meta-all multiline line-8">
                <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $lecture->id]) }}" class="post_text_color">{{ $lecture->title }}</a></div>
                <time>{{ $lecture->updated_at }}</time>
                <div>
                    @if ($lecture->category_name == 'ピッチング')
                        <span class="tag-pitching">{{ $lecture->category_name }}</span>
                    @elseif ($lecture->category_name == 'バッティング')
                        <span class="tag-batting">{{ $lecture->category_name }}</span>
                    @elseif ($lecture->category_name == '守備')
                        <span class="tag-fielding">{{ $lecture->category_name }}</span>
                    @elseif ($lecture->category_name == '走塁')
                        <span class="tag-running">{{ $lecture->category_name }}</span>
                    @elseif ($lecture->category_name == 'メンタル')
                        <span class="tag-mental">{{ $lecture->category_name }}</span>
                    @elseif ($lecture->category_name == 'その他')
                        <span class="tag-other">{{ $lecture->category_name }}</span>
                    @endif
                </div>
                </section>
            </article>
        </div>
    @endif
    @endforeach