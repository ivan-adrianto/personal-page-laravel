<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['title, lead, content, email, links'];
}



// <?php

// namespace App\Models;

// class About
// {
//     private static $about = [
//         "title" => "Hi, Im Ivan Adrianto",
//         "lead" => "Full Stack Developer",
//         "content" => "This is Ivan, a passionate software developer who creates magic with Javascript. Currently working as front end developer. He also developed some backend and mobile apps. For him, coding is like love. Sometimes it makes you frustrated, but you just cannot leave it.",
//         "links" => [
//             "linkedin" => "https://www.linkedin.com/in/ivan-adrianto-a02a251b8/",
//             "github" => "https://github.com/ivan-adrianto",
//             "medium" => "https://ivanadrianto.medium.com/",
//             "instagram" => "https://www.instagram.com/ivanadrianto/ "
//         ]
//     ];

//     public static function get_data() {
//         return self::$about;
//     }
    
// }
