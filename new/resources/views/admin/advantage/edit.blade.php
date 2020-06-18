@extends('admin.layouts.app')


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
            <form role="form" method="post" action="{{action('Admin\AdvantageController@update', $id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">შეიყვანეთ  სათაური ქართულად</label>
                        <input type="text" name="title_ka" class="form-control" value="<?php echo $advantages->title_ka;?>" " placeholder="შეიყვანეთ სათაური">
                        <label for="exampleInputEmail1">Enter english title</label>
                        <input type="text"  name="title_en" class="form-control"  value="<?php echo $advantages->title_en;?>" " placeholder="enter title">
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
                                    <textarea name="content_ka" class="textarea" placeholder="შეიყვანეთ ტექსტი"
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $advantages->content_ka;?></textarea>
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
                                    <textarea name="content_en" class="textarea" placeholder="შეიყვანეთ ტექსტი"
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $advantages->content_en;?></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">შეიყვანეთ  არხი ქართულად</label>
                        <input type="text" name="point1_ka" class="form-control" value="<?php echo $advantages->point1_ka;?>" >
                        <label for="exampleInputEmail1">Enter english channel</label>
                        <input type="text"  name="point1_en" class="form-control"  value="<?php echo $advantages->point1_en;?>" >
                        <label for="exampleInputEmail1">შეიყვანეთ  პარტნიორების ქართულად</label>
                        <input type="text" name="point2_ka" class="form-control" value="<?php echo $advantages->point2_ka;?>" >
                        <label for="exampleInputEmail1">Enter english partners</label>
                        <input type="text"  name="point2_en" class="form-control"  value="<?php echo $advantages->point2_en;?>" >
                        <label for="exampleInputEmail1">შეიყვანეთ  ხარჯები ქართულად</label>
                        <input type="text" name="point3_ka" class="form-control" value="<?php echo $advantages->point3_ka;?>" >
                        <label for="exampleInputEmail1">Enter english Costs</label>
                        <input type="text"  name="point3_en" class="form-control"  value="<?php echo $advantages->point3_en;?>" >
                        <label for="exampleInputEmail1">Enter english icon1</label>
                        <input type="text" name="icon1" class="form-control" value="<?php echo $advantages->icon1;?>" >
                        <label for="exampleInputEmail1">Enter english icon2</label>
                        <input type="text"  name="icon2" class="form-control"  value="<?php echo $advantages->icon2;?>" >
                        <label for="exampleInputEmail1">Enter english icon3</label>
                        <input type="text" name="icon3" class="form-control" value="<?php echo $advantages->icon3;?>" >
                        <label for="exampleInputEmail1">Enter english icon4</label>
                        <input type="text"  name="icon4" class="form-control"  value="<?php echo $advantages->icon4;?>"  >
                        <label for="exampleInputEmail1">შეიყვანეთ  txt1 ქართულად</label>
                        <input type="text" name="txt1_ka" class="form-control" value="<?php echo $advantages->txt1_ka;?>" >
                        <label for="exampleInputEmail1">Enter english txt1</label>
                        <input type="text"  name="txt1_en" class="form-control"  value="<?php echo $advantages->txt1_en;?>" >
                        <label for="exampleInputEmail1">შეიყვანეთ  txt2 ქართულად</label>
                        <input type="text" name="txt2_ka" class="form-control" value="<?php echo $advantages->txt2_ka;?>" >
                        <label for="exampleInputEmail1">Enter english txt2</label>
                        <input type="text"  name="txt2_en" class="form-control"  value="<?php echo $advantages->txt2_en;?>" >
                        <label for="exampleInputEmail1">შეიყვანეთ  txt3 ქართულად</label>
                        <input type="text" name="txt3_ka" class="form-control" value="<?php echo $advantages->txt3_ka;?>" >
                        <label for="exampleInputEmail1">Enter english txt3</label>
                        <input type="text"  name="txt3_en" class="form-control"  value="<?php echo $advantages->txt3_en;?>" >
                        <label for="exampleInputEmail1">შეიყვანეთ  txt4 ქართულად</label>
                        <input type="text" name="txt4_ka" class="form-control" value="<?php echo $advantages->txt4_ka;?>" >
                        <label for="exampleInputEmail1">Enter english txt4</label>
                        <input type="text"  name="txt4_en" class="form-control"  value="<?php echo $advantages->txt4_en;?>" >
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