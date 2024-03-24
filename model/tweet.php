<?php

class Tweet{
    private $id;
    private $content;
    private $userId;
    private $likes;

    public function __construct($content, $userId){
        $this->id = uniqid();
        $this->content = $content;
        $this->userId = $userId;
        $this->likes = [];
    }

    public function addLike($userId){
        $this->likes[] = $userId;
    }

    public function getUserId(){
        return User::findUserById($this->userId);
    }


    public function getTweetContent(){
        return $this->content;
    }
    public function getLikesComments(){

        $totalLikes = count($this->likes);
        if ($totalLikes === 0){
            return "";

        } else if ($totalLikes === 1){
            $firstLikerAlias = User::findUserById($this->likes[0])->getAlias();
            return "@{$firstLikerAlias} liked this";

        } else {
            $firstLikerAlias = User::findUserById($this->likes[0])->getAlias();
            return "@{$firstLikerAlias} liked this along with ".$totalLikes - 1 . " others";
        }

    }


}