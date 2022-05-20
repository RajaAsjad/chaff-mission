@foreach($banners as $key=>$banner)
    <tr id="id-{{ $banner->slug }}">
        <td>{{ $banners->firstItem()+$key }}.</td>
        <td>{{ $banner->name }}</td>
        <td>{!! \Illuminate\Support\Str::limit( $banner->description , 20) !!}</td>
        <td>
            @if($banner->status)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td width="250px">
            @can('banner-edit')
                <a href="{{route('banner.edit', $banner->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Banner" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('banner-delete')
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $banner->slug }}" data-del-url="{{ url('banner', $banner->slug) }}"><i class="fa fa-trash"></i> Delete</button>
            @endcan
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        <div class="d-flex justify-content-center">
            {!! $banners->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>