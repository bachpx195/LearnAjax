<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="assets/jquery-3.1.0.min.js"></script>
    <script language="javascript">
        function load_ajax()
//        ajax javascrip
        {
            // Tạo một biến lưu trữ đối tượng XML HTTP. Đối tượng này
            // tùy thuộc vào trình duyệt browser ta sử dụng nên phải kiểm
            // tra như bước bên dưới
            var xmlhttp;

            // Nếu trình duyệt là  IE7+, Firefox, Chrome, Opera, Safari
            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }
            // Nếu trình duyệt là IE6, IE5
            else
            {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            // Khởi tạo một hàm gửi ajax
            xmlhttp.onreadystatechange = function()
            {
                // Nếu đối tượng XML HTTP trả về với hai thông số bên dưới thì mọi chuyện
                // coi như thành công
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    // Sau khi thành công tiến hành thay đổi nội dung của thẻ div, nội dung
                    // ở đây chính là
                    document.getElementById("result").innerHTML = xmlhttp.responseText;
                }
            };

            // Khai báo với phương thức GET, và url chính là file result.php
            xmlhttp.open("GET", "result.php", true);

            // Cuối cùng là Gửi ajax, sau khi gọi hàm send thì function vừa tạo ở
            // trên (onreadystatechange) sẽ được chạy
            xmlhttp.send();
//        ajax jQuery

        console.log('tai sao m ko chay');
//        $.ajax({
//            type : "post",
//            url : "result.php",
//            dataType:"html",
//            data : {
//
//            },
////            success : function (result){
////                $('#result').html(result);
////                console.log('tai sao chay');
////            }
//            success: function(data) {
//                if(data.complate == '1')
//                {
//                    alert('Có dữ liệu gửi sang');
//                }else{
//                    alert('Không có dữ liệu gửi sang');
//                }
//            },
//            error: function() {
//                alert('Có lỗi trong quá trình xử lý');
//            }
//        });
//            $.ajax({
//                url: 'result.php',
//                type: 'post',
//                success: function(data) {
//                    if(data.complate == '1')
//                    {
//                        alert('Có dữ liệu gửi sang');
//                    }else{
//                        alert('Không có dữ liệu gửi sang');
//                    }
//                },
//                error: function() {
//                    alert('Có lỗi trong quá trình xử lý');
//                }
//            });
        }
    </script>
</head>
<body>
<div id="result">
    Nội dung ajax sẽ được load ở đây
</div>
<input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
</body>
</html>