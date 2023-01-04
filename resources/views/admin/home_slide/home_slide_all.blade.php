@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Home Slider Page </h4>           
            <form method="post" action="{{ route('home.slide.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$homeslide->id}}">
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">title</label>
                    <div class="col-sm-10">
                        <input name="title" class="form-control" type="text" value="{{ $homeslide->title }}"  id="example-text-input">
                    </div>
                </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">short_title</label>
                <div class="col-sm-10">
                    <input name="short_title" class="form-control" type="text" value="{{ $homeslide->short_title }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->


                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                    <div class="col-sm-10">
                        <input name="video_url" class="form-control" type="text" value="{{ $homeslide->video_url }}"  id="example-text-input">
                    </div>
                </div>
            <!-- end row -->


                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image </label>
                    <div class="col-sm-10">
                        <input name="home_slide" class="form-control" type="file"  id="home_slide">
                    </div>
                </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" alt="Card image cap" 
                    src="{{ (!empty($homeslide->home_slide))? url($homeslide->home_slide):url('upload/home_slide/No_Cover.jpg') }}">
                    
                    
                </div>
            </div>
            <!-- end row -->
            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
            </form>
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection 
