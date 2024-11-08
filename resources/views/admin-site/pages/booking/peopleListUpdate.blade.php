@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Set Number of people</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Set Number of people</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Number of people</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('addbookingPeopleDataedit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$peopleUpView->id}}">
            <div class="col-12">
              <label for="people" class="form-label">Number of people</label>
              <input type="text" name="people" value="{{$peopleUpView->people}}" class=" form-control" id="people">

            </div>
            <div class="col-12">
              <label for="AhharAddaBranch" class="form-label">Ahhar Adda Branch</label>
              <input type="text" name="AhharAddaBranch" value="{{$peopleUpView->AhharAddaBranch}}" class="form-control" id="AhharAddaBranch">
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
  </main>
@endsection