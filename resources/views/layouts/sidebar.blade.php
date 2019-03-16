@section("side-bar-content")

@php $adminprofile = App\Http\Controllers\HomeController::getGeneralSetting() @endphp

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('dashboard')}}" class="brand-link text-center">
            {{-- <img src="{{asset('images/cms/')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8"> --}}
            <span class="brand-text font-weight-light"><b>CAR CMS</b    ></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item"><a class="nav-link active" href="{{ route('dashboard') }}"><i class="fa fa fa-bars nav-icon"></i> <p> Dashboard</p></a></li>
{{--              
                    <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-user"></i><p>Members<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('member.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Members</p></a></li>
                            <li class="nav-item"><a href="{{route('membercategory.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Member Category</p></a></li>
                        </ul>
                    </li> --}}




                    {{-- <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-code-branch"></i></i><p>Branch<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('branch.create')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Add Brnach</p></a></li>
                            <li class="nav-item"><a href="{{route('branch.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Branches</p></a></li>
                        </ul>
                    </li>
                 --}}
                    <li class="nav-item"><a href="{{empty($adminprofile->id) ? route('adminprofile.create') :route('adminprofile.edit',$adminprofile->id) }}" class="nav-link"><i class="nav-icon fas fa-user"></i></i><p>Profile</p></a>
                   
                     {{-- <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-comment "></i></i><p>Testimonial<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('testimonial.create')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Add Testimonail</p></a></li>
                            <li class="nav-item"><a href="{{route('testimonial.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Testimonials</p></a></li>
                        </ul>
                    </li>     --}}
                     {{-- <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-rupee "></i></i><p>Pricing<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('pricing.create')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Add Pricing</p></a></li>
                            <li class="nav-item"><a href="{{route('pricing.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Pricing</p></a></li>
                        </ul>
                    </li>    --}}
                     {{-- <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-user"></i></i><p>Career<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('career.create')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Add Vacancy</p></a></li>
                            <li class="nav-item"><a href="{{route('career.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Vacancies</p></a></li>
                        </ul>
                    </li>  --}}
                     <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-book"></i></i><p>Blogs<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('blog.create')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Add blog</p></a></li>
                            <li class="nav-item"><a href="{{route('blog.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Blogs</p></a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-cogs"></i></i><p>Our Services<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('ourservice.create')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Add New </p></a></li>
                            <li class="nav-item"><a href="{{route('ourservice.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Services</p></a></li>
                        </ul>
                    </li>
                                      
                  <li class="nav-item"><a href="{{route('car.index')}}" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Cars Collection {{-- <span class="right badge badge-danger">New</span>--}}</p></a></li>
                {{-- <li class="nav-item"><a href="{{route('customerquery.index')}}" class="nav-link"><i class="nav-icon fa fa-inbox"></i><p>Queries / Feedbacks </p></a></li>
                    <li class="nav-item"><a href="{{route('social_links.index')}}" class="nav-link"><i class="nav-icon fa fa-link "></i><p>Social Links</p></a></li>  --}}
               <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-info-circle"></i></i><p>More<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="{{route('page.create')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>Add New Description</p></a></li>
                            <li class="nav-item"><a href="{{route('page.index')}}" class="nav-link"><i class="fa fa-circle-o nav-icon"></i><p>All Descriptions</p></a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item"><a href="{{route('appliedvacancy.index')}}" class="nav-link"><i class="nav-icon fas fa-user-tag "></i><p>Applied For Vacancies</p></p></a></li>
 --}}

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

@endsection