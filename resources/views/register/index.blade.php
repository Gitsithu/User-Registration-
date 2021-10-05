<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CSS table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/style2.css">

</head>

<body>
<nav>
  <ul>
    <li ><a href="/register/create">
      Register
</a><span></span><span></span><span></span><span></span>
    </li>
</ul>
</nav>
<br>
    <section class="wrapper">
    <!-- Row title -->
    <main class="row title">
      <ul>
        <li>Name</li>
        <li>Email</li>
        <li>Phone</li>
        <li>Gender</li>
        <li>Address</li>
        <li>Township</li>
        <li>Action</li>
      </ul>
    </main>
    @foreach($reg as $re)
    <!-- Row 1 - fadeIn -->
    <section class="row-fadeIn-wrapper">
      <article class="row fadeIn nfl">
      
      <ul>
          <li>{{$re->name}}</li>
          <li>{{$re->email}}</li>
          <li>{{$re->phone}}</li>
          @if($re->gender==1)
              <li>Male</li>
          @else<li>Female</li>
          @endif
              <li>{{$re->address}}</li>
          <li>{{$re->township}}</li>
          <li><a type="button" href='/register/{{ $re->id }}/edit'>Update</a> </li>
        </ul>
        
      </article>
    </section>
    @endforeach 
    <!-- Row 2 - fadeOut -->
   
</section>
</body>
</html>
