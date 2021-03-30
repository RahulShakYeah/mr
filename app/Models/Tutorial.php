<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;
    protected  $table = 'tutorial';
    protected $fillable = ['title','video_link','video_id'];

    public function getYoutubeVideoId($link){
        preg_match("#([\/|\?|&]vi?[\/|=]|youtu\.be\/|embed\/)([a-zA-Z0-9_-]+)#",$link,$match);
        if(isset($match)){
            return $match[2];
        }else{
            return false;
        }
    }


}
