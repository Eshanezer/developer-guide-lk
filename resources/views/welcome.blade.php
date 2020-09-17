@extends('layouts.app')

@section('body-content')

    <div class="site-section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout-2">

                @if(count($categories)>0)
                    @foreach($categories as $category)
                        <div class="col-md-4">
                            <a href="#" class="h-entry mb-30 v-height gradient" style="background-image: url('images/category/{{$category->photo->path}}');">
                                <div class="text">
                                    <h2>{{$category->name}}</h2>
                                    <span class="date">{{\Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2>Recent Posts</h2>
                </div>
            </div>
            <div class="row">

                @if(count($posts)>0)
                    @foreach($posts as $post)
                        <div class="col-lg-4 mb-4">
                            <div class="entry2">
                                <a href="{{route('post.show',$post->id)}}"><img src="images/post/{{$post->photo->path}}" alt="Image" class="img-fluid rounded"></a>
                                <div class="excerpt">
                                    <span class="post-category text-white bg-secondary mb-3">{{$post->category->name}}</span>

                                    <h2><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <figure class="author-figure mb-0 mr-3 float-left"><img src="images/avatar/{{$post->user->photo->path}}"
                                                                                                alt="Image" class="img-fluid">
                                        </figure>
                                        <span class="d-inline-block mt-1">By <a href="#">{{$post->user->name}}</a></span>
                                        <span>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                                    </div>

                                    <p>{{$post->description}}</p>
                                    <p><a href="{{route('post.show',$post->id)}}">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <div class="row text-center pt-5 border-top">
                <div class="col-md-12">
                    <div class="custom-pagination">
                        <span>1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">15</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-lightx">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <div class="subscribe-1 ">
                        <h2>Subscribe to our newsletter</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                        <form action="#" class="d-flex">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
