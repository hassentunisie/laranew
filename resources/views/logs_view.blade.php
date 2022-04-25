<table border=1>
    <tr>
        <td>Nom</td>
    </tr>
    @foreach ($logs as $log)
    <tr>
        <td>{{ $log->name }}</td>
    </tr>        
    @endforeach

</table>