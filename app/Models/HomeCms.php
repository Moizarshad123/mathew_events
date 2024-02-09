<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCms extends Model
{
    use HasFactory;
    protected $fillable = [
        "heading",
        "sub_heading",
        "banner_image",
        "section_one_heading",
        "section_one_content",
        "section_two_heading",
        "section_two_content",
        "section_two_image",
        "blog_one_heading",
        "blog_one_content",
        "blog_one_image",
        "blog_two_heading",
        "blog_two_content",
        "blog_two_image",
        "blog_three_heading",
        "blog_three_content",
        "blog_three_image",

    ];
}
