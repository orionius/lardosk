<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>


@extends('layouts.app')

@section('content')




    <style>

        .stream {
            width: 400px;
            height: 200px !important;
            margin: 3px;

        }


        img {
            display: block;
            height: auto;
            height: 300px !important;
            max-width: 100%;

        }

        .container {
            padding-left: 0px;
            padding-right: 0px;
            width: 100%;
            border: 2em;

        }

        .carousel-inner {
            border-radius: 20px;


        }
    </style>




    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm">
                <div class="container stream">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner ">

                            <div class="item active">
                                <img class="img-responsive"
                                     src="https://fullpicture.ru/wp-content/uploads/2015/05/Samye-krasivye-prototipy-avtomobilej-20.jpg"
                                     alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Los Angeles</h3>
                                    <p>LA is always so much fun!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img class="img-responsive"
                                     src="https://content.choiz.me/uploads/2017-07/4791eee00b1f9b136b0128d6a283b6ab.jpg"
                                     alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Chicago</h3>
                                    <p>Thank you, Chicago!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img class="img-responsive"
                                     src="https://www.stylenews.ru/wp-content/uploads/2017/03/6587243b726005ab43e6739a1a4fefbf.jpg"
                                     alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>New York</h3>
                                    <p>We love the Big Apple!</p>
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>


            </div>
            <div class="col-sm">
                <div class="container stream">

                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner ">

                            <div class="item active">
                                <img class="img-responsive"
                                     src="https://fullpicture.ru/wp-content/uploads/2015/05/Samye-krasivye-prototipy-avtomobilej-20.jpg"
                                     alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Los Angeles</h3>
                                    <p>LA is always so much fun!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img class="img-responsive"
                                     src="https://content.choiz.me/uploads/2017-07/4791eee00b1f9b136b0128d6a283b6ab.jpg"
                                     alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Chicago</h3>
                                    <p>Thank you, Chicago!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img class="img-responsive"
                                     src="https://www.stylenews.ru/wp-content/uploads/2017/03/6587243b726005ab43e6739a1a4fefbf.jpg"
                                     alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>New York</h3>
                                    <p>We love the Big Apple!</p>
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>


            </div>
            <div class="col-sm">
                <div class="container stream">

                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner ">

                            <div class="item active">
                                <img class="img-responsive"
                                     src="https://fullpicture.ru/wp-content/uploads/2015/05/Samye-krasivye-prototipy-avtomobilej-20.jpg"
                                     alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Los Angeles</h3>
                                    <p>LA is always so much fun!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img class="img-responsive"
                                     src="https://content.choiz.me/uploads/2017-07/4791eee00b1f9b136b0128d6a283b6ab.jpg"
                                     alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Chicago</h3>
                                    <p>Thank you, Chicago!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img class="img-responsive"
                                     src="https://www.stylenews.ru/wp-content/uploads/2017/03/6587243b726005ab43e6739a1a4fefbf.jpg"
                                     alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>New York</h3>
                                    <p>We love the Big Apple!</p>
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>



















@endsection
