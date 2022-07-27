<div class="table-responsive">
    <table class="table" id="sizes-table">
        <thead>
        <tr>
            <th>Title</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sizes as $size)
            <tr>
                <td>{{ $size->title }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sizes.destroy', $size->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sizes.show', [$size->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sizes.edit', [$size->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
