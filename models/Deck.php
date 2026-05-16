<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Đây là lớp Model cho bảng "decks".
 *
 * @property int $deckid
 * @property int $userid
 * @property string $name
 * @property string|null $description
 * @property string|null $createdat
 *
 * @property Card[] $cards
 */
class Deck extends ActiveRecord
{
    
    public static function tableName()
    {
        return 'decks';
    }

    
    public function rules()
    {
        return [
            [['userid', 'name'], 'required'],
            [['userid'], 'integer'],
            [['description'], 'string'], // ĐÃ XÓA cover_image
            [['createdat'], 'safe'],     // ĐÃ ĐỔI THÀNH createdat (không có gạch dưới)
            [['name'], 'string', 'max' => 255],
            
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['userid' => 'userid']],
            
            [
                ['name'], 
                'unique', 
                'targetAttribute' => ['name', 'userid'], 
                'message' => 'Bạn đã có bộ thẻ với tên này rồi. Vui lòng chọn tên khác!'
            ],
        ];
    }


    public function getCards()
    {
        return $this->hasMany(Card::class, ['deckid' => 'deckid']);
    }
}