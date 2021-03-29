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
  <a class="navbar-brand" href="/">Home</a>
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

<div class="row align-items-center" >
<div class="col-10" style="margin-top:40px;">
<div class="card bg-ligth">
  <h4 class="card-title">
   Details on Structure period 1960-1963
  </4>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Prefecture Name</th>
                <th>Leader Name</th>
                <th>View Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Kigali</td>
                <td>SENKINDI Frank</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>2</td>
                <td>Ruhengeri</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>3</td>
                <td>Butare</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>4</td>
                <td>Gitarama</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>5</td>
                <td>Gikongoro</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>6</td>
                <td>Cyangugu</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>7</td>
                <td>kibuye</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>8</td>
                <td>Gisenyi</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>

            <tr>
                <td>9</td>
                <td>byumba</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
            <tr>
                <td>10</td>
                <td>Kibungo</td>
                <td>KARANGWA Samuel</td>
                <td><a href="/view" class="btn btn-success">View</a></td>  
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>