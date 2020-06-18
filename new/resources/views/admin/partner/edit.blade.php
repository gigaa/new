@extends('admin.layouts.app')
@section('header_style')
<link rel="stylesheet" href="{{asset('css/file.css')}}">
<style type="text/css">
#imagePreview img{
  width:150px;
  object-fit: cover;
}

#imagePreview{
  width:150px;
  height: auto;
}
/* .card-body{
  width:150px;
} */
</style>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">

                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>პრობლემა!</strong> წარმოიშვა პრობლემა ინფორმაციის შეყვანისას. გთხოვთ ცადოთ თავიან<br><br>        <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
  
            @if(session('success'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i>  {{ session('success') }}</h4>
            </div>
            @endif
            <form role="form" method="post" action="{{action('Admin\PartnerController@update', $id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <div class="form-group post clearfix">
                    <label class="col-sm-2 control-label">ფოტო<span class="red">*</span></label>
                    <div class="col-sm-10">
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input btn-warning"><i class="fa fa-fw fa-cloud-upload"></i>ფოტოს ატვირთვა</button>
                            <input type="file" name="image" id="file" accept="image/*" onchange="return fileValidation()" />
                        </div><br />
                        <div id="imagePreview">
                            @if("/partners/{{$partners->image}}")
                            <img class="img-thumbnail" height="auto" width="200px" src="/partners/{{$partners->image}}">
                            @else
                            <p>No image found</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">შეიყვანეთ  სათაური ქართულად</label>
                        <input type="text" name="link" class="form-control" value="<?php echo $partners->link;?>" " placeholder="შეიყვანეთ სათაური">
                     
                    </div>
                </div>

                <!-- /.card-body -->
                

                <div class="card-footer justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
</div>


<script type="text/javascript">
    function fileValidation(){
      var fileInput = document.getElementById('file');
      var filePath = fileInput.value;
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.svg)$/i;
      if(!allowedExtensions.exec(filePath)){
        var errName = $("#imagePreview");
        errName.append("ასატვირთი სურათი უნდა იყოს შემდეგი ფორმატის:jpg,jpeg,png,gif,svg");
        /*errName.attr("style", "display: inline;");   */
        fileInput.value = '';
        return false;
      }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
          };
          reader.readAsDataURL(fileInput.files[0]);
        }
      }
    }
    function rotateImage(degree) {
      $('#imagePreview').animate({ transform: degree }, {
        step: function(now,fx) {
          $(this).css({
            '-webkit-transform':'rotate('+now+'deg)',
            '-moz-transform':'rotate('+now+'deg)',
            'transform':'rotate('+now+'deg)'
          });
        }
      });
    }
    
    window.onload=function(){
      document.getElementById("90").style.display='none';
      document.getElementById("-90").style.display='none';
      document.getElementById("180").style.display='none';
      document.getElementById("360").style.display='none';
    }
    $(document).ready(function(){
      $('#file').change(function(){
        $('#90').show();
        $('#-90').show();
        $('#180').show();
        $('#360').show();
      })
    });
 </script>
    


@endsection