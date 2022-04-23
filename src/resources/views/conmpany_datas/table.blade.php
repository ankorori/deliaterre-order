<div class="table-responsive-sm">
    <table class="table table-striped" id="conmpanyDatas-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Postlcode</th>
        <th>Streetaddress</th>
        <th>Phonenumber</th>
        <th>Faxnumber</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($conmpanyDatas as $conmpanyData)
            <tr>
                <td>{{ $conmpanyData->name }}</td>
            <td>{{ $conmpanyData->postlcode }}</td>
            <td>{{ $conmpanyData->streetaddress }}</td>
            <td>{{ $conmpanyData->phonenumber }}</td>
            <td>{{ $conmpanyData->faxnumber }}</td>
                <td>
                    {!! Form::open(['route' => ['conmpanyDatas.destroy', $conmpanyData->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('conmpanyDatas.show', [$conmpanyData->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('conmpanyDatas.edit', [$conmpanyData->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>