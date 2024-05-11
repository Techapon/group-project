<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tauri&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ระบบเพิ่มเเต้มสำหรับ พนักงานที่เคาน์เตอร์ </title>
    <Link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">
</head>
<body>
    
        <div class = "box">
            <div class = "text_head">
                <p>เพิ่มเเต้ม</p>
            </div>


            <form action="admin_code.php" method = "post">
                <text class = "text">รหัสนักเรียน</text>
                <br>

                <input type="text" name = "username" class = "id_name" placeholder = "รหัสนักเรียน">

                <br>
                <text class = "text">ราคาสินค้าทั้งหมด</text>
                <br>

                <input type="texxt" name = "score" class = "price" placeholder = "ราคาสินค้า">

                <br>
                <button class = "btn">ส่ง</button>
            </form>


        </div>
    
    
</body>
</html>