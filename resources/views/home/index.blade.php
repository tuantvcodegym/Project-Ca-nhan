<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styleindex.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="header">
    <div class="header-1">
        <div class="row">
            <div class="col-md-4">
                <div class="text-p">
                    <p>SELLING</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="list">
                        <ul>
                            <li>Home</li>
                            <li>Product</li>
                            <li>About us</li>
                            <li>Special</li>
                            <li>Testimonials</li>
                            <li>Blog</li>
                            <li>Contact</li>
                            <li><a href="{{route('getLogin')}}" class="btn btn-primary"><i class="fas fa-lock"></i>Log in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="video">
            <i class="fas fa-play"></i>
            <p><a href="#">WATCH VIDEO</a></p>
        </div>
        <div class="text-h2">
            <h2>Chúng tôi có một niềm đam mê trong việc tạo ra không gian mới và độc đáo</h2>
            <p>Ban có thể đến bất kỳ nơi nào trên thế giới mà không phải đi lòng vòng</p>
        </div>
        <div class="inclu">
            @include('home.fileslide')
        </div>
        <div class="banquyen">
            <small>@ website được lấy ý tưởng từ https://colorlib.com</small>
        </div>
    </div>
    <div id="ceo">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content-2">
                        <i class="fab fa-angrycreative"></i>
                        <h3>PERFECTLY DESIGN</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-2">
                        <i class="fab fa-amazon-pay"></i>
                        <h3>CAREFULLY PLANNED</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-2">
                        <i class="fab fa-accusoft"></i>
                        <h3>PERFECTLY DESIGN</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-1">
        <div class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="product-1">
                            <h5>San pham pho bien</h5>
                            <h2>Our Product</h2>
                            <p>orem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="container">
                <div class="row">

                    <!-- sau này sẽ foreach data tại đây -->

                    <div class="col-md-4">
                        <div class="data-1">
                            <div class="image"></div>
                            <h5>Ten San Pham</h5>
                            <small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </small>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <a class="btn btn-primary" href="#">Cart</a>
                                    <a class="btn btn-primary" href="#">Detail</a>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- kết thúc foreach tại đây -->

                    <div class="col-md-4">
                        <div class="data-1">
                            <div class="image"></div>
                            <h5>Ten San Pham</h5>
                            <small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </small>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <a class="btn btn-primary" href="#">Cart</a>
                                    <a class="btn btn-primary" href="#">Detail</a>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="data-1">
                            <div class="image"></div>
                            <h5>Ten San Pham</h5>
                            <small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </small>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <a href="#"><button class="btn btn-primary">Cart</button></a>
                                    <a href="#"><button class="btn btn-primary">Detail</button></a>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-file">
            @include("home.content")
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
