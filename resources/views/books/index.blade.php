<!DOCTYPE html>
<html>
<head>
	<title>IUG BOOKS</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sidenav1">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div style="height: 50px; margin-top: 30px; ">




</div>    
<form class="example"  action="{{route('books.search')}}" method="post" style="margin:15px;width:500px">
@csrf


<input type="text" placeholder="البحث "name="title">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
<form  action="{{route('books.college')}}" method="post">
  @csrf
<label for=""  style="   float:right; font-weight: bold; margin-left: 15px;  ">تصنيف:</label>
<select data-trigger="" name="id_college" style="   float:right; " id="college">
 <option placeholder="" value="0">  اختر الكلية </option>
 @foreach($colleges as $college)
 <option placeholder="" value="{{$college->id}}"  > {{$college->name}}   </option>

 @endforeach
</select><button type="submit"><i class="fa fa-search"></i></button>

<!--   <input type="submit" value="Submit">
--></form>
</div>
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a href="{{route('home')}}"> <img src="images/books/logo.svg" alt="" title=""></a>
                </li>

                <li class="nav-item">
                    <a href="{{route('books.create')}}">  <button class="button button1"><b>كتاب جديد</b></button></a>
                </li>

            </ul>

          
    </nav>
<div class="row" >
  @if($books)
@foreach($books as $book)
  <div class="column"> 
    <p  class="hhh" style="text-align: right;">
      <a href="personal-page/personal-info.html" style="text-decoration: none;">
        <b class="align-right">{{$book->user->name}} </b>
      </a>
      <a href="personal-page/personal-info.html">
        <img class="circular--square" src="{{asset('images\تنزيل.jpg')}}" width="40" height="40"
            class="d-inline-block align-left  border-radius-8px" alt="" />
          </a>
     </p>

<div class="contain">

    <img src="{{asset('images/books/'.$book->image)}}" class="im" alt="no_image" style="width:100%">

<div class="middle">
  <div class="icons">

 <i id="ic"  class="fa fa-bookmark-o" style="font-size:20px; margin-left: 6px;
          margin-top: 5px;"></i>
  </div>
<!-- <div class="icons2">
    <i id="dropbtn" class="fa fa-ellipsis-h" style="font-size:20px; margin-left: 6px;
    margin-top: 5px;"></i>
    <div class="drop-down">
       <a href="favorite.html"><p class="fafa">تعديل</p></a>
       <a href="favorite.html"><p class="fafa">حذف </p></a>
    </div>
</div> -->
  
</div>
</div>
    <a href="{{route('books.show',$book->id)}}" style="text-decoration: none;"> <p style="text-align: right;">اسم الكتاب :   {{$book->title}} </p></a>
    <p style="text-align: right;" > سعر الكتاب  : @if($book->price==0.0) مجاني @else {{$book->price}} @endif  </p>      
  </div>
@endforeach

</div>
@else
<h3>لا يوجد كتب مضافة</h3>
@endif
</body>
</html>