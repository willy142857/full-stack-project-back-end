@extends('layouts.master')

@section('title', '編輯提案')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                提案管理
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-shopping-bag"></i> 提案管理</a></li>
                <li class="active">編輯提案</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <div class="row">
                <!-- .col -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">編輯提案</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('products.update', $product->id) }}" method="post">

                            @csrf
                            @method('PATCH')

                            <div class="box-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> 錯誤！</h4>
                                        請修正以下表單錯誤：
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="title">名稱</label>
                                    <input type="text" class="form-control" id="title" name="name" placeholder="請輸入名稱" value="{{ old('name', $project->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="category">分類</label>
                                    <select id="category" name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"{{ (old('category_id', $project->category_id) == $category->id)? ' selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="price">方案</label>
                                        <input type="number" class="form-control" id="feedback_name" name="feedback_name" placeholder="請輸入方案" value="{{ old('feedback_name', $feedback->id) }}">
                                    </div>
                                <div class="form-group">
                                    <label for="price">價格</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="請輸入價格" value="{{ old('price', $feedback->price) }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">描述</label>
                                    <textarea class="form-control" id="description" rows="5" name="description" placeholder="請輸入描述">{{ old('description', $project->description) }}</textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer text-right">
                                <a class="btn btn-link" href="#">取消</a>
                                <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </form>
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
