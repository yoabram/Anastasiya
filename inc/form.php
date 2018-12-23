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

<p>Через несколько секунд вы будете перенаправлены на страницу оплаты.
    Нажмите кнопку, если не хотите ждать... </p>

<?php if(!empty($_SESSION['d97ld1in8osbcu'])): ?>
    <form id="d97ld1in8osbcu" name="d97ld1in8osbcu" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
        <input type="hidden" name="ik_co_id" value="5c1e731a3d1eaf91418b4567" />
        <input type="hidden" name="ik_pm_no" value="<?=$_SESSION['d97ld1in8osbcu']['id'];?>"/>
        <input type="hidden" name="ik_am" value="<?=$_SESSION['d97ld1in8osbcu']['price'];?>" />
        <input type="hidden" name="ik_cur" value="RUB" />
        <input type="hidden" name="ik_desc" value="Event Description" />
        <input type="submit" value="Pay">
    </form>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>
    setTimeout(function () {
        $('form').submit();
    }),5);
</script>
</body>
