@extends('layouts.master')

@section('title', '主控台')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">



        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

            <div class="col-md-10">



                <!-- PRODUCT LIST -->
                <div class="box box-primary" id="myBIG">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently Added Projects</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <!-- /.item -->
                            @foreach($recentProjects as $recentProject)
                            <li class="item">
                                <div class="product-img">
                                    <img src="storage/project/project{{$recentProject->id}}.jpg" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <h4  class="product-title">{{ $recentProject->name }}
                                        <span class="label label-warning pull-right">提案人: {{ $recentProject->fundraiser }}</span></h4>
                                    <span class="product-description">{{ $recentProject->brief }}</span>
                                    <h4><span class="label label-warning pull-right">提案時間: {{ $recentProject->created_at }}</span></h4>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{ route('projects.index') }}" class="uppercase">View All Projects</a>
                    </div>
                    <!-- /.box-footer -->
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
