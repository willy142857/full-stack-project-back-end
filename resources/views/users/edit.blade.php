@extends('layouts.master')

@section('title', '編輯使用者')

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
                <li class="active">編輯使用者</li>
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
                            <h3 class="box-title">編輯使用者</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('users.update', $user->id) }}" method="post">

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
                                    <input type="text" class="form-control" id="title" name="name" placeholder="請輸入名稱" value="{{ old('name', $user->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="sex">性別：</label>
                                    {{--<input type="text" class="form-control" id="sex" name="sex" placeholder="請輸入性別" value="{{ old('sex', $user->sex) }}">--}}
                                    <input id="sex" type="radio" name="sex" value="男" {{ old('sex', $user->sex) == '男' ? 'checked' : ''}}/>男
                                    <input id="sex" type="radio" name="sex" value="女" {{ old('sex', $user->sex) == '女' ? 'checked' : ''}}/>女
                                </div>
                                <div>
                                    <label for="birth">Birthday：</label>
                                    <input type="date" id="birth" name="birth" value="{{ old('birth', $user->birth) }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">連絡電話</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="請輸入連絡電話" value="{{ old('phone', $user->phone) }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">信箱</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="請輸入信箱" value="{{ old('email', $user->email) }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">地址</label>
                                    <textarea class="form-control" id="address" rows="5" name="address" placeholder="請輸入地址">{{ old('address', $user->address) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">描述</label>
                                    <textarea class="form-control" id="description" rows="5" name="description" placeholder="請輸入描述">{{ old('description', $user->description) }}</textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer text-right">
                                <a class="btn btn-link" href="{{route('users.index')}}">取消</a>
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
