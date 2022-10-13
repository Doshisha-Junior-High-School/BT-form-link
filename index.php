<!--Program by Kanata Tsuda-->
<!--GitHub Link-->
<!-- https://github.com/Doshisha-Junior-High-School/BT-form-link -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リダイレクト中</title>
    <script>
        function load() {
            var nowdate = new Date()
            var year = nowdate.getFullYear()
            var month = (nowdate.getMonth() + 1).toString().padStart(2, '0')
            var date = nowdate.getDate().toString().padStart(2, '0')
            var fullDate = year + "-" + month + "-" + date
            var link = "https://docs.google.com/forms/d/e/1FAIpQLSc16HQ7iztjqe_ryHezHBQ_gTBy0r-WV2J7hlcwDEy2oJl9Yg/viewform?usp=pp_url&entry.2014056491=" +
                fullDate
            window.location.href = link;
        }
    </script>
    <style>
        * {
            text-align: center;
            font-size: 45px;
        }

        h1 {
            color: #ff0000;
        }
    </style>
</head>

<body onload="load();">
    <b><h1>ページ転送中</h1></b>
    <h2>この画面のまま<br>お待ちください</h2>
</body>

</html>