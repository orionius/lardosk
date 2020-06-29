<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_panel.css') }}"/>
</head>


@extends('layouts.adminpanel')

{{--  @section ("test","ТЕСТИЩЕ") --}}

{{--
@section('left_panel')
ghhhhhgggggggggggggggggggggggggggggggggggggggg
@endsection
 --}}


@section('admin_block')
    @if( !empty($id))
        {{ route("read.post,['id'=>$id]")  }}
    @endif


    <br>
    <br>
    <br>

    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-8">


                <form method="post" action="{{route('postadmin.newsubm')}}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Загрузите изображение</label>
                        <input type="file" name="image" class="form-control-file"
                               id="exampleFormControlFile1">
                        <br>
                        @if( !empty($images_list))
                            @foreach ($images_list as $image_list)
                                <img class="images_add_advert"
                                     src="{{URL::asset('storage/images')}}/{{ $image_list->url_image }}"
                                     alt="Los Angeles" style="width:100%;">
                            @endforeach
                        @endif


                        {{--     @include('flash::message')  --}}
                    </div>
                    <input id="1" class="form-control form-control-lg" name="topic_name" type="text"
                           placeholder="Название">
                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Обьявление</label>
                        <textarea class="form-control" name="description" id="Textarea1" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Отправить</button>

                </form>

            </div>
            <div class="col">
            </div>
        </div>
    </div>


@endsection

