<html>
<head>
    <title>Test PDF</title>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
<img src="{{ base_path() }}/public/pdf/bcaa/page1.jpg" width="725">
<div class="page-break"></div>
<img src="{{ base_path() }}/public/pdf/bcaa/page2.jpg" width="725">
</body>
</html>