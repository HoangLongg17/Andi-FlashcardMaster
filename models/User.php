<?php
namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName() {
        return 'users'; // ánh xạ tới bảng users trong DB
    }

    // Các hàm bắt buộc của IdentityInterface
    public static function findIdentity($id) {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        return static::findOne(['accessToken' => $token]);
    }

    public static function findByUsername($username) {
        return static::findOne(['email' => $username]); 
    }

    public function getId() {
        return $this->userid; // cột userid trong DB
    }

    public function getAuthKey() {
        return $this->authKey;
    }

    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password) {
        return \Yii::$app->security->validatePassword($password, $this->passwordhash);
    }

    // 🔥 Thêm hàm tính streak
    public function getStreak() {
        $today = new \DateTime();
        $stats = $this->getDailyStats()
            ->orderBy(['studydate' => SORT_DESC])
            ->all();

        $streak = 0;
        $date = clone $today;

        foreach ($stats as $stat) {
            if ($stat->studydate == $date->format('Y-m-d')) {
                $streak++;
                $date->modify('-1 day');
            } else {
                break;
            }
        }
        return $streak;
    }

    // Quan hệ với bảng DailyStats
    public function getDailyStats() {
        return $this->hasMany(DailyStats::class, ['userid' => 'userid']);
    }
}
?>