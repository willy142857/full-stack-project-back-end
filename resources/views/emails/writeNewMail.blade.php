@extends('layouts.master')

@section('title', '提案')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                發送電子報
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-shopping-bag"></i> 訂閱者電子報</a></li>
                <li class="active">發送電子報</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <!-- .col -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">撰寫新電子報</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="padding-left: 30px;padding-right: 30px">
                            <form role="form" action="{{ route('emails.sendSub') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>電子報內容</label>
                                    <textarea class="form-control" rows="4" placeholder="Enter ..."
                                              name="content"></textarea>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">發送</button>
                                    <a class="btn btn-link" href="#">取消</a>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>訂閱者信箱</th>
                        <th>管理功能</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($subscribers as $subscriber)
                        <tr>
                            <td>{{ $subscriber->id }}.</td>
                            <td>{{ $subscriber->email }}</td>
                            <td class="text-center">
                                {{--<a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-primary">編輯</a>--}}
                                <form action="{{ route('emails.destroy', $subscriber->id) }}" method="post"
                                      style="display: inline-block">
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
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
