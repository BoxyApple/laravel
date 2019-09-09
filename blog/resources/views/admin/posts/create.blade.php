@extends('admin.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавление новости 
        <small>на сайт</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    	{{ Form::open([
    		'route'	=> 'posts.store',
    		'files'	=> true

    		])}}
      <!-- Default box -->

      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница добавление новостей на сайт</h3>
              @include('admin.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('posts.index')}}" class="btn btn-default">Назад к списку</a>
              </div>

            </div>
      </div>

      <div class="box">
        <div class="box-body">
          <div class="col-md-12">

            <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
              <label>Категория</label>
              {{Form::select('category_id', 
	              $categories, 
	              null, 
	              ['class' => 'form-control select2'])
	             }}
            </div>

            <div class="form-group">
              <label>Теги</label>
               {{Form::select('tags[]', 
	              $tags, 
	              null, 
	              ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Выберите теги'])
	             }}
            </div>

            <!-- Date -->
            <div class="form-group">
              <label>Дата:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker" name="date" value="{{old('date')}}">
              </div>
              <!-- /.input group -->
            </div>

          </div>
            
          <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Описание</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Полный текст</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{old('content')}}</textarea>
            </div>
          </div>

          <div class="col-md-12">
            <!-- checkbox -->
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="is_featured">
                </label>
                <label>
                  Рекомендовать
                </label>
              </div>

              <!-- checkbox -->
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="status">
                </label>
                <label>
                  Черновик
                </label>
              </div>
              
              <div class="form-group">
                <label for="exampleInputFile">Лицевая картинка</label>
                <input type="file" id="exampleInputFile" name="image">
                <p class="help-block">Поддерживаемые форматы: jpg, jpeg, png</p>
              </div>

              
          </div><!-- /.box-body -->
      </div><!-- /.box -->
        

      <div class="box">
        <div class="box-footer">
          <button class="btn btn-lg btn-block btn-success ">Добавить новость</button>
        </div>
        <!-- /.box-footer-->
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection