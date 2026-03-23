<?php
use yii\helpers\Url;
?>
<aside class="sidebar">
    <ul class="menu">
        <li><a href="<?= Url::to(['site/dashboard']) ?>" class="<?= Yii::$app->controller->action->id == 'dashboard' ? 'active' : '' ?>"><img src="<?= Yii::getAlias('@web') ?>/icons/home.png" alt=""> Trang chủ</a></li>
        <li><a href="<?= Url::to(['site/vocabset']) ?>" class="<?= Yii::$app->controller->action->id == 'vocabset' ? 'active' : '' ?>"><img src="<?= Yii::getAlias('@web') ?>/icons/vocabset.png" alt=""> Bộ thẻ</a></li>            
        <li><a href="<?= Url::to(['site/vocabulary']) ?>" class="<?= Yii::$app->controller->action->id == 'vocabulary' ? 'active' : '' ?>"><img src="<?= Yii::getAlias('@web') ?>/icons/vocabulary.png" alt=""> Từ vựng</a></li>            
        <li><a href="<?= Url::to(['site/practice', 'deckid' => 1]) ?>" class="<?= Yii::$app->controller->action->id == 'practice' ? 'active' : '' ?>"><img src="<?= Yii::getAlias('@web') ?>/icons/practice.png" alt=""> Luyện tập</a></li>
    </ul>

    <button class="toggle-btn">&laquo;</button>

    <div class="profile">
        <div class="avatar">
            <img src="<?= Yii::getAlias('@web') ?>/images/andi-avatar.png" alt="User Avatar">
        </div>
        <p class="username"><?= Yii::$app->user->identity->displayname ?? 'Khách' ?></p>
        <div class="profile-actions">
            <button class="btn-profile">Xem hồ sơ</button>
            <label class="theme-switch">
                <input type="checkbox" id="darkModeToggle">
                <span class="slider"></span>
                <span class="label-text">Tối</span>
            </label>
        </div>
    </div>
</aside>
