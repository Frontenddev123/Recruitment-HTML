function myFunction() {
  debugger;
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  var indexDisplay = 0;
  var fieldFound = document.getElementById("not-found");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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

  if (indexDisplay == tr.length - 1) fieldFound.innerText = "Not found";
  else fieldFound.innerText = "";
}
