@include('layouts.header')


<link rel="stylesheet" type="text/css" href="{{ asset('css/admin_panel.css') }}"/>

@section('left_panel')
    <body>

    <div class="block_left" ><br>

        <a class="dropdown-item" href='{{ url("home") }}'">
        <h2> {{ __('Пользовательская часть') }}</h2>
        </a><br>

        <a class="dropdown-item" href='{{ url("home") }}'">
        <h2>  {{ __('Список обьявлений  ') }} </h2>
            </a><br>

        <a class="dropdown-item" href='{{ route("postadmin.new") }}'">
        <h2> {{ __('Добавить новое обьявление ') }} </h2>
            </a><br>


        <div style="position:absolute;bottom:10%;width:100%">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <h2>     {{ __('Выйти из учетной записи') }}  </h2>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </div>


    @show

    @yield('test')
    @section('admin_block')
<div class="block_right">




</div>

    @show
    </body>
