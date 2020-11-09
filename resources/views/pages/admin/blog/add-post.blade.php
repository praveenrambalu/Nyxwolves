@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card">

                <div class="card-body">
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
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" maxlength="190" id=""
                                aria-describedby="helpId" placeholder="" required >
                        </div>
                        <div class="form-group">
                            <label for="">Tags</label>
                            <input type="text" class="form-control" name="tags" maxlength="190" id=""
                                aria-describedby="helpId" placeholder="" required >
                                <small>should be seperated by (,) comma</small>
                        </div>
                        <div class="form-group">
                            <label for="">Featured Image</label>
                            <input type="file" class="form-control" name="image" 
                                aria-describedby="helpId" placeholder="" required >
                                <small>size shoudl be W500 x H650</small>

                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="desc"  required ></textarea>
                        </div>

                        <input type="submit" value="Add Post" class="btn btn-primary">
                    </form>
                </div>

            </div>
        </div>
        <div class="col-sm-2"></div>


    </div>
</div>

<script>
    CKEDITOR.replace( 'desc' );
</script>

@endsection