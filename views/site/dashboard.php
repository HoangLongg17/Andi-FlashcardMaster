<?php
$this->title = 'Trang chủ Andi';
?>

<div class="content-row">
    <div class="cover">
        <img src="<?= Yii::getAlias('@web') ?>/images/cover-default.jpg" alt="Ảnh bìa">
    </div>

    <div class="banner">
        <h3>🔥 CHUỖI NGÀY HỌC</h3>
        <p class="streak"><?= $streak ?> ngày</p>
        <div class="days">
            <span>T3</span>
            <span>T4</span>
            <span>T5</span>
            <span>T6</span>
            <span>T7</span>
            <span>CN</span>
            <span class="active">T2</span>
        </div>
    </div>
</div>

<section class="features">
    <h2>Tính năng</h2>
    <div class="feature-buttons">
        <button class="btn-feature">
            <img src="<?= Yii::getAlias('@web') ?>/icons/flashcard.png" alt="Flashcard Icon">
            Thêm bộ thẻ
        </button>
        <button class="btn-feature">
            <img src="<?= Yii::getAlias('@web') ?>/icons/practice.png" alt="Practice Icon">
            Luyện tập
        </button>
    </div>
</section>
