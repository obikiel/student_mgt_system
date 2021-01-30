<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825__340.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">list of students</h5>
      <p class="card-text">you can find all the informations about the students in the system.</p>
    </div>

    <div class="col">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">cne</th>
                <th scope="col">firstname</th>
                <th scope="col">surname</th>
                <th scope="col">age</th>
                <th scope="col">course of study</th>
                <th scope="col">operations</th>
              </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
              <tr>

              <td>{{ $student->cne }}</td>
              <td>{{ $student->firstname }}</td>
              <td>{{ $student->surname }}</td>
              <td>{{ $student->age }}</td>
              <td>{{ $student->course_of_study }}</td>
              <td>
                <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
              </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
</div>


