@foreach($rvs as $key=>$rv)
    <tr id="id-{{ $rv->slug }}">
        <td>{{ $rvs->firstItem()+$key }}.</td>
        <td>
            @if($rv->image)
                <img src="{{ asset('public/admin/assets/images/RV/'.$rv->image) }}" alt="" style="width:60px;">
            @else
                <img src="{{ asset('public/admin/assets/images/RV/no-photo1.jpg') }}" style="width:60px;">
            @endif
        </td>
        <td>{{ $rv->name }}</td>
        <td>{{ $rv->price }}</td>
        <td>{!! \Illuminate\Support\Str::limit($rv->description,60) !!}</td>
        <td>
            @if($rv->status)
            <span class="badge badge-success">Active</span>
            @else
            <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td>
            @can('rv-edit')
                <a href="{{route('rv.edit', $rv->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit R.V" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('rv-delete')
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $rv->slug }}" data-del-url="{{ url('rv', $rv->slug) }}"><i class="fa fa-trash"></i> Delete</button>
            @endcan
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        Displying {{$rvs->firstItem()}} to {{$rvs->lastItem()}} of {{$rvs->total()}} records
        <div class="d-flex justify-content-center">
            {!! $rvs->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>
