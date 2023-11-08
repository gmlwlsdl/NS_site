<?
header("Access-Control-Allow-Origin: *"); // 모든 도메인에서 액세스 허용
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUTIS Website</title>
</head>
<body style="margin: 0; overflow: hidden;">
    <script>
        // 현재 웹 페이지의 도메인이 "naver.co.kr"인지 확인
        if (document.domain.toString().indexOf("lms.kyonggi.ac.kr") != -1) {
            // 도메인을 "lms.kyonggi.ac.kr"로 변경
            document.domain = "lms.kyonggi.ac.kr";
        }
    </script>
    <iframe src="https://lms.kyonggi.ac.kr/login.php" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
</body>
</html>