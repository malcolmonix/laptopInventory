<table>
        <thead>
        <tr>
            <th>Employee</th>
            <th>Equipment</th>
            <th>Tag Number</th>
            <th>Computer Name</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            
        @foreach($data as $row)

            <?php $equipment = DB::table('equipments')->select('*')->where('id', $row->equipment_id)->get(); ?>

                <tr>
                <td>{{ App\Models\Employee::find($row->employee_id )->name }}</td>                
                <td>{{  App\Models\Brand::find($equipment[0]->brand_id)->name }}    {{ $equipment[0]->name }} </td>
                <td>{{ $equipment[0]->serialnumber }} </td>
                <td> {{ $equipment[0]->computer_name }} </td>
                <td>{{App\Models\Situation::find($row->situation_id)->name }} </td>                
            </tr>
        @endforeach
        </tbody>
    </table>

    

    