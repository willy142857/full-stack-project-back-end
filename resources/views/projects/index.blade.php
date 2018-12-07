@extends('layouts.master')

@section('title', '計畫列表')

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
        <li><a href="#"><i class="fa fa-shopping-bag"></i> 計畫管理</a></li>
        <li class="active">計畫列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <!-- box-header -->
            <div class="box-header with-border">
              <h3 class="box-title">全站募資計畫一覽表</h3>
                <div class="box-tools">
                  <a class="btn btn-success btn-sm" href="{{ route('projects.create') }}">新增</a>
                </div>
            </div>
            <!-- /.box-header -->
            {{--TODO:完成列表--}}
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>#</th>
                    <th>計畫名稱</th>
                    <th>提案人</th>
                    <th>聯絡信箱</th>
                    <th>分類</th>
                    <th>計畫簡介</th>
                    <th>開始時間</th>
                    <th>結束時間</th>
                    <th>已募資金額</th>
                    <th>計畫募資金額</th>
                    <th>支持人數</th>
                    <th>計畫描述</th>
                    <th style="width: 250px">回饋選項</th>
                    <th>封面圖片</th>
                    <th>相關網頁</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($projects as $project)
                  <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->fundraiser }}</td>
                    <td>{{ $project->email }}</td>
                    <td>{{ $project->category->name }}</td>
                    <td>{{ $project->brief }}</td>
                    <td>{{ $project->started_at }}</td>
                    <td>{{ $project->ended_at }}</td>
                    <td>{{ $project->curr_amount }}</td>
                    <td>{{ $project->goal_amount }}</td>
                    <td>{{ $project->backer }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                      @foreach($project->feedbacks as $feedback)
                            <p>日期: {{ $feedback->date }}</p>
                            <p>價錢: {{ $feedback->price }}</p>
                            <p>描述: {{ $feedback->description }}</p>
                            <p>支持人數: {{ $feedback->backer }}</p>
                      @endforeach
                    </td>
                    <td>{{ $project->img_path }}</td>
                    <td>{{ $project->relative_web }}</td>

                    <td class="text-center">
                      {{--<a href="{{ route('projects.edit', $project->id) }}" class="btn btn-xs btn-primary">編輯</a>--}}
                      <form action="{{ route('projects.destroy', $project->id) }}" method="post" style="display: inline">
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
