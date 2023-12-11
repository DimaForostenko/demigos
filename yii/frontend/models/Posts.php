<?php
 namespace frontend\models;

 use Yii;
 use yii\base\Model;
use yii\db\ActiveRecord;

 class Posts extends ActiveRecord
 {
    private $title;
    private $description;
    private $category;

    public function rules()
    {
        return[
            [['title','description','category'],'require']
        ];
    }
 }
 ?>