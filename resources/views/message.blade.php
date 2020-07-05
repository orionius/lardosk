<head>
    <title>Ajax </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>

</head>
@include('layouts.header')


<body>
<div id='msg'>This message will be replaced using Ajax.
    Click the button to replace the message.
</div>


<form action="" method="POST">
    {{--    {{ csrf_field() }}   --}}
    <div class="uk-margin">
        <span class="uk-text-bold">Число:</span><input type="text" class="uk-input uk-form-width-small" name="bs">
    </div>
    <input type="hidden" value=" name " name="user">
    <button id="buttonn" class="uk-button uk-button-primary" type="button">Поставить</button>
</form>


<script type="text/javascript">
    $(document).ready(function () {
        $("#buttonn").click(function () {
            $.ajax({
                url: '/ajax', //url в роуте
                type: 'post',
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function (data) {
                    alert(data.msg);
                    $('.th-cof').html(data);
                },
                error: function (data) {
                    console.log('2');
                }
            });
        });
    });
</script>
</body>
