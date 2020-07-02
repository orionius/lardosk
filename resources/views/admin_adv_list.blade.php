<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_panel.css') }}"/>
</head>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
    <tr>
        <th><p class='text-center'>№</p></th>
        <th><p class='text-center'>Создано</p></th>
        <th><p class='text-center'>Название </p></th>
        <th><p class='text-center'>Описание</p></th>

    </tr>
    @foreach ( adventAll() as $advent)

        <tr>

            <td> {{ $advent->id }}
            <td> {{ $advent->created_at }}
            <td> {{ $advent->topic_name }}
            <td> {{ $advent->description }}


        </tr>



    @endforeach

</table>
