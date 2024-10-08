<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLean | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/style.css" type="text/css">
</head>

<body>
    <script>
        const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const hoTen = document.querySelector('#ho-ten').value;
  const email = document.querySelector('#email').value;
  const soDienThoai = document.querySelector('#so-dien-thoai').value;
  const noiDung = document.querySelector('#noi-dung').value;

  // Gửi dữ liệu đến server để xử lý

  // Hiển thị thông báo gửi câu hỏi thành công hoặc thất bại

  // Chuyển hướng đến trang khác sau khi gửi câu hỏi
});

    </script>
    <style>
/* Reset CSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
}

.container {
  max-width: 960px;
  margin: 0 auto;
}

h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input,
select,
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

textarea {
  height: 100px;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

    </style>

    <!-- Start coding here -->
    <?php get_header() ?>

    <div id="preloder">
        <div class="loader"></div>
    </div>



<!-- code trang đặt câu hỏi start -->
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gửi câu hỏi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h3>Gửi câu hỏi</h3>
    <form action="/gui-cau-hoi" method="post">
      <div class="form-group">
        <label for="ho-ten">Họ tên:</label>
        <input type="text" id="ho-ten" name="ho-ten" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="so-dien-thoai">Số điện thoại:</label>
        <input type="tel" id="so-dien-thoai" name="so-dien-thoai" required>
      </div>
      <div class="form-group">
        <label for="noi-dung">Nội dung câu hỏi:</label>
        <textarea id="noi-dung" name="noi-dung"></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Gửi câu hỏi</button>
      </div>
    </form>
  </div>
</body>
</html>

<!-- code trang đặt câu hỏi end -->
    <!-- phần logo của các đối tác -->
    <!-- <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <p>ISHOP</p>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    <?php get_footer() ?>

    <!-- Js Plugins -->
    <script src="../../public/js/jquery-3.3.1.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
    <script src="../../public/js/jquery-ui.min.js"></script>
    <script src="../../public/js/jquery.countdown.min.js"></script>
    <script src="../../public/js/jquery.nice-select.min.js"></script>
    <script src="../../public/js/jquery.zoom.min.js"></script>
    <script src="../../public/js/jquery.dd.min.js"></script>
    <script src="../../public/js/jquery.slicknav.js"></script>
    <script src="../../public/js/owl.carousel.min.js"></script>
    <script src="../../public/js/main.js"></script>
</body>

</html>