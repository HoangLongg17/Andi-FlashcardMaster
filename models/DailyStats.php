<?php
namespace app\models;

use yii\db\ActiveRecord;

class DailyStats extends ActiveRecord {
    public static function tableName() {
        return 'dailystats';
    }
}
?>
