<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog_category;
use App\blog;
use App\college;
use App\Gallery;
use App\GalleryCategory;
use App\Member;
use App\MemberCategory;
use App\messages;
use App\Notice;
use App\page_category;
use App\page;
use App\seo;
use App\slider;
use App\QuickLink;
use App\Download;
use App\Career;
use App\Calendar;
use App\Video;
use App\AdminProfile;
use App\Car;


class FrontendController extends Controller
{
    public function index(){
           $slider = slider::all();
           $college = college::first();
           $member_categories = MemberCategory::all();
           $blogs = blog::orderBy('created_at','desc')->take(4)->get();
           foreach($blogs as $blog){
               $blog->images = unserialize($blog->image);
           }
           
           $aboutus = page::where('slug','about-us')->first();
           $aboutus->images = unserialize($aboutus->image);
           $bbs = page::where('slug', 'bbs')->first();
           $bbs->images = unserialize($bbs->image);
           $bed = page::where('slug', 'b-ed')->first();
           $bed->images = unserialize($bed->image);
           $mbs = page::where('slug', 'mbs')->first();
           $mbs->images = unserialize($mbs->image);

           $notice = Notice::first();
           $quicklinks = QuickLink::all();

          
           return view('frontend.index', compact('slider','college','member_categories','blogs','aboutus','bbs','bed','mbs','notice','quicklinks','adminprofile'));

    }

    public function about(){
        $college = college::first();
        $member_categories = MemberCategory::all();
        $aboutus = page::where('slug','about-us')->first();
        $our_objectives = page::where('slug', 'our-objectives')->first();
        $our_mission = page::where('slug','our-mission')->first();
        $aboutus->images = unserialize($aboutus->image);
    
        return view('frontend.about', compact('college','member_categories','aboutus','our_objectives','our_mission'));
    }

    public function member(){
        $aboutus = page::where('slug','about-us')->first();
        $college = college::first();
        $member_categories = MemberCategory::all();
        foreach($member_categories as $category){
            foreach($category->members as $member){
                $member->images = unserialize($member->image);
            }
        }
        return view('frontend.members',compact('member_categories','college','aboutus'));
        
    }

    public function blog(){
        $aboutus = page::where('slug','about-us')->first();
        $college = college::first();
        $member_categories = MemberCategory::all();
        $blog_categories = blog_category::all();
        $blogs = blog::orderBy('created_at','desc')->get();
        foreach($blogs as $blog){
            $blog->images = unserialize($blog->image);
        }
        return view('frontend.blog', compact('blog_categories','blogs','college','member_categories','aboutus'));
    }
     
    public function bbs(){
        $aboutus = page::where('slug','about-us')->first();
        $college = college::first();
        $member_categories = MemberCategory::all();
        $bbs = page::where('slug','bbs')->first();
        $bbs->images = unserialize($bbs->image);
        return view('frontend.bbs', compact('bbs','college','member_categories','aboutus'));
    }

    public function bed(){
        $aboutus = page::where('slug','about-us')->first();
        $college = college::first();
        $member_categories = MemberCategory::all();
        $bed = page::where('slug','b-ed')->first();
        $bed->images = unserialize($bed->image);
        return view('frontend.bed', compact('bed','college','member_categories','aboutus'));
    }

    public function mbs(){
        $aboutus = page::where('slug','about-us')->first();
        $college = college::first();
        $member_categories = MemberCategory::all();
        $mbs = page::where('slug','mbs')->first();
        $mbs->images = unserialize($mbs->image);
        return view('frontend.mbs', compact('mbs','college','member_categories','aboutus'));
    }

    public function contactus(){
        $aboutus = page::where('slug','about-us')->first();
        $college = college::first();
        $member_categories = MemberCategory::all();
        return view('frontend.contactus',compact('college','member_categories','aboutus'));
    }

