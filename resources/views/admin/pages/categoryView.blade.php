@extends('admin-header.master')
@include('admin-header.meta')
@include('admin-header.navbar')

@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
      <h1>
       {{$category}} Page
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pages</li>
      </ol>
    </section>

    <section class="content">
      <a href="{{ route('pages.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span></a>
      <div style="margin:50px;">

    
       <div class="row">
       <div class="col-md-9">
      <table class="table table-striped">
  <thead>
    <tr class="table-heading">
     
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Slug</th>
      <th scope="col">Summary</th>
       <th scope="col" width="50px">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pages as $page)
    <tr>
      <td width="15%">{{$page->title}}</td>
      <td width="20%">{{$page->page_category->title}}</td>
      <td width="15%">{{$page->slug}}</td>
      <td width="40%">{!!substr($page->summary, 0,100)!!}</td>
      <td width="10%">
        <div class="pull-left">
        <a href="{{route('pages.edit',$page->id)}}" class="btn btn-primary"><i class="fa fa-pencil "></i></a>
        </div>
      
        <div class="float-left" style="margin-left:40px;">
       <form id="delete-item{{$page->id}}"  action="{{route('pages.destroy',$page->id)}}" style="Display:none"  method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                        </form>
                        <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$page->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }

                                " class="btn btn-danger">
                                <i class="fa fa-trash "></i>

                            </a>
        </div>
      </td>
     </tr>
  @endforeach
  </tbody>
</table>
</div>

<div class="col-md-3">

<ul class="list-group">
    <li class="list-group-item disabled list-bar" ><strong>Categories</strong></li>
  @foreach($categories as $page_category)
  <li class="list-group-item">
    <a href="{{route('categories',$page_category->id)}}">{{$page_category->title}}</a>
    <span class="badge pull-right">{{$page_category->page->count()}}</span>
  </li>
 @endforeach
</ul>
</div>
</div>
    </section>
  </div>


  <script type="text/javascript">
    $(document).ready(function(){
      var title= 'option1';
      $("#category option[value="+ title + "]").hide();

    })
  </script>


@endsection