<?php
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>PDF DOWNLOADER!</title>
    <style>
      #box{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
    </style>
  </head>
  <body>
    
    <div class="container mt-2 p-4" id="box">
       <form action="/" method="post" enctype='multipart/form-data'>
       @csrf
      <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-2 font-weight-bold h3">
          <span>Add PDF</span>
        </div>
        <div class="col-md-6">
          <input type="file" name="pdf" id="pdf" accept=".pdf" class="form-control" required>
        </div>
        <div class="col-md-2">
          <button class="btn btn-primary btn-block">Submit</button>
        </div>
        <div class="col-md-1"></div>
      </div>

      </form>
     <hr>
       
       <!-- Start Table -->
         
       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PDF</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=0; ?>
  @foreach($pdfs as $pdf)
    <tr>
      <th scope="row">{{ ++$i }}</th>
      <td>{{ $pdf->pdf }}</td>
      <td>
        <a href="/downloadPdf/{{ $pdf->id }}"><i class="fas fa-download"></i></a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

       <!-- End Table -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>