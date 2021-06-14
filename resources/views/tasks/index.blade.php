@extends('layouts.master')

@section('content')

    <form method="post" action="/task" enctype="application/x-www-form-urlencoded">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-9">
                <input name="description" type="text" class="form-control" id="description" placeholder="Beskriv uppgiften" required>
                <button type="submit" class="button">Submit</button>
            </div>
        </div>


    </form>
    <br/>
    <br/>

    <table id = "tasks">
        <thead>
        <tr>
            <th colspan="2">Description</th>
        </tr>
        </thead>
        <tbody>
        @for($i=0; $i < count($tasks); $i++)
            <tr>
                <td>{{ $tasks[$i] -> Description }}</td>
                <td><a href ="/task/delete/{{ $tasks[$i] -> id }}"><img src="remove.png" id="del" alt="Delete"></a></td>
            </tr>
        @endfor
        </tbody>
    </table>

@endsection