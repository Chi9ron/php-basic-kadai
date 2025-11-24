<?php
$name = isset($_POST['employee_name']) ? $_POST['employee_name'] : '（入力なし）';
$age = isset($_POST['employee_age']) ? $_POST['employee_age'] : '（入力なし）';
$department = isset($_POST['department']) ? $_POST['department'] : '（選択なし）';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>社員情報入力フォーム - 確認</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 450px;
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        p {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
            width: 30%;
        }
        .button-group button, .button-group input[type="submit"] {
            padding: 8px 15px;
            border: 1px solid #000;
            background-color: #f0f0f0;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>入力内容をご確認ください。</h1>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
        
        <table>
            <thead>
                <tr>
                    <th>項目</th>
                    <th>入力内容</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>社員名</td>
                    <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td>所属部署</td>
                    <td><?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            </tbody>
        </table>

        <div class="button-group">
            
            <form action="complete.php" method="post" style="display: inline;">
                <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="department" value="<?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?>">
                <button type="submit">確定</button>
            </form>

            <button type="button" onclick="history.back()">キャンセル</button>
        </div>
    </div>
</body>

</html>