<table>
    <tbody>
    <thead>
    <tr >
        <th colspan="2" align="center" ><strong>Date</strong></th>
        <th colspan="4"><strong>Name</strong></th>
        <th colspan="2"><strong>Mobile</strong></th>
        <th colspan="4"><strong>Title</strong></th>
        <th colspan="2"><strong>UTM_Source</strong></th>
        <th colspan="2"><strong>UTM_Medium</strong></th>
        <th colspan="2"><strong>UTM_Campaign</strong></th>
    </tr>
    </thead>
    @foreach($invoices as $key => $value)
        <tr>
            <td colspan="2">{{ $value['date'] }}</td>
            <td colspan="4">{{ $value['name'] }}</td>
            <td colspan="2">{{ $value['mobile'] }}</td>
            <td colspan="4">{{ $value['title'] }}</td>
            <td colspan="2">{{ $value['source'] }}</td>
            <td colspan="2">{{ $value['medium'] }}</td>
            <td colspan="2">{{ $value['campaign'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>