<footer>
  <div class="container">
    <div class="logo">
      <a href=""><img src="images/product-recently/logo.jpg" width="100px" height="80px" ></a>
      <div class="time" style="padding-left:50%;">
        <a href="https://time.is/Vietnam" id="time_is_link" rel="nofollow"></a>
        <span id="Vietnam_z418" style="font-size:40px"></span>
        <script src="//widget.time.is/t.js"></script>
        <script>
          time_is_widget.init({
            Vietnam_z418: {}
          });
        </script>
      </div>
    </div>
    <div class="link">
      <div class="col">
        <a href="">Về chúng tôi</a>
        <a href="">Xem facebook</a>
        <a href="https://www.facebook.com/profile.php?id=100010528535170">Blogs</a>
      </div>
      <div class="col">
        <a href=""></a>
        <a href=""></a>
      </div>
      <div class="col">
        <a href="">Trung tâm hỗ trợ</a>
        <a href="">Câu hỏi thường gặp</a>
      </div>
      <div class="icon">
        <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-instagram-square"></i></a>
        <a href=""><i class="fab fa-twitter-square"></i></a>
      </div>
    </div>
    <div class="bottom">
      <a href=""><img src="images/icon/logo-playstore.svg" alt=""></a>
      <a href=""><img src="images/icon/logo-appstore.svg" alt=""></a>
      

    </div>
  </div>
</footer>
<style>
  footer {
    background-color: #1E100B; /* Đổi sang màu Nâu đen sẫm */
    width: 100%;
    margin: 0px auto;
    margin-top: 1rem;
    border-top: 2px solid #4E342E; /* Thêm đường viền mỏng phía trên cho tách biệt */
  }

  footer .container {
    width: 90%;
    margin: 0px auto;
    display: flex;
    flex-flow: column;
  }

  footer .container .logo {
    padding: 20px 0;
    border-bottom: 1px solid #4E342E; /* Viền nâu nhạt */
    display: flex;
    flex-wrap: wrap-reverse;
  }
  footer .container .logo .time {
    color: #D4A373; /* Giờ giấc màu vàng nâu */
    font-family: "Bebas Neue", cursive;
  }

  footer .container .link {
    display: grid;
    grid-template-columns: auto auto auto auto;
    padding: 30px 0;
    border-bottom: 1px solid #4E342E;
  }

  footer .container .link .col a:hover {
    cursor: pointer;
    color: #A67B5B; /* Hover sang màu cà phê sữa thay vì xanh lá */
  }

  footer .container .link .col a {
    color: #F5F1ED; /* Chữ màu kem */
    font-weight: bold;
    text-decoration: none;
    padding: 10px 0;
    font-family: "Encode Sans SC", sans-serif;
    transition: color 0.3s ease; /* Thêm hiệu ứng chuyển màu mượt mà */
  }

  footer .container .link .icon a {
    padding: 10px 10px;
    color: #F5F1ED;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  
  footer .container .link .icon a:hover {
      color: #D4A373;
  }

  footer .container .link .icon a i {
    font-size: 40px;
  }

  footer .container .link .col {
    display: flex;
    flex-flow: column;
  }

  footer .container .link .icon {
    display: flex;
  }

  footer .container .bottom {
    padding: 20px 0;
  }
</style>