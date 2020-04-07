@extends('plantilla.plantilla')
@section('titulo','Estadistica Covid-19 - Mundial')
@section('contenido')

<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-12">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por Pais .." >

            <table id="myTable" class="table">
                <thead>
                    <th>Provincia</th>
                    <th>Pais</th>
                    <th>Confirmados</th>
                    <th>Recuperados</th>
                    <th>Decesos</th>
                    <th>Casos</th>
                    <th>Fecha</th>
                </thead>
                    @foreach ($Paises as $Pais)
                    <tr>
                        <td>{{ $Pais->provinceState }}</td>
                        <td>{{ $Pais->countryRegion }}</td>
                        <td>{{ $Pais->confirmed }}</td>
                        <td>{{ $Pais->recovered }}</td>
                        <td>{{ $Pais->deaths }}</td>
                        <td>{{ $Pais->active }}</td>
                        <td>{{ $Pais->lastUpdate }}</td>
                    </tr>
                    @endforeach
                <tfoot>
                    <th>Provincia</th>
                    <th>Pais</th>
                    <th>Confirmados</th>
                    <th>Recuperados</th>
                    <th>Decesos</th>
                    <th>Casos</th>
                    <th>Fecha</th>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
</script>