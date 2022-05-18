@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Student Data</div>

  <div class="col-md-7 align-self-center card-body">
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}

        <div class="row mb-3">
          <label for="STUDENT_LRN" class="col-sm-3 col-form-label">Student LRN</label>
          <div class="col-sm-7">
            <input type="numnber" name="STUDENT_LRN" id="STUDENT_LRN" value="{{$students->STUDENT_LRN}}" class="form-control" required> 
          </div>
        </div>
        
        <div class="row mb-3">
        <label for="FIRST_NAME" class="col-sm-3 col-form-label">First name</label>
          <div class="col-sm-7">
            <input type="text" name="FIRST_NAME" id="FIRST_NAME" value="{{$students->FIRST_NAME}}" class="form-control" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="MIDDLE_NAME" class="col-sm-3 col-form-label">Middle Name</label>
          <div class="col-sm-7">
            <input type="text" name="MIDDLE_NAME" id="MIDDLE_NAME" value="{{$students->MIDDLE_NAME}}" class="form-control" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="LAST_NAME" class="col-sm-3 col-form-label">Last Name</label>
          <div class="col-sm-7">
            <input type="text" name="LAST_NAME" id="LAST_NAME" value="{{$students->LAST_NAME}}" class="form-control" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="AGE" class="col-sm-3 col-form-label">Age</label>
          <div class="col-sm-7">
            <input type="text" name="AGE" id="AGE" value="{{$students->AGE}}" class="form-control" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="YEAR_LEVEL" class="col-sm-3 col-form-label">Year Level</label>
          <div class="col-sm-7">
            <select name="YEAR_LEVEL" id="YEAR_LEVEL" value="{{$students->YEAR_LEVEL}}" class="form-control" required>
                <option name="YEAR_LEVEL" value="First Year">First Year</option>
                <option name="YEAR_LEVEL" value="Second Year">Second Year</option>
                <option name="YEAR_LEVEL" value="Third Year">Third Year</option>
                <option name="YEAR_LEVEL" value="Fourth Year">Fourth Year</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="SECTION" class="col-sm-3 col-form-label">Section</label>
          <div class="col-sm-7">
            <input type="text" name="SECTION" id="SECTION" value="{{$students->SECTION}}" class="form-control" required>
          </div>
        </div>

        <input type="submit" value="Save" class="btn btn-success">   
    </form>
  
  </div>
</div>
@stop