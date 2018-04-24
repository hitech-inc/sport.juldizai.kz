<table class="table table-responsive" id="teammates-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Occupation</th>
        <th>Img</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($teammates as $teammate)
        <tr>
            <td>{!! $teammate->name !!}</td>
            <td>{!! $teammate->occupation !!}</td>
            <td>{!! $teammate->img !!}</td>
            <td>
                {!! Form::open(['route' => ['teammates.destroy', $teammate->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('teammates.show', [$teammate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('teammates.edit', [$teammate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>