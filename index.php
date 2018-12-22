<?php require_once 'inc/functions.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <meta name="interkassa-verification" content="143ae937acddf2cde1c1e365c4ca2500" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">���������</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">� �������� <span class="sr-only">(current)</span></a>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="�����" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">�����</button>
        </form>
    </div>
</nav>

<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">����� �����������</h5>
            <p class="card-text">����� ����������� ��� ��� New Look</p>
            <p class="price text-danger">2500 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="2500"
               data-product="����� �����������">������</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">������ �����������</h5>
            <p class="card-text">������ ����������� ��� ��� New Look</p>
            <p class="price text-danger">2500 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="2500" data-product="�������� �����������">������</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">����� ������</h5>
            <p class="card-text">3 ���� ����� ���������� ������ Polo Ralph Lauren</p>
            <p class="price text-danger">1190 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="1190" data-product="����� ������">������</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">����� ������</h5>
            <p class="card-text">3 ���� ������ ���������� ������ Polo Ralph Lauren</p>
            <p class="price text-danger">1190 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="1190" data-product="����� ������">������</a>
        </div>
    </div>
</div>
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">������� �����������</h5>
            <p class="card-text">����� ����������� New Look</p>
            <p class="price text-danger">2700 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="2500" data-product="������� �����������">������</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">����� �����������</h5>
            <p class="card-text">����� ����������� New Look</p>
            <p class="price text-danger">2700 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="2700" data-product="����� �����������">������</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">����� ������</h5>
            <p class="card-text">5 ���� ����� ���������� ������ Polo Ralph Lauren</p>
            <p class="price text-danger">2000 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="1190" data-product="����� ������">������</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://via.placeholder.com/200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">����� ������</h5>
            <p class="card-text">3 ���� ����� ���������� ������ Polo Ralph Lauren</p>
            <p class="price text-danger">1190 ������ </p>
            <a href="#" class="btn btn-primary buy" data-price="1190" data-product="����� ������">������</a>
        </div>
    </div>
</div>

<div class="modal fade" id="cart" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">���������� ������</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="buy" method="post">
                    <div class="form-group">
                        <label for="name">���</label>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="���� ���" required>
                    </div>
                    <div class="form-group">
                        <label for="fam">�������</label>
                        <input type="text" name="fam" class="form-control" id="fam"
                               placeholder="���� �������" required>
                    </div>
                    <div class="form-group">
                        <label for="number">�������</label>
                        <input type="text" name="number" class="form-control" id="number"
                               placeholder="�������" required>
                    </div>
                    <div class="form-group">
                        <label for="">����� ����������� �����</label>
                        <input type="email" name="email" class="form-control" id="email"
                               placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="">�������� ������</label>
                        <input type="text" name="in" class="form-control" id="in"
                               placeholder="������" required>
                    </div>
                    <div class="form-group">
                        <label for="">����� ��������</label>
                        <input type="text" name="ad" class="form-control" id="ad"
                               placeholder="�����" required>
                    </div>
                    <div class="form-group">
                        <label for="product">��������� �����</label>
                        <input type="text" name="product" class="form-control" id="product" readonly>
                    </div>
                    <div class="form-group">
                        <label for="price">����</label>
                        <input type="text" name="price" class="form-control" id="price" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary th">�������� �����</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="th1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">�������!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>��� ����� ������� ��������. � ������� ���� � ���� �������� ��� �������� ��� ������������ ������</p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/main1.js"></script>
</body>
</html>
