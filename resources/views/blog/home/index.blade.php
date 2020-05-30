@extends('blog.layouts.master')

@section('content')

    <!--Card-->
            @foreach($articles as $article )
            <div class="demo-blog__posts mdl-grid">
               
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url('/images/{{ $article->link }}'); cursor: pointer" onclick="location.href='{{route('homearticle.show',$article->id)}}'">
                        <a href="{{route('homearticle.show',$article->id)}}" style="text-decoration: underline"><h3>{{$article->title}}</h3></a>
                    </div>
                    <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
                            <div>                   
                                <i class="fa fa-pencil view-icon">{{ $article->created_at->diffForHumans()}}</i>|
                                <a href="#" class="fb-icon"><i class="fa fa-facebook-square" aria-hidden="true"> 255</i> |</a>
                                <a href="#" class="vk-icon"><i class="fa fa-vk" aria-hidden="true"> 20</i></a>
                            </div>   
                                <a href="{{route('homearticle.show',$article->id)}}">{{$article->title}}</a>
                        
                    </div>
                   
                </div>
            </div>
            @endforeach
    <!--/.Card-->
        
@endsection
