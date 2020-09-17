@extends('layouts.app')

@section('body-content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('../images/post/{{$post->photo->path}}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white bg-success mb-3">{{$post->category->name}}</span>
                        <h1 class="mb-4"><a href="#">{{$post->title}}</a></h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="../images/avatar/{{$post->user->photo->path}}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By {{$post->user->name}}</span>
                            <span>&nbsp;-&nbsp;{{$post->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-12 main-content">

                    <div class="post-content-body">
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magni explicabo id molestiae, minima quas assumenda consectetur, nobis neque rem, incidunt quam tempore perferendis provident obcaecati sapiente, animi vel expedita omnis quae ipsa! Obcaecati eligendi sed odio labore vero reiciendis facere accusamus molestias eaque impedit, consequuntur quae fuga vitae fugit?</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
