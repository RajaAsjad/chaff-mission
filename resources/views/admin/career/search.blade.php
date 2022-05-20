@foreach($models as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{ $models->firstItem()+$key }}.</td>
        <td>{{$model->first_name}}</td>
        <td>{{$model->last_name}}</td>
        <td>{{$model->email}}</td>
        <td>{{$model->phone}}</td>
        <!-- <td>{{$model->address}}</td> -->
        <!-- <td>{{$model->city}}</td>
        <td>{{$model->state}}</td>
        <td>{{$model->postal}}</td> -->
        <td>{{$model->CV_file}}</td>
        <td>
            @if($model->status)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <!-- <td>{{isset($model->hasCreatedBy)?$model->hasCreatedBy->name:'N/A'}}</td> -->
        <td width="250px">
                <a href="{{route('career.show', $model->id)}}" data-toggle="tooltip" data-placement="top" title="View Career" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> View</a>
            
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $model->id }}" data-del-url="{{ url('career', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
            
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
