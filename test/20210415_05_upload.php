<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>

<button class="btn btn-primary" onclick="avatar.click()">上傳</button>

<form name="form1" style="display: none">
    <input type="file" name="avatar" id="avatar">
</form>

<img id="myimg" src="" alt="">

<script src="../lib/jquery-3.6.0.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script>
    const avatar = document.querySelector('#avatar');

    avatar.addEventListener('change', function(){
        const fd = new FormData(document.form1);

        fetch('a20210415-03-upload.php', {
            method: 'POST',
            body: fd
        })
            .then(r=>r.json())
            .then(obj=>{
                if(obj.success) {
                    document.querySelector('#myimg').src = 'imgs/' + obj.filename;
                }
            })



    });
    // FileReader
    // https://developer.mozilla.org/en-US/docs/Web/API/FileReader/readAsDataURL
</script>
</body>
</html>
