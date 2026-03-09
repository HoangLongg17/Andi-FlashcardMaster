<?php
use app\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<?php $this->beginBody() ?>

<!-- Header riêng cho landing -->
<header>
    <div class="logo">
        <img src="/images/andilogo.png" alt="Andi Logo">
        <span>Andi</span>
    </div>
    <nav>
        <a href="/index.php?r=site/dashboard" class="login">Đăng nhập</a>
        <a href="#" class="signup">Đăng ký</a>
    </nav>
</header>

<!-- Nội dung view -->
<?= $content ?>

<!-- Footer riêng -->
<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <h3>Andi</h3>
            <p>Nền tảng học từ vựng miễn phí hàng đầu tại Việt Nam</p>
        </div>

        <div class="footer-links">
            <h4>Tính năng</h4>
            <ul>
                <li>Flashcard</li>
                <li>SM-2</li>
                <li>FSRS</li>
            </ul>
        </div>

        <div class="footer-links">
            <h4>Liên kết</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Đăng nhập</a></li>
                <li><a href="#">Đăng ký</a></li>
            </ul>
        </div>
    </div>
</footer>

<div class="footer-bottom">
    <p>© Andi — Made in Vietnam</p>
    <div class="footer-links-right">
        <a href="#">Điều khoản</a>
        <a href="#">Bảo mật</a>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
