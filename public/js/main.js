// レクチャーの削除確認
$(() => {
    $('.del_check').click(function() {
        if (confirm('本当に削除しますか？')) {

        } else
        return false;
    });
});

// 投稿フォーム内、タイトル部分のプレースホルダー（ランダム切り替え）
$(() => {
  const phList = [
      '例：球速アップに効果的な方法',
      '例：○○をすると飛距離が伸びる！',
      '例：○○を意識して守備のスペシャリストに！',
      '例：【○○流】盗塁の極意'
    ],
    // リストの数をチェックしてランダム表示
    r = Math.floor(Math.random() * phList.length);
    // placeholderに挿入
    $('#input_title').prop('placeholder', phList[r]);
});

// 投稿フォーム内、「画像を増やす」を押すと "画像" と "コメント"  を増やす
let count = 1;
$('#append-img-comment').on('click', () => {
if ($('.img-comment_set').length < 10) {
    count++;
    $('#append-img-comment_area').append(`<div class="img-comment_set"><div class="form-group"><label class="font-weight-bold">画像</label><input type="file" name="image[]" id="image${count}" class="form-control-file"></div><div class="form-group"><label class="font-weight-bold">コメント</label><input type="text" class="form-control" maxlength="100" name="comment[]" id="text-length"></div></div>`);
} else {
    $('#append-img-comment').remove();
    $('.append-img-comment-span').remove();
}});