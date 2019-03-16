@extends('layouts.master')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.sidebar')
@include('layouts.meta')
@section('main-content')

  <div class="content-wrapper">

    <section class="content">


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                              <a href="{{route('wallpaper.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp; Add new wallpaper</a>    
                              <span style="padding-left:30%;font-size:big ">Wallpapers</span>
                              <a href="{{route('wallpaper.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
  
                </h3>

            </div>
            <div class="card-body">

            <div class="row">
            @foreach($wallpapers as $wallpaper)
                <div class="card column" style="width:200px">
                        <div style="height:150px;padding:0;">
                       <img class="card-img-top" src="{{asset('storage/wallpaper/'.$wallpaper->image)}}" alt="Card image" style="width:100%">
                       </div>
                    <div class="card-body" style="padding:2px;">
                        <div class="row">
                        <h4 class="card-title column">{{$wallpaper->name}}</h4> <a href="{{route('wallpaper.edit',$wallpaper->id)}}" class="column" title="edit"><i class="fas fa-edit"></i></a>
                        
                         <form id="delete-item{{$wallpaper->id}}"  action="{{route('wallpaper.destroy',$wallpaper->id)}}" style="display:none"  method="post">
                            {{csrf_field()}}  
                            {{method_field('DELETE')}}

                        </form>
                         <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                               
                                document.getElementById('delete-item{{$wallpaper->id}}').submit();
                           }
                                else{
                                event.preventDefault();
                                }

                                " class="column" title="delete">
                                <i class="fas fa-trash"></i>

                            </a>

                            <form id="setwallpaper-item{{$wallpaper->id}}"  action="{{route('adminprofile.update',['id'=>1,'topwallpaper'=>$wallpaper->image]   )}}" style="display:none"  method="POST">
                            {{csrf_field()}}  
                            {{method_field('PATCH')}}

                        </form>
                         <a href="" onclick="
                                if (confirm('Are you sure, You want to set top wallpaper?'))
                                {
                                event.preventDefault();
                               
                                document.getElementById('setwallpaper-item{{$wallpaper->id}}').submit();
                              
                              }
                                else{
                                event.preventDefault();
                                }

                                " class="column" title="set top wallpaper">
                                <i class="fas fa-plus"></i>

                            </a>
                            


                            
                            <form id="setbottomwallpaper-item{{$wallpaper->id}}"  action="{{route('adminprofile.update',['id'=>1,'bottomwallpaper'=>$wallpaper->image]   )}}" style="display:none"  method="POST">
                            {{csrf_field()}}  
                            {{method_field('PATCH')}}

                        </form>
                         <a href="" onclick="
                                if (confirm('Are you sure, You want to set bottom wallpaper?'))
                                {
                                event.preventDefault();
                               
                                document.getElementById('setbottomwallpaper-item{{$wallpaper->id}}').submit();
                              
                              }
                                else{
                                event.preventDefault();
                                }

                                " class="column" title="set bottom wallpaper">
                                <i class="fas fa-plus"></i>

                            </a>
                            


                           </div>                   
                     </div>
                  </div>
            @endforeach
            </div>

          </div>
        </div>
    </section>
  </div>

@endsection

