@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a href="/admin/partner/create">
                        <button type="button" class="btn btn-info"><i class="fa fa-fw fa-plus-square"></i>ADD Slider
                        </button>
                      </a>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photos</th>
                            <th>Link</th>
                            <th>Edit</th>
                            <th>delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partners as $partner)

                        <tr>
                            <td>{{$partner['id']}}</td>
                            <td><img class="img-thumbnail" width="200px" src="/partners/{{$partner->image}}"></td>
                            <td>{{$partner['link']}}</td>
                            <td><a href="{{action('Admin\PartnerController@edit', $partner['id'])}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                            <td>
                              <form action="{{action('Admin\PartnerController@destroy', $partner['id'])}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit" onclick="return confirm('დარწმუნებული ხრთ, რომ სლაიდერის წაშლა გსურთ?')"><i class="fa fa-fw fa-trash"></i></button>
                              </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection