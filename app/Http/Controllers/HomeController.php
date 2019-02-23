<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Career;
use App\Branch;
use App\Member;
use App\page_category;
use App\page;
use App\blog;
use function Opis\Closure\unserialize;
use App\OurService;
use Illuminate\Support\Facades\DB;
use App\slider;
use App\Pricing;
use App\AdminProfile;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getCategoryId()
    {
        $category_id = page_category::whereName('Support')->pluck('id')->first();
        return $category_id;
    }

    public function index()
    {
        $testimonials = Testimonial::all();
        $category_id = $this->getCategoryId();
        $slider_images = slider::wherePublish(1)->get();
        $pricings = Pricing::paginate(3);
        
        $adminprofile = AdminProfile::first();
        return view('frontend.index')->with(compact('adminprofile','category_id', 'slider_images', 'testimonials', 'pricings'));
        // return view('frontend.index')->with(compact('category_id','testimonials'));
    }

    public static function getSupportTitles($category_id)
    {
        $support_titles = page::wherePageCategoryId($category_id)->get()->toArray();
        return $support_titles;
    }

    public function about()
    {
        $category_id = $this->getCategoryId();
        $members = Member::all();
        foreach ($members as $member) {
            $member->images = unserialize($member->image);
        }
        $about_us_cat_id = page_category::whereName('About Us')->pluck('id')->first();
        $abouts = page::wherePageCategoryId($about_us_cat_id)->get();
        foreach ($abouts as $about) {
            $about->images = unserialize($about->image);
        }
        $our_services = OurService::all();
        return view('frontend.aboutus')->with(compact('members', 'category_id', 'abouts', 'our_services'));
    }
    public function contact()
    {
        $category_id = $this->getCategoryId();

        $branches = Branch::all();
        $head_branch = Branch::whereBranchType('head')->get()->first();
        return view('frontend.contact')->with(compact('branches', 'head_branch', 'category_id'));
    }
    public function ourteam()
    {
        $category_id = $this->getCategoryId();

        return view('frontend.ourteam')->with(compact('category_id'));
    }

    public function testimonials()
    {
        $category_id = $this->getCategoryId();
        $testimonials = Testimonial::all();
        return view('frontend.testimonials')->with(compact('testimonials', 'category_id'));
    }

    public function careers()
    {
        $category_id = $this->getCategoryId();
        $careers = Career::all();
        return view('frontend.career')->with(compact('careers', 'category_id'));
    }

    public function careershow($slug)
    {
        $category_id = $this->getCategoryId();
        $vacancy = Career::whereSlug($slug)->get()->first();
        $images = unserialize($vacancy->image);

        return view('frontend.careershow')->with(compact('career', 'category_id', 'vacancy', 'images'));
    }
    
    public function blog()
    {
        $category_id = $this->getCategoryId();
        $blogs = blog::wherePublish(1)->get();
        foreach ($blogs as $blog) {
            $blog->images = unserialize($blog->image);
        }
        return view('frontend.blog')->with(compact('category_id', 'blogs'));
    }
    
    public function blogview($slug)
    {
        $category_id = $this->getCategoryId();
        $blogDetails = blog::whereSlug($slug)->get()->first();
        $images = unserialize($blogDetails->image);
        return view('frontend.blogview')->with(compact('category_id', 'blogDetails', 'images'));
    }


        
    public function aboutus()
    {
        $category_id = $this->getCategoryId();
        return view('frontend.readmore')->with(compact('category_id'));
    }
    
    public function demo()
    {
        $category_id = $this->getCategoryId();
        return view('pages.demo')->with(compact('category_id'));
        ;
    }
        
    public function support($slug)
    {
        $category_id = $this->getCategoryId();
        $support_details = page::whereSlug($slug)->get()->first();
        // dd($support_details);
        return view('frontend.support-details')->with(compact('category_id', 'support_details'));
    }

    public static function getHeadBranch()
    {
        return Branch::whereBranchType('head')->get()->first();
    }

    public static function getSocialLinks()
    {
        return DB::table('social_links')->whereId(1)->get()->first();
    }

    public static function getSinglePricing()
    {
        $pricing = Pricing::whereDisplay(1)->get()->first();
        return $pricing;
    }
    public static function getGeneralSetting()
    { 
        $adminprofile = AdminProfile::first();
        return $adminprofile;
    }
}
