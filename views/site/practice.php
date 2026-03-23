<?php
/** @var yii\web\View $this */
/** @var app\models\Deck[] $decks */

$this->title = "Luyện tập";
$this->registerCssFile('@web/css/dashboard.css', ['depends' => [\app\assets\AppAsset::class]]);
$this->registerCssFile('@web/css/practice.css', ['depends' => [\app\assets\AppAsset::class]]);
?>

<div class="practice">
    <h2>Chọn bộ thẻ để luyện tập</h2>

    <div class="deck-list">
        <?php foreach ($decks as $deck): ?>
            <?php
                $n = 0; $l = 0; $r = 0;
                foreach ($deck->cards as $c) {
                    $s = $c->progress ? $c->progress->status : 0;
                    if ($s == 0) $n++;
                    elseif ($s == 1) $l++;
                    else $r++;
                }
            ?>
            <div class="deck-row" onclick="window.location.href='<?= \yii\helpers\Url::to(['site/study', 'deckid' => $deck->deckid]) ?>'">
                <div class="deck-info">
                    <h3><?= \yii\helpers\Html::encode($deck->name) ?></h3>
                    <p><?= \yii\helpers\Html::encode($deck->description) ?></p>
                </div>
                <div class="deck-stats">
                    <span class="stat new">Từ mới: <?= $n ?></span>
                    <span class="stat learning">Đang học: <?= $l ?></span>
                    <span class="stat review">Cần ôn: <?= $r ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
