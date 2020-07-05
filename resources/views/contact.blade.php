@include('layouts.header')

<header>
    <style>

        #sendmessage, #senderror {
            border: 1px solid #e6e6e6;
            background: #f6f6f6;
            display: none;
            text-align: center;
            padding: 15px 12px 15px 65px;
            margin: 10px 0;
            font-weight: 600;
            margin-bottom: 30px;
        }

        #senderror {
            color: #f00;
        }

        #senderror span {
            font-weight: bold;
        }
    </style>

</header>


<body>
<body>
<div></div>
<div class="container">
    <br><br><br><br><br><br><br><br>


    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="./mail.php" method="post">
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email1">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона:</label>
                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="message">Сообщение:</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Отправить сообщение</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>


</body>
