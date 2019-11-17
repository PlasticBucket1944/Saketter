<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <style>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <!-- サブコンポーネント -->
  <div class="container">
    <a class="navbar-brand" href="index.html">Mr. M COFFEE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- ナビゲーション -->
    <div class="collapse navbar-collapse" id="navbar-content">
      <!-- ナビゲーションメニュー -->
      <!-- 左側メニュー：トップページの各コンテンツへのリンク -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Top<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#coupon">Coupon</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Information
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#shop">Shop</a>
            <a class="dropdown-item" href="#access">Access</a>
          </div>
        </li>
      </ul>

      <!-- 右側メニュー：Contactページへのリンク -->
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn btn-info" href="contact.html">Contact</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
</body>
</html>
