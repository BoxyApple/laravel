@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменение новости 
        <small>на сайте</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    	{{ Form::open([
    		'route'	=> ['posts.update', $post->id],
    		'files'	=> true,
    		'method'	=> 'put'

    		])}}
      <!-- Default box -->

      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница изменение новости на сайт</h3>
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
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{$post->title}}">
            </div>
            
            <div class="form-group">
              <label>Категория</label>
             {{Form::select('category_id', 
	              $categories, 
	              $post->getCategoryID(), 
	              ['class' => 'form-control select2'])
	          }}
            </div>

            <div class="form-group">
              <label>Теги</label>
              {{Form::select('tags[]', 
	              $tags, 
	              $selectedTags, 
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
                <input type="text" class="form-control pull-right" id="datepicker" value="{{$post->date}}" name="date">
              </div>
              <!-- /.input group -->
            </div>

          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Описание</label>
              <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Полный текст</label>
              <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
            </div>
          </div>

          <div class="col-md-12">
          <!-- checkbox -->
            <div class="form-group">
              <label>
                {{Form::checkbox('is_featured', '1', $post->is_featured, ['class' => 'minimal'])}}
              </label>
              <label>
                Рекомендовать
              </label>
            </div>
            <!-- checkbox -->
            <div class="form-group">
              <label>
                {{Form::checkbox('status', '1', $post->status, ['class' => 'minimal'])}}
              </label>
              <label>
                Черновик
              </label>
            </div>

           <div class="form-group">
              <img src="{{$post->getImage()}}" alt="" class="img-responsive" width="200">
              <label for="exampleInputFile">Лицевая картинка</label>
              <input type="file" id="exampleInputFile" name="image">
              <p class="help-block">Поддерживаемые форматы: jpg, jpeg, png</p>
            </div>
          </div>
          
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

       <div class="box">
        <div class="box-footer">
          <button class="btn btn-lg btn-block btn-success ">Изменить новость</button>
        </div>
        <!-- /.box-footer-->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection