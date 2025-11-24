<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>社員情報入力フォーム</title>
    <style>
        /* フォームの見た目を画像に近づけるためのCSS */
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
            /* 見出しを大きく、強調 */
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            margin-bottom: 10px;
            align-items: center;
        }
        .form-group label {
            /* 左側のラベル幅 */
            width: 100px; 
            font-weight: bold;
            margin-right: 10px;
        }
        .form-group input[type="text"], .form-group select {
            flex-grow: 1;
            padding: 5px;
            border: 1px solid #aaa;
        }
        #submit-btn {
            margin-top: 15px;
            padding: 8px 15px;
            border: 1px solid #000;
            background-color: #f0f0f0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>社員情報入力フォーム</h1>
        
        <form action="#" method="post">
            
            <div class="form-group">
                <label for="employee_name">社員名</label>
                <input type="text" id="employee_name" name="employee_name" value="">
            </div>

            <div class="form-group">
                <label for="employee_age">年齢</label>
                <input type="text" id="employee_age" name="employee_age" value="">
            </div>

            <div class="form-group">
                <label for="department">所属部署</label>
                <select id="department" name="department">
                    <option value="開発部" selected>開発部</option>
                    <option value="営業部">営業部</option>
                    <option value="人事部">人事部</option>
                </select>
            </div>

            <button type="submit" id="submit-btn">送信</button>

        </form>
    </div>
</body>

</html>