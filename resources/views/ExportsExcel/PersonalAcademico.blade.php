<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
.idtesting{
    color: aqua;
    background-color: aquamarine;
    text-align: center;
}

</style>


 <p class="idtesting">1</p>

<table class="display table table-striped table-hover table-boder-radius serial nowrap greenn">
    <thead>
       
    <tr>
       <!-- Horizontal alignment -->
    <td class="idtesting">Big title</td>

    <!--  Vertical alignment -->
    <td style="background-color: #000000;">Bold cell</td>

    <!-- Rowspan -->
    <td rowspan="3">Bold cell</td>

    <!-- Colspan -->
    <td colspan="6">Italic cell</td>

    <!-- Width -->
    <td width="100">Cell with width of 100</td>

    <!-- Height -->
    <td height="100">Cell with height of 100</td>
    <td class="prueba11">id</td>
    

        <th valign="middle">id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
    </tr>
    </thead>
    <tbody>
    @foreach($PersonalAcademico as $personal)
        <tr>
            <td>{{ $personal->id }}</td>
            <td>{{ $personal->Nombres }}</td>
            <td>{{ $personal->Apellidos}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<style>
    .idtesting{
        color: aqua;
        background-color: aquamarine;
        text-align: center;
    }
    
    </style>
    
</html>