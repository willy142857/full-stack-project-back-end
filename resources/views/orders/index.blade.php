@extends('layouts.master')

@section('title', '訂單列表')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                訂單管理
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-shopping-bag"></i> 訂單管理</a></li>
                <li class="active">訂單列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <!-- box-header -->
                        <div class="box-header with-border">
                            <h3 class="box-title">全站訂單一覽表</h3>
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
                                    <th>訂單人</th>
                                    <th>聯絡方式</th>
                                    <th>下訂商品</th>
                                    <th>下訂方案</th>
                                    <th>價錢</th>
                                    <th>管理功能</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($following_projects as $following_project)
                                    <tr>
                                        <td>{{ $following_project->id }}.</td>
                                        <td>{{ $following_project->user->name }}</td>
                                        <td>{{ $following_project->user->email }}</td>
                                        <td>{{ $following_project->project->name }}</td>
                                        <td>{{ $following_project->feedback->description}}</td>
                                        <td>{{ $following_project->feedback->price }}</td>
                                        <td class="text-center">
                                            {{--<a href="{{ route('orders.edit', $following_project->id) }}" class="btn btn-xs btn-primary">編輯</a>--}}
                                            <form action="{{ route('orders.destroy', $following_project->id) }}" method="post" style="display: inline-block">
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
