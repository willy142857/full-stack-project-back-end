@extends('layouts.master')

@section('title', '使用者列表')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                使用者管理
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-shopping-bag"></i> 使用者管理</a></li>
                <li class="active">使用者列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">全站使用者一覽表</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-center" style="width: 10px;">#</th>
                                    <th class="text-center">名稱</th>
                                    <th class="text-center" style="width: 250px">信箱</th>
                                    <th class="text-center" style="width: 250px">性別</th>
                                    <th class="text-center" style="width: 250px">生日</th>
                                    <th class="text-center" style="width: 120px">管理功能</th>
                                </tr>
                                {{--@foreach ($users as $user)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{ $user->id }}.</td>--}}
                                        {{--<td>{{ $user->name }}</td>--}}
                                        {{--<td>{{ $user->email }}</td>--}}
                                        {{--<td>{{ $user->sex }}</td>--}}
                                        {{--<td>{{ $user->birth }}</td>--}}
                                        {{--<td class="text-center">--}}
                                            {{--<a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-primary">編輯</a>--}}
                                            {{--<form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block">--}}
                                                {{--@csrf--}}
                                                {{--@method('DELETE')--}}
                                                {{--<button type="submit" class="btn btn-xs btn-danger">刪除</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
