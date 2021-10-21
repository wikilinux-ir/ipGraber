<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            background-color: #353535;
            color: #e9e9e7;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 100px;
        }
        .green {
            color:#009d00;
        }
        td{
            text-align: center;
            border-bottom: 2px solid #e9e9e7 ;
        }
        h4{
            color:#009d00;
            font-size: 30px;
        }
    </style>
</head>
<body>

<table>
    <?php if ($result->veiw == 0): ?>
        <h4>User not visit your link!!</h4>
    <?php else: ?>
        <tr><td class="green">visit at :</td><td><?=$result->visit_at?></td></tr>
        <tr><td class="green">ip address :</td><td><?=$result->ipaddr?></td></tr>
        <tr><td class="green">user Agent :</td><td><?=$result->user_agent?></td></tr>
        <tr><td class="green">user language :</td><td><?=$result->user_language?></td></tr>

    <?php endif?>


</table>

</body>
</html>
