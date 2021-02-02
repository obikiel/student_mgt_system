<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>student management system</title>
  </head>
  <body>
    @include("navbar")


    @if($layout=='index')
        <div class="container-fluid mt-4 ">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
            </div>
        </div>
    @elseif($layout=='create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://cdn.pixabay.com/photo/2017/09/26/04/28/classroom-2787754__340.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">create new student details</h5>
                          <p class="card-text">Enter the students information</p>
                        </div>
                        <form action="{{url('/store')}}" method="post">
                            @csrf
                            <div class="form-group">

                              <input type="text" name="cne" class="form-control" placeholder="enter cne">
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" placeholder="enter firstname">
                              </div><br>
                              <div class="form-group">
                                <input type="text" name="surname" class="form-control" placeholder="enter surname">
                              </div><br>
                              <div class="form-group">
                                <input type="text" name="age" class="form-control" placeholder="enter Age">
                              </div><br>
                              <div class="form-group">
                                <input type="text" name="course_of_study" class="form-control" placeholder="enter course of study">
                              </div><br>
                              <input type="submit" class="btn btn-info" value="save">

                          </form>
                      </div>

                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                    <form action="{{url('/update/'.$student->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label class="form-label">cne</label>
                          <input value="{{$student->cne}}" type="text" name="cne" class="form-control" placeholder="enter cne">
                        </div>
                        <div class="form-group">
                            <label class="form-label">first name</label>
                            <input value="{{$student->firstname}}"type="text" name="firstname" class="form-control" placeholder="enter firstname">
                          </div>
                          <div class="form-group">
                            <label class="form-label">surname</label>
                            <input value= "{{$student->surname}}"type="text" name="surname" class="form-control" placeholder="enter surname">
                          </div>
                          <div class="form-group">
                            <label class="form-label">age</label>
                            <input value="{{$student->age}}" type="text" name="age" class="form-control" placeholder="enter Age">
                          </div>
                          <div class="form-group">
                            <label class="form-label">course of study</label>
                            <input value="{{$student->course_of_study}}"type="text" name="course_of_study" class="form-control" placeholder="enter course of study">
                          </div><br>
                          <input type="submit" class="btn btn-info" value="update">

                      </form>
                </section>
            </div>
        </div>
    @elseif($layout=='destroy')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">
                <form action="{{url('/destroy/'.$student->id)}}" method="get">
                    @csrf
                    <div class="form-group">
                      <label class="form-label">cne</label>
                      <input value="{{$student->cne}}" type="text" name="cne" class="form-control" placeholder="enter cne">
                    </div>
                    <div class="form-group">
                        <label class="form-label">first name</label>
                        <input value="{{$student->firstname}}"type="text" name="firstname" class="form-control" placeholder="enter firstname">
                      </div>
                      <div class="form-group">
                        <label class="form-label">surname</label>
                        <input value= "{{$student->surname}}"type="text" name="surname" class="form-control" placeholder="enter surname">
                      </div>
                      <div class="form-group">
                        <label class="form-label">age</label>
                        <input value="{{$student->age}}" type="text" name="age" class="form-control" placeholder="enter Age">
                      </div>
                      <div class="form-group">
                        <label class="form-label">course of study</label>
                        <input value="{{$student->course_of_study}}"type="text" name="course_of_study" class="form-control" placeholder="enter course of study">
                      </div><br>
                      <input type="submit" class="btn btn-info" value="new">

                  </form>
            </section>
        </div>
    </div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
