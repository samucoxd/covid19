@extends('plantilla.plantilla')
@section('titulo','Estadistica Covid-19 - Mundial')
@section('contenido')

<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-12">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por Pais .." >

            <table id="myTable" class="table">
                <thead>
                    <th>Pais</th>
                    <th>Confirmados</th>
                    <th>Recuperados</th>
                    <th>Decesos</th>
                    <th>Casos</th>
                    <th>Nuevos Decesos</th>
                    <th>Nuevos Casos</th>
                    <th>Estado Critico</th>
                </thead>
                    @foreach ($Paises->countries_stat as $Pais)
                    <tr>
                        <td>{{ $Pais->country_name }}</td>
                        <td>{{ $Pais->cases }}</td>
                        <td>{{ $Pais->total_recovered }}</td>
                        <td>{{ $Pais->deaths }}</td>
                        <td>{{ $Pais->active_cases }}</td>
                        <td>{{ $Pais->new_deaths }}</td>
                        <td>{{ $Pais->new_cases }}</td>
                        <td>{{ $Pais->serious_critical }}</td>
                    </tr>
                    @endforeach
                <tfoot>
                    <th>Pais</th>
                    <th>Confirmados</th>
                    <th>Recuperados</th>
                    <th>Decesos</th>
                    <th>Casos</th>
                    <th>Nuevos Decesos</th>
                    <th>Nuevos Casos</th>
                    <th>Estado Critico</th>
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
        td = tr[i].getElementsByTagName("td")[0];
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