<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_adv_list.css') }}"/>

</head>

<style>

</style>


@extends('layouts.adminpanel')

@section('admin_block')

    <div class="container-fluid">
        <div class="row  row-flex row-flex-wrap">
            <div class="col-sm-4">
                <div class="well">

                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                </div>
            </div>
            <div class="col-sm-4">
                <div class="well">
                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                    est, qui dolorem
                </div>
            </div>
            <div class="col-sm-4">
                <div class="well">

                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ip
                </div>
            </div>
        </div>
        <div class="row  row-flex row-flex-wrap">

            <div class="col order-12">
                <div class="well">
                    <table class="table-striped table-bordered table-hover table-condensed" width="100%" border="1"
                           cellpadding="4" cellspacing="0">
                        <tr>
                            <th><p class='text-center'>Вид</p></th>
                            <th><p class='text-center'>№</p></th>
                            <th><p class='text-center'>Создано</p></th>
                            <th><p class='text-center'>Название </p></th>
                            <th><p class='text-center'>Описание</p></th>
                        </tr>


                        @foreach ( $advents as $advent)

                            <tr>
                                <td class="visible_width">
                                    @if (  $advent->visible )
                                        <p><input class='chekboxx' type="checkbox" name="checkbox"
                                                  title="Отобразить - скрыть обьявление " value="1" checked></p>
                                    @else
                                        <p><input class='chekboxx' type="checkbox"
                                                  title="Отобразить - скрыть обьявление "
                                                  name="checkbox" value="0"></p>

                                @endif


                                <td class="id_width" title="Порядковый номер "> {{ $advent->id }}


                                <td class="date_width"
                                    title="Дата создания "> {{  carbonFormatted($advent->created_at,'Europe/Moscow')   }}
                                <td class="topic_width" title="Название обьявления "> {{ $advent->topic_name }}
                                <td class="describe_width" title="Текст Обьявления "> {{ $advent->description }}
                            </tr>
                        @endforeach

                    </table>

                    <button type="button" class="btn btn-primary">Отправить</button>


                </div>
            </div>


        </div>

        <script type="text/javascript">


            $(document).ready(function () {


                $(".chekboxx").change(function () {
                    var chekboxAray = [];


                    $(".chekboxx").each(function (i) {


                        var chek = $('.chekboxx').eq(i).prop('checked');

                      //  if (chek  ) {chek *= 1 ;} else  {chek *= 0; }

                        chekboxAray.push([chek]);
                     //   alert(chekboxAray[i]); // передать
                    });


                 //  chekboxAray.forEach(element => alert(element));// передать


                    /*
                    var checkboxes = Array.from(document.querySelectorAll('.chekboxx'));
                    checkboxes.forEach(function (checkbox, i) {


                        //     $("input:checkbox").click(function () { index := wb.document.getElementByID("chekboxx").sourceIndex
                        //            var chkVal = $(this).attr("value");

                        var chekAray = [];
                        var chek = $('.chekboxx').eq(i).val();
                        chekAray.push(chek);
    */


                    $.ajax({
                        url: '/ajax',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            chekboxAray: chekboxAray   ,
                        },
                        success: function (data) {
                            alert(data.msg);

                        },
                        error: function (data) {

                        }
                    });
                    //     });
                });

            });
        </script>


@endsection

