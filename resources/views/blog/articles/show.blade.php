@extends('blog.layouts.master')

@section('content')
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-300" style="background-image: url('/images/{{$article->link}}');">
              <h3 style="text-decoration: underline">{{ $article->title}}</h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="section-spacer"></div>
              <div class="meta__favorites">
                 <i class="material-icons" role="presentation">favorite</i>
                <span class="visuallyhidden">favorites</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">bookmark</i>
                <span class="visuallyhidden">bookmark</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">share</i>
                <span class="visuallyhidden">share</span>
              </div>
            </div>
            <div class="mdl-color-text--grey-700" style="padding: 0 80px; margin-bottom: 60px ">
                {!! $article->content !!}
            </div>
          </div>


        </div>

@endsection

