@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

        @if (session('success'))
        {{-- <script>swal('Good Job !',"@php echo session('success') @endphp" , 'success');</script> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>@php echo session('success') @endphp</strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
        @endif

        @if (count($posts)>0)
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/storage/blog_images/{{$post->picture}}" class="img img-responsive img-thumbnail"
                                alt="">
                        </div>
                        <div class="col-sm-8">
                            {!!$post->description!!}
                        </div>
                    </div>
    
                </div>
            </div>
            @endforeach

                {{$posts->links()}}
        @endif
      


    </div>


</div>

@endsection