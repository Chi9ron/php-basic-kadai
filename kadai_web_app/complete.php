<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>社員情報登録完了</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 28px; 
            font-weight: bold;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        #back-btn {
            padding: 8px 15px;
            border: 1px solid #000;
            background-color: #f0f0f0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>登録が完了しました。</h1>
        
        <p>社員情報がデータベースに保存されました。</p>
        
        <button id="back-btn" onclick="location.href='form.php';">戻る</button>
    </div>
</body>

</html>