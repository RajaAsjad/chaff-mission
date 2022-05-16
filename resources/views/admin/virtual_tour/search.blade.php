@foreach($tours as $key=>$tour)
    <tr id="id-{{ $tour->slug }}">
        <td>{{ $tours->firstItem()+$key }}.</td>
        <td>
            @if($tour->image)
                <img src="{{ asset('public/admin/assets/images/virtual_tour/'.$tour->image) }}" alt="" style="width:60px;">
            @else
                <img src="{{ asset('public/admin/assets/images/virtual_tour/no-photo1.jpg') }}" style="width:60px;">
            @endif
        </td>
        <td>{{ $tour->name }}</td>
        <td>{!! \Illuminate\Support\Str::limit($tour->description,60) !!}</td>
        <td>
            @if($tour->status)
            <span class="badge badge-success">Active</span>
            @else
            <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td>
            @can('virtualtour-edit')
                <a href="{{route('virtualtour.edit', $tour->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Virtual Tour" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('virtualtour-delete')
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $tour->slug }}" data-del-url="{{ url('virtualtour', $tour->slug) }}"><i class="fa fa-trash"></i> Delete</button>
            @endcan
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        Displying {{$tours->firstItem()}} to {{$tours->lastItem()}} of {{$tours->total()}} records
        <div class="d-flex justify-content-center">
            {!! $tours->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>
