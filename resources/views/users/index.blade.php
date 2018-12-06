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
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <!-- box-header -->
                        <div class="box-header with-border">
                            <h3 class="box-title">全站使用者一覽表</h3>
                            <div class="box-tools">
                                <a class="btn btn-success btn-sm" href="#">新增</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        {{--TODO:完成列表--}}
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>使用者名稱</th>
                                    <th>聯絡信箱</th>
                                    <th>性別</th>
                                    <th>出生日期</th>
                                    <th>管理功能</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->sex }}</td>
                                        <td>{{ $user->birth }}</td>
                                        <td class="text-center">
                                            {{--<a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-primary">編輯</a>--}}
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
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
