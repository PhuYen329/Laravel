@extends('Admin')
@section('adminContent')
<div class='stats-last-agile'>
    <table class="table stats-table ">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th >Action</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->category_id}}</td>
                        <td>{{$item->category_name}}</td>
                        <td colspan="2" ><a name="" id="" class="btn btn-info" href="#" role="button">Edit</a></td>
                        <td ><a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a></td>
                    </tr>
                @endforeach
               <tr>
                <td><a name="" id="" class="btn btn-primary" href="#" role="button">Add</a></td>
               </tr>
            </tbody>
    </table>
    {{$data->links()}}
</div>


@endsection