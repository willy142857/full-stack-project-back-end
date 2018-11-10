@extends('layouts.master')

@section('title', '提案')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        計畫管理
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> 募資計畫管理</a></li>
        <li class="active">新增計畫</li>
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
              <h3 class="box-title">新增計畫</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding-left: 30px;padding-right: 30px">
              <form role="form" action="{{ route('projects.store') }}" method="post">
                @csrf
                <!-- error handling -->
                @if($errors->any())
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i>Errors!</h4>
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

              <!-- text input -->
                <div class="form-group">
                  <label>提案人</label>
                  <input type="text" class="form-control" placeholder="Enter ..."
                    name="fundraiser" value="{{ old('fundraiser') }}">
                </div>
                <div class="form-group">
                  <label for="email">信箱</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" id="email" class="form-control" placeholder="Enter ..."
                      name="email" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label>計畫名稱</label>
                  <input type="text" class="form-control" placeholder="Enter ..."
                    name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                  <label for="category">計畫分類</label>
                  <select id="category" name="category_id" class="form-control">
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">
                        {{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left: 0px;padding-right: 10px">
                  <div class="form-group">
                    <label>開始日期</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker1"
                        name="started_at" value="{{ old('started_at') }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left: 10px;padding-right: 0px">
                  <div class="form-group">
                    <label>結束日期</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker2"
                        name="ended_at" value="{{ old('ended_at') }}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="amount">計畫目標</label>
                  <div class="input-group">
                    <input type="number" id="amount" class="form-control" placeholder="Enter ..."
                      name="goal_amount" value="{{ old('goal_amount') }}">
                    <span class="input-group-addon">NTD</span>
                  </div>
                </div>
                <div class="form-group">
                  <label>計畫簡介</label>
                  <input type="text" class="form-control" placeholder="Enter ..."
                    name="brief" value="{{ old('brief') }}">
                </div>
                <div class="form-group">
                  <label>封面照片</label>
                  <input type="file">
                </div>
                <div class="form-group">
                  <label>計畫說明</label>
                  <textarea class="form-control" rows="4" placeholder="Enter ..."
                    name="description">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                  <label>回饋選項金額</label>
                  <input type="number" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>回饋日期</label>
                  <div class="input-group date">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    <input type="text" class="form-control pull-right" id="datepicker3">
                  </div>
                </div>
                <div class="form-group">
                  <label>回饋說明</label>
                  <textarea class="form-control" rows="4" placeholder="Enter ..."
                    ></textarea>
                </div>
                <div class="form-group">
                  <label>相關網頁</label>
                  <input type="url" class="form-control" placeholder="Enter ..."
                    name="relative_web" value="{{ old('relative_web') }}">
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      我已詳閱並同意提案契約書
                    </label>
                  </div>
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">新增</button>
                  <a class="btn btn-link" href="#">取消</a>
                </div>
                  <!-- input states -->
                  <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                    <span class="help-block">Help block with success</span>
                  </div>
                  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                      warning</label>
                    <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                    <span class="help-block">Help block with warning</span>
                  </div>
                  <div class="form-group has-error">
                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                      error</label>
                    <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                    <span class="help-block">Help block with error</span>
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
