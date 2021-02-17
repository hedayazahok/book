<html>
<head>
	<title>إضافة كتاب جديد </title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/addbook.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script type="text/javascript">

function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var dvtext = document.getElementById("dvtext");
        dvtext.style.display = chkYes.checked ? "block" : "none";
    }
    function HideDiv() {
        var chkYes = document.getElementById("chk");
        var dvtext = document.getElementById("dvtext");
        dvtext.style.display = chkYes.checked ? "none" : "block";
    }

</script> 
</head>
<body>
<div class="container">
    <header class="header">
        <h1 id="title" class="text-center">تعديل كتاب {{$book->title}} </h1>
       <!--  <p id="description" class="description text-center">
            We always love to hear from you!
        </p> -->
    </header>
    @include('flash-message')
    <form  id="survey-form" action="{{route('books.update',$book->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
    	<!-- add book  -->
    
    <div class="Neon Neon-theme-dragdropbox">
       <input 
       style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="image" 
       id="filer_input2" type="file">
        <div class="Neon-input-dragDrop">
        <div class="Neon-input-inner">
        <div class="Neon-input-icon">
        <i class="fa fa-file-image-o"></i>
    </div><div class="Neon-input-text"><h3>قم بوضع صورة غلاف الكتاب  هنا</h3> <span style="display:inline-block; margin: 15px 0">أو </span></div><a class="Neon-input-choose-btn blue">اختيار الملف </a></div></div>
        </div>
<!-- name of book  -->

 <div class="form-group">
            <label id="name-label" for="name" >اسم الكتاب </label>
            <input
                    type="text"
                    name="title"
                    id="name"
                    class="form-control"
                    value="{{$book->title}}"
                    required
            />
        </div>
       
        <div class="form-group">
          <label id="status" for="status">حالة الكتاب </label>
          <select id="dropdown" name="state" class="form-control" style="text-align: right;"  dir="rtl"  required>
                <option disabled  value>اختر حالة الكتاب </option>
                <option @if($book->state=="ممتازة")selected @endif   value="ممتازة  ">ممتازة </option>
                <option @if($book->state=="جيد جداً")selected @endif value="جيد جداً">جيد جداً</option>
                <option @if($book->state=="جيد")selected @endif value="جيد ">جيد</option>
            </select>
           
        </div>
        <div class="form-group">
            <p style="text-align: right;">الكلية </p>
            <select id="id_college" name="id_college" class="form-control" style="text-align: right;"   dir="rtl" required>
                <option    >اختر الكلية الذي ينتمي له الكتاب </option>
             @foreach($colleges as $college)
             <option value="{{$college->id}}"  @if($book->id_college==$college->id)selected @endif   > {{$college->name}}</option>
@endforeach
            </select>
        </div>

        <div class="form-group">
            <p style="text-align: right;">القسم </p>
            <select id="id_department" name="id_department" class="form-control" style="text-align: right;"   dir="rtl" required>
                <option    value="{{$department->id}}" selected>{{$department->name}} </option>
             
            </select>
        </div>
        

        <div class="form-group">
            <p style="text-align: right;">سعر الكتاب </p>
            <label  id="name-label" >
                <input
                        name="type_price" value="free" class="input-radio" onclick="HideDiv()"  id="chk"  style=" margin-left:-9px;" type="radio"  @if($book->price==0) checked @endif />إهداء </label>
            <label id="name-label" for="chkYes" >
                <input name="type_price" type="radio" id="chkYes"  onclick="ShowHideDiv()"  style=" margin-left:-9px;" class="input-radio" @if($book->price!=0)checked @endif />بيع </label>
                @if($book->price==0)  
        <div id="dvtext" style="display: none">
            <hr>
         <p style="text-align: right;">: سعر الكتاب </p>
         <input type="number" id="txtBox"  value="{{$book->price}}" name="price"  style="margin-left: 400px;
    color: black;" />
</div>
@else
<div id="dvtext" >
            <hr>
         <p style="text-align: right;">: سعر الكتاب </p>
         <input type="number" id="txtBox"  value="{{$book->price}}" name="price"  style="margin-left: 400px;
    color: black;" />
</div>
@endif
        <div class="form-group">
            <p style="text-align: right;">وصف الكتاب </p>
            <textarea
                    id="comments"
                    class="input-textarea"
                    name="describtion" 
                    maxlength="220"

            >{!!$book->describtion!!}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="submit-button">
                إرسال 
            </button>
        </div>
    </form>
</div>  
  </div>
  <script type="text/javascript">

$('#id_college').change(function(){
var id_college  = $(this).val();    
if( id_college){
    $.ajax({
       type:"GET",
       url:"{{url('/books/geDepartments/')}}?id_college="+id_college,
       success:function(res){               
        if(res){
            $("#id_department").empty();
            $("#id_department").append('<option>  </option>');
            length=res.departments.length;
                for(i=0;i<length;i++){

                $("#id_department").append('<option  value="'+res.departments[i].id+'" {{ old("id_department") =='+res.departments[i].id+' ? "selected" : "" }}  >'+res.departments[i].name+'</option>');
            }
            
       
        }else{
           $("#id_department").empty();
        }
       }
    });
}else{
    $("#id_department").empty();
}      
});
</script>
</body>
</html>