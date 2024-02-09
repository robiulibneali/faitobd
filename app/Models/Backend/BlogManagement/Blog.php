<?php

namespace App\Models\Backend\BlogManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'blog_category_id',
        'title',
        'image',
        'content',
        'status',
        'view_count',
    ];

    protected $searchableFields = ['*'];

    protected static $blog;

    public static function createOrUpdateBlog($request, $id = null)
    {
        if (isset($id))
        {
            self::$blog = Blog::find($id);
        } else {
            self::$blog = new Blog();
        }

        self::$blog->blog_category_id     = $request->blog_category_id;
        self::$blog->title                = $request->title;
        self::$blog->content              = $request->content;
        self::$blog->view_count           = $request->view_count;
        self::$blog->image                = fileUpload($request->file('image'), 'blog-management/blog', isset($id) ? static::find($id)->image : '');
        self::$blog->status               = $request->status == 'on' ? 1 : 0;
        self::$blog->save();
    }

    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
