@extends('students.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h4>created this week</h4>
            <h3 id="lastweek"></h3>
        </div>
        <div class="col-sm">
            <h4>created this moth</h4>
            <h3 id="lastmoth"></h3>
        </div>
    </div>

</div>
<div class="col-md">
    <div class="header">
        <div class="row justify-content-between">
            <div class="col-4"> 
                <h4>All Students</h4>
            </div>
            <div class="col-4 align-self-center">
                <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student LRN</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Year Level</th>
                    <th>Section</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($students as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->STUDENT_LRN }}</td>
                    <td>{{ $item->FIRST_NAME }}</td>
                    <td>{{ $item->MIDDLE_NAME }}</td>
                    <td>{{ $item->LAST_NAME }}</td>
                    <td>{{ $item->AGE }}</td>
                    <td>{{ $item->YEAR_LEVEL }}</td>
                    <td>{{ $item->SECTION }}</td>

                    <td>
                        <a href="{{ url('/student/' . $item->id) }}" title="View Student">
                            <button type="button" class="btn btn-sm btn-info"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        </a>
                        <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student">
                            <button type="button" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </a>
                        <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection