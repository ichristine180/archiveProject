<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Archive</title>

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/feedback">Feedback <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
<div class="col-10 mt-5">
<form>
  <div class="mb-3">
<select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example" id="p">
@foreach($period as $period)
  <option value="{{$period->id}}">{{$period->startYear}}-{{$period->endYear}}</option>
  @endforeach
</select>
</div>
</form>
</div>
<div class="col-12 mt-5">
<div class="card bg-ligth">
<h4 class="card-title" style="display:none" id="empty">
 There is no Structure
  </4>
  <h4 class="card-title" style="display:none" id="ok">
  Structure List
  </4>
  </div>
<table class="table table-bordered">

        <thead>
            <tr id="title">
            
            </tr>
        </thead>
        <tbody>
            <tr id="bodyData">
           
            </tr>
        </tbody>
    </table>
    </table>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
   $(document).ready(function() {
    $('#example').DataTable();


var period = 0;
  $("select").change(function(){
    period = $("#p").val();
    //console.log(period)
$.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: 'structure/'+period,
    dataType: 'json',
    success: function (dataResult) {
     var resultData = dataResult.data;
     if(resultData == undefined || resultData.length == 0){
      document.getElementById("empty").style.display="block"; 
      document.getElementById("ok").style.display="none";
     
     }else{
      document.getElementById("ok").style.display="block";
      document.getElementById("empty").style.display="none"; 
     }
         var title = "";
         var bodyData = "";
         $.each(resultData, function (index,row) {
          title+="<th>"+row.name+"</th>"
          bodyData+="<td>"+row.pivot.total+"</td>"
      })

        $("#title").html(title)
        $("#bodyData").html(bodyData)

    },
    error: function() { 
         console.log(data);
    }
});
});
});
</script>
</body>
</html>