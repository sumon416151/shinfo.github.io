@extends('admin.master')
@section('title')
||Manage Information
@endsection
@section('mainContent')
<div class="info">
    <div class="col-12">
        <h2 class="text-info">|| Information Details here</h2>
        
        <table class="table table-bordered table-hover">
            @foreach($allInfo as $info)
            <tr>
                <th>Name:</th>
                <td>{{$info->fname}} {{$info->lname}}</td>
               
            </tr>    
            <tr>
                <th>E-mail:</th>
                <td>{{$info->email}}</td>
            </tr>   
            <tr>
                <th>Village:</th>
                <td>{{$info->village}}</td>
            </tr> 
            <tr>
                <th>Post Code:</th>
                <td>{{$info->pcode}}</td>
            </tr>
              <tr>
                <th>District:</th>
                <td>{{$info->district}}</td>
            </tr>    
            <tr>
                <th>Date of birth:</th>
                <td>{{$info->birthday}}</td>
            </tr>   
            <tr>
                <th>Designation:</th>
                <td>{{$info->designation}}</td>
            </tr> 
            
             <tr>
                <th>Objective:</th>
                <td>{{$info->objective}}</td>
                
            </tr>
            <tr>
                <th>Image:</th>
                <td><img src="{{url($info->file)}}" width="80" height="80"></td>
            </tr>
            <tr>
                <th>Action</th>
                <td>
                    <a href="{{url('/edit-info/'.$info->id)}}" class="btn btn-success" style="border-radius:0px" title="Edit">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="#" class="btn btn-info" style="border-radius:0px" title="view">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <a href="{{url('/delete-info/'.$info->id)}}" class="btn btn-danger" style="border-radius:0px" title="Delete">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection