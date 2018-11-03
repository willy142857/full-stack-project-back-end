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
                  <a class="btn btn-success btn-sm" href="#">新增</a>
                </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>計畫名稱</th>
                    <th>提案人</th>
                    <th>聯絡信箱</th>
                    <th>開始時間</th>
                    <th>結束時間</th>
                    <th>計畫簡介</th>
                    <th>計畫描述</th>
                    <th>計畫募資金額</th>
                    <th>已募資金額</th>
                    <th>支持人數</th>
                    <th>回饋選項</th>
                    <th>相關網頁</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>計畫名稱</td>
                    <td>提案人</td>
                    <td>聯絡信箱</td>
                    <td>開始時間</td>
                    <td>結束時間</td>
                    <td>計畫簡介</td>
                    <td>計畫描述</td>
                    <td>計畫募資金額</td>
                    <td>已募資金額</td>
                    <td>支持人數</td>
                    <td>回饋選項</td>
                    <td>相關網頁</td>
                    <td class="text-center">
                      <a href="" class="btn btn-xs btn-primary">編輯</a>
                      <form style="display: inline">
                        <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <td>計畫名稱</td>
                    <td>提案人</td>
                    <td>聯絡信箱</td>
                    <td>開始時間</td>
                    <td>結束時間</td>
                    <td>計畫簡介</td>
                    <td>計畫描述</td>
                    <td>計畫募資金額</td>
                    <td>已募資金額</td>
                    <td>支持人數</td>
                    <td>回饋選項</td>
                    <td>相關網頁</td>
                    <td class="text-center">
                      <a href="" class="btn btn-xs btn-primary">編輯</a>
                      <form style="display: inline">
                        <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                      </form>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>計畫名稱</th>
                  <th>提案人</th>
                  <th>聯絡信箱</th>
                  <th>開始時間</th>
                  <th>結束時間</th>
                  <th>計畫簡介</th>
                  <th>計畫描述</th>
                  <th>計畫募資金額</th>
                  <th>已募資金額</th>
                  <th>支持人數</th>
                  <th>回饋選項</th>
                  <th>相關網頁</th>
                  <th>管理</th>
                </tr>
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
