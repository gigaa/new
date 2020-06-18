@extends('admin.layouts.app')


@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    {{-- @php
                        echo $obj->title;
                    @endphp --}}
                    {{-- @foreach($abouts as $about)
                         {{$about->text}}
                    @endforeach --}}
                    {{-- @php
                        print_r($abouts);
                    @endphp --}}
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
            <form role="form" method="post" action="{{action('Admin\AboutController@update', $id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">შეიყვანეთ  სათაური ქართულად</label>
                        <input type="text" name="title_ka" class="form-control" value="<?php echo $abouts->title_ka;?>" " placeholder="შეიყვანეთ სათაური">
                        <label for="exampleInputEmail1">Enter english title</label>
                        <input type="text"  name="title_en" class="form-control"  value="<?php echo $abouts->title_en;?>" " placeholder="enter title">
                    </div>

                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    შეიყვანეთ ქართულად ტექსტი
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-6">
                                    <textarea name="text_ka" class="textarea" placeholder="შეიყვანეთ ტექსტი"
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $abouts->text_ka;?></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Enter english Text
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-6">
                                    <textarea name="text_en" class="textarea" placeholder="შეიყვანეთ ტექსტი"
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $abouts->text_en;?></textarea>
                                </div>

                            </div>
                        </div>
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

@endsection