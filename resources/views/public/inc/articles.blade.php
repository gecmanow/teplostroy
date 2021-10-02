<div class="col-sm-2">
    <p class='text-center' style='background-color:#ef8c10; color:white;'>НОВОСТИ</p>
    @foreach($articles as $article)
        <p><a href='news/{{ $article->article_url }}' class='label label-default'>{{ $article->created_at }}</a></p>
        <p><a href='news/{{ $article->article_url }}'><i class='fa fa-bookmark'></i>&nbsp;{{ $article->article_name }}</a></p>
        <p><small>{{ $article->short_description }}</small></p>
        <div class='row news--devider'>
            <div class='col-sm-11 news--devider--img' style='background-image: url(images/orange_line_bg.gif);'>
                <p>&nbsp;</p>
            </div>
        </div>
    @endforeach
</div>
