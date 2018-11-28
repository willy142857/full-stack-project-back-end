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
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
