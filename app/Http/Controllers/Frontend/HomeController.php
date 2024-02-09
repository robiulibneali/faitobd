<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdditionalFeatures\Faq;
use App\Models\Backend\AdditionalFeatures\HomePageSlider;
use App\Models\Backend\AdditionalFeatures\SiteSetting;
use App\Models\Backend\AdditionalFeatures\Testimonial;
use App\Models\Backend\BikeManagement\BikeMotorType;
use App\Models\Backend\BlogManagement\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $blogCategories = [], $blogs = [], $blog;
    public function home()
    {
        return view('frontend.home.index', [
            'blogs'             => Blog::where('status', 1)->take(4)->select('id', 'title', 'blog_category_id', 'image', 'created_at')->get(),
            'homePageSliders'   => HomePageSlider::where('status', 1)->take(10)->select('id', 'slider_file_type', 'file')->get(),
            'siteSettings'      => SiteSetting::all(),
            'bikeMotorTypes'    => BikeMotorType::where('status', 1)->select('id', 'name', 'image')->latest()->get(),
        ]);
    }

    public function contact()
    {
        return view('frontend.contact.index', [
            'motorType' => BikeMotorType::where('status', 1)->select('id', 'name')->get(),
        ]);
    }

    public function faq()
    {
        return view('frontend.faq.index', [
            'faqs' => Faq::where('status', 1)->select('id', 'question', 'answer')->latest()->get(),
        ]);
    }

    public function faitology()
    {
        return view('frontend.story.faitology.index');
    }

    public function brembology()
    {
        return view('frontend.story.brembology.index');
    }

    public function faitotech()
    {
        return view('frontend.story.faitotech.index');
    }

    public function testimonial()
    {
        return view('frontend.story.testimonial.index', [
            'testimonials' => Testimonial::where('status', 1)->select('id', 'user_name', 'user_image', 'user_designation', 'message', 'parent_model_id')->latest()->get(),
        ]);
    }

    public function blog()
    {
        return view('frontend.story.news.index',[
            'blogs' => Blog::where('status', 1)->select('id', 'blog_category_id', 'title', 'image', 'created_at')->get(),
        ]);
    }

    public function blogDetails($blogId)
    {
        $this->blog     = Blog::find($blogId);
        $this->blogs    = Blog::where('blog_category_id', $this->blog->blog_category_id)->where('id', '!=', $blogId)->where('status', 1)->take(3)->select('id', 'blog_category_id', 'title', 'content', 'image', 'created_at')->latest()->get();
        return view('frontend.story.news.blog-details', [
            'blog'          => $this->blog,
            'relatedBlogs'  => $this->blogs,
        ]);
    }



}
