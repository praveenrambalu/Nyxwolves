<section id="blog" class="carousel showcase">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <h2 class="featured">Latest News</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="/blog" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i
                        class="icon-grid"></i>VIEW ALL</i></a>
            </div>
        </div>
        <div class="swiper-container slider-mid items">
            <div class="swiper-wrapper">

                @if (count($posts=\App\Posts::where('status','active')->orderBy('id','desc')->get())>0)
                    
                
                @foreach ($posts as $post)
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                            <img src="/storage/blog_images/{{$post->picture}}" alt="{{$post->title}} Image">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="/blog/posts/{{$post->id}}">
                                        <h4 class="m-0">{{$post->title}}</h4>
                                    </a>
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    {{-- <a href="blog-single-post-1.html" class="d-lg-flex align-items-center"><i
                                            class="icon-user"></i>John Doe</a> --}}
                                    <a href="/blog/posts/{{$post->id}}" class="d-lg-flex align-items-center"><i
                                            class="icon-clock"></i>{{date('d-m-Y h:i A',strtotime($post->created_at))}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


               



                @endif
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>