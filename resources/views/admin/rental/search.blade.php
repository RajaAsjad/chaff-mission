@foreach($models as $key=>$model)
    <tr id="id-{{ $model->slug }}">
        <td>{{ $models->firstItem()+$key }}.</td>
        <td>
            @if($model->image)
                <img src="{{ asset('public/admin/assets/images/rental/'.$model->image) }}" alt="" style="width:60px;">
            @else
                <img src="{{ asset('public/admin/assets/images/default.jpg') }}" style="width:60px;">
            @endif
        </td>
        <td>{{($model->slug)}}</td>
        <td>{{\Illuminate\Support\Str::limit($model->name,60)}}</td>
        <td>{{\Illuminate\Support\Str::limit($model->short_description,60)}}</td>
        <td>{{\Illuminate\Support\Str::limit($model->description,60)}}</td>
        <td>{{($model->rent)}}</td>
        <td>
            @if($model->status)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td>{{isset($model->hasCreatedBy)?$model->hasCreatedBy->name:'N/A'}}</td>
        <td width="250px">
        @can('car-edit')
            <a href="{{route('rental.edit', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Car" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
        @endcan
        @can('car-delete')
            <button class="btn btn-danger btn-xs delete" data-slug="{{ $model->slug }}" data-del-url="{{ url('rental', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
        @endcan
        </td>
    </tr>
@endforeach
<tr>
<td colspan="6">
    <div class="d-flex justify-content-center">
        {!! $models->links('pagination::bootstrap-4') !!}
    </div>
</td>
</tr>
