<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .none {
            display: none;
        }
    </style>
</head>

<body>
<style>
    nav.navbar .nav-item.active{
        background-color: #5dc0df;
        border-radius: 10px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="product-list.php">商品列表</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="cart.php">購物車</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="login.php">登入</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="register.php">註冊</a>
            </li>

        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="btn-group-vertical" role="group" style="width: 100%;" >
                <a type="button" class="btn btn-primary" href="?">全部商品</a>
                <a type="button" class="btn btn-outline-primary" href="?cate=1">程式設計</a>
                <a type="button" class="btn btn-outline-primary" href="?cate=2">繪圖軟體</a>
                <a type="button" class="btn btn-outline-primary" href="?cate=3">網際網路應用</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="?page=0">
                                    <i class="fas fa-arrow-circle-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="?page=1">1</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="?page=2">2</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="?page=3">3</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="?page=2">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="/proj60/proj/img/small/PG30036.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">圖解C++程式設計
                            </h6>
                            <p><i class="fas fa-user-friends"></i> 洪一新、許瑞珍</p>
                            <p><i class="fas fa-dollar-sign"></i> 560</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="/proj60/proj/img/small/PG30035.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">圖解資料結構-使用JAVA</h6>
                            <p><i class="fas fa-user-friends"></i> 吳睿紘</p>
                            <p><i class="fas fa-dollar-sign"></i> 420</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="/proj60/proj/img/small/PG30034.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Visual C# 2008網路遊戲程式設計</h6>
                            <p><i class="fas fa-user-friends"></i> 江家頡、陳怡均</p>
                            <p><i class="fas fa-dollar-sign"></i> 480</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="/proj60/proj/img/small/PG20252.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">Java 重構- Java Refactoring</h6>
                            <p><i class="fas fa-user-friends"></i> 結城 浩</p>
                            <p><i class="fas fa-dollar-sign"></i> 490</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
    // const nums = document.querySelectorAll('.del');
    //
    // nums.forEach(num => {
    //     num.addEventListener('click', () =>{
    //         num.classList.add('none');
    //     });
    // });
    //
    // $('.trash').click(function(){
    //     $(this).closest('tr').remove();
    // });
</script>
</body>
</html>