<?php session_start(); ?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>

<p>����� ��������� ������ �� ������ �������������� �� �������� ������.
    ������� ������, ���� �� ������ �����... </p>

<?php if(!empty($_SESSION['payment'])): ?>
<form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">


</form>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>
    setTimeout(function () {
        $('form').submit();
    }),5000);
</script>
</body>
