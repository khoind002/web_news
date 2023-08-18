@extends('Admin.adLayout')
@section('mainAdmin')

<div class="container">
  
    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tiêu đề</th>
                                                <th>Tóm tắt</th>
                                                <th>Ngày đăng</th>
                                                <th>Ảnh</th>
                                                <th> <a href="/admin/add">Thêm bài viết</a> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data->take(20) as $tin)
                                            <tr>
                                                <td>{{$tin->tieuDe}}</td>
                                                <td>{{$tin->tomTat}}</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                        <a href="/admin/edit/{{$tin->id}}" class="btn btn-success">Sửa</a>
                                                        <a href="/admin/delete/{{$tin->id}} " class="btn btn-primary">Xóa</a> 
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
    
                                    </table>
                                </div>
                            </div>
    </div>
</div>


<!-- <table class="table">
  <thead>
    <tr>
        <th scope="col">Tiêu đề</th>
        <th scope="col">Tóm tắt</th>
        <th scope="col">Ngày đăng</th>
        <th scope="col"> Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>sửa | xóa</td>
    </tr>
  </tbody>
</table> -->
@endsection