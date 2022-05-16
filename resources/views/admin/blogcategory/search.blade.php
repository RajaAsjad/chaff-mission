@foreach($models as $key=>$model)
    <tr id="id-{{ $model->slug }}">
        <td>{{ $models->firstItem()+$key }}.</td>
        <td>{{\Illuminate\Support\Str::limit($model->name,40)}}</td>
        <td>{{\Illuminate\Support\Str::limit($model->description,60)}}</td>
        <td>
            @if($model->status)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td>{{isset($model->hasCreatedBy)?$model->hasCreatedBy->name:'N/A'}}</td>
        <td width="250px">
                <a href="{{route('category.edit', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit category" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $model->slug }}" data-del-url="{{ url('category', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
            
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
        <div class="d-flex justify-content-center">
            {!! $models->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>