    public function gallery(){
        $aboutus = page::where('slug','about-us')->first();
        $gallery = Gallery::paginate(10);
        $college = college::first();
        $member_categories = MemberCategory::all();
        $gallery_categories = GalleryCategory::all();
        foreach($gallery_categories as $category){
            $category->thumbnail = $category->gallery->sortByDesc('updated_at')->first()->image;
        }
      
      
        return view('frontend.gallery',compact('gallery','college','member_categories','aboutus','gallery_categories'));
    }

    public function blogview($id){
        $aboutus = page::where('slug','about-us')->first();
        $blog = blog::find($id);
        $college = college::first();
        $member_categories = MemberCategory::all();
        $blog->images = unserialize($blog->image);

        return view('frontend.blogview',compact('college','member_categories','blog','aboutus'));
    }

    public function memberview($id){
        $aboutus = page::where('slug','about-us')->first();
        $college = college::first();
        $category = MemberCategory::find($id);
        $member_categories = MemberCategory::all();
        foreach($category->members as $member){
            $member->images = unserialize($member->image);
        }
        return view('frontend.members',compact('aboutus','college','category','member_categories'));
    }

    public function galleryshow($id){
        $college = college::first();
        $member_categories = MemberCategory::all();
        $aboutus = page::where('slug','about-us')->first();
        $gallery_category= GalleryCategory::find($id);
        $gallery = Gallery::where('gallery_category_id','=',$id)->paginate(3,['*'],'gallery');
        $videos = Video::where('gallery_category_id','=',$id)->paginate(2,['*'],'videos');
       // $gallery2 = GalleryCategory::find($id)->gallery->paginate(10);
        
        return view('frontend.galleryshow',compact('college','member_categories','aboutus','gallery_category','gallery','videos'));
    }

    public function downloads(){
        $college = college::first();
        $member_categories = MemberCategory::all();
        $aboutus = page::where('slug','about-us')->first();
        $downloads= Download::orderBy('created_at','desc')->paginate(8);
        return view('frontend.downloads',compact('college','member_categories','aboutus','downloads'));
    }

    public function career(){
        $college = college::first();
        $member_categories = MemberCategory::all();
        $aboutus = page::where('slug','about-us')->first();
        $careers = Career::orderBy('created_at','desc')->get();
        
        return view('frontend.career',compact('careers','college','member_categories','aboutus'));
    }

    public function careerview($id){
        $college = college::first();
        $member_categories = MemberCategory::all();
        $aboutus = page::where('slug','about-us')->first();
        $career = Career::find($id);
        $career->images=unserialize($career->image);
        return view('frontend.careerview',compact('college', 'member_categories','aboutus','career'));
    }

    public function calendar(){
        $college = college::first();
        $member_categories = MemberCategory::all();
        $aboutus = page::where('slug','about-us')->first();
        $calendar= Calendar::all();
        $data =file_get_contents("http://rajanmaharjan.com.np/getdate/index.php?dateType=np&dformat=mon");
        $dom = new \DOMDocument();
        $dom->loadhtml($data);
        $month= $dom->getElementById('nepali-date');
        $d=trim($month->nodeValue);
        $m=1;
        switch($d){
            case 'बैशाख':
            $m=1;
            break;
            case 'जेठ':
            $m=2;
            break;
            case 'आषाढ':
            $m=3;
            break;
            case 'साउन':
            $m=4;
            break;
            case 'भाद्र':
            $m=5;
            break;
            case 'आश्विन':
            $m=6;
            break;
            case 'कार्तिक':
            $m=7;
            break;
            case 'मंसिर':
            $m=8;
            break;
            case 'पौष':
            $m=9;
            break;
            case 'माघ':
            $m=10;
            break;
            case 'फाल्गुण':
            $m=11;
            break;
            case 'चैत्र':
            $m=12;
            break;
        }
     
        return view('frontend.calendar',compact('college','member_categories','aboutus','calendar','m'));
    }
    public function allCars(){
        
            
        $cars1 = Car::orderBy('created_at','desc')->get();
        return view('frontend.cars')->with('cars1',$cars1);
    }
}
