<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabel.css"  type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/respond.js"></script>
      <title>Table</title>
</head>
<body>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    <div id="not-found"></div>
    <table class="table table-striped table-dark" id="myTable">
        <thead>
          <tr>
            <th scope="col">Hotel Name</th>
            <th scope="col">Job Position</th>
            <th scope="col">State</th>
            <th scope="col">No.of.jobs</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td> <img src="assets/media/icons/hamburg-menu-2-16.png" alt=""  data-toggle="modal" data-target="#myModal"></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td> <img src="assets/media/icons/hamburg-menu-2-16.png" alt=""  data-toggle="modal" data-target="#myModal"></td>
           
            <!-- <td>  <i class="fas fa-plus fa-2x" data-toggle="modal" data-target="#myModal"></i>
            </td> -->
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td> <img src="assets/media/icons/hamburg-menu-2-16.png" alt=""  data-toggle="modal" data-target="#myModal"></td>
          </tr>
              <!-- Modal -->
             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                   </div>
                   <div class="modal-body">
                     ...
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                   </div>
                 </div>
               </div>
             </div>

        </tbody>
      </table>



<!-- Latest compiled and minified JavaScript -->

<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      var indexDisplay = 0;
     
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
            indexDisplay++;
          }
        }       
      }

      //Shtohet vetem kjo
      if(indexDisplay == tr.length-1)
      document.getElementById("not-found").innerText = "Not found";
      else document.getElementById("not-found").innerText = "";

    }
    </script>
</script>

</body>
</html>