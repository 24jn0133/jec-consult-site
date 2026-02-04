<?php
// submit.php

// フォームから送信されたか確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // データの取得とサニタイズ（安全対策）
    $name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
    $date = date("Y/m/d H:i:s");

    // CSVに書き込むデータ
    $data = [$date, $name, $email, $message];

    // CSVファイルのパス
    $filename = 'contacts.csv';

    // ファイルを追記モードで開く
    $fp = fopen($filename, 'a');
    
    // 他の人が書き込み中の場合のロック
    if (flock($fp, LOCK_EX)) {
        // CSVフォーマットで書き込み
        fputcsv($fp, $data);
        // ロック解除
        flock($fp, LOCK_UN);
    }
    
    // ファイルを閉じる
    fclose($fp);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5 text-center">
        <div class="card p-5">
            <h1 class="text-success">送信完了</h1>
            <p class="lead mt-3">お問い合わせありがとうございました。<br>内容を受け付けました。</p>
            <a href="index.php" class="btn btn-primary mt-4">トップページへ戻る</a>
        </div>
    </div>
</body>
</html>