<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'description', 'author', 'image'];
    protected static $blog;
    protected static $blogImage;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function saveImage($request)
    {
        self::$blogImage = $request->file('image');
        if(self::$blogImage)
        {
            self::$imageName = 'image'.time().'.'.
            self::$blogImage->getClientOriginalExtension();
            self::$imageDirectory = 'assets/img/blog/';
            self::$blogImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
            return self::$imageUrl;
        } else
        {
            return '';
        }
    }

    public static function blogCreated($request)
    {
        self::$blog                 = new Blog;
        self::$blog->category_id    = $request->category_id;
        self::$blog->title          = $request->title;
        self::$blog->description    = $request->description;
        self::$blog->author         = $request->author;
        self::$blog->image          = self::saveImage($request);
        self::$blog->save();
    }

    public static function blogupdated($request)
    {
        self::$blog = Blog::find($request->blog_id);

        if ($request->file('image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::saveImage($request);
        } else{
            self::$imageUrl = self::$blog->image;
        }

        self::$blog->category_id    = $request->category_id;
        self::$blog->title          = $request->title;
        self::$blog->description    = $request->description;
        self::$blog->author         = $request->author;
        self::$blog->image          = self::$imageUrl;
        self::$blog->save();
    }
    public function category ()
    {
        return $this->belongsTo(Category::class);
    }
}
