@extends('Home/public')

@section('content')

    <div id="main" class="content">
        <div class="container">
            <style>
                body.custom-background {
                    background: #fff
                }

                .container {
                    padding: 10px 0px;
                }
            </style>
            <section class="post_content">
                <header class="post_header">
                    <h1 class="post_title">链接</h1>
                </header>
                <div class="links">
                    <h3 class="catalog-title">Life Blog</h3>
                    <div class="catalog-description"></div>
                    <div class="catalog-share">4 items in collection</div>
                    <div class="userItems">
                        <div class="userItem">
                            <div class="userItem--inner">
                                <div class="userItem-content"><img alt='' src='{{URL::asset('/images/8e5da64c712d2bb59235d8d746108cb1.jpeg')}}' class='avatar avatar-64 photo' height='64' width='64' />
                                    <div class="userItem-name">
                                        <a class="link link--primary" href="#" target="_blank">Akina</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="userItem">
                            <div class="userItem--inner">
                                <div class="userItem-content"><img alt='' src='{{URL::asset('/images/89aeed9e656e1f7fbb04691aa3b38252.jpeg')}}' class='avatar avatar-64 photo' height='64' width='64' />
                                    <div class="userItem-name">
                                        <a class="link link--primary" href="#" target="_blank">Dearzd</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="userItem">
                            <div class="userItem--inner">
                                <div class="userItem-content"><img alt='' src='{{URL::asset('/images/d52a89521eb0cdb4efb343fb63ce3986.jpeg')}}' class='avatar avatar-64 photo' height='64' width='64' />
                                    <div class="userItem-name">
                                        <a class="link link--primary" href="#" target="_blank">Meow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="userItem">
                            <div class="userItem--inner">
                                <div class="userItem-content"><img alt='' src='{{URL::asset('/images/22278c1d83002246dca48b52e306b1c9.jpeg')}}' class='avatar avatar-64 photo' height='64' width='64' />
                                    <div class="userItem-name">
                                        <a class="link link--primary" href="#" target="_blank">Tokin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection