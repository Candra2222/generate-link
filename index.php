<?php
function randomString($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $result;
}

// ganti dengan domain Netlify kamu
$netlifyDomain = "https://profound-nasturtium-68c219.netlify.app/";

$link = "";
if (isset($_POST['generate'])) {
    $kode = randomString(10);
    $link = $netlifyDomain . $kode;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Generate Link</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
        }
        .box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background: #1877f2;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="box">
    <h3>Generate Short Link</h3>

    <form method="post">
        <button type="submit" name="generate">Buat Link</button>
    </form>

    <?php if ($link): ?>
        <input type="text" value="<?= htmlspecialchars($link) ?>" onclick="this.select();" readonly>
        <small>Klik kolom untuk copy</small>
    <?php endif; ?>
</div>

</body>
</html>
