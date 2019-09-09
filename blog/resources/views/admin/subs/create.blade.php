@extends('admin.layout')

@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавление подписчика
        <small>на сайте</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница добавление подписоки на сайт</h3>
              @include('admin.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('subscribers.index')}}" class="btn btn-default">Назад к списку</a>
              </div>

            </div>
      </div>


      {{Form::open(['route'  =>  'subscribers.store'])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем подписчика</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail1" placeholder="">
            </div>
        </div>
      </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

       <div class="box">
        <div class="box-footer">
          <button class="btn btn-lg btn-block btn-success ">Добавить подписчика</button>
        </div>
        <!-- /.box-footer-->
      </div>

      {{Form::close()}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection