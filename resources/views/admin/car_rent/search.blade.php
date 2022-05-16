@foreach($car_rents as $key=>$car_rent)
    <tr id="id-{{ $car_rent->slug }}">
        <td>{{ $car_rents->firstItem()+$key }}.</td>
        <td>
            @if($car_rent->image)
                <img src="{{ asset('public/admin/assets/images/car_rent/'.$car_rent->image) }}" alt="" style="width:60px;">
            @else
                <img src="{{ asset('public/admin/assets/images/default.jpg') }}" style="width:60px;">
            @endif
        </td>
        <td>{{($car_rent->heading)}}</td>
        <td>{!! \Illuminate\Support\Str::limit($car_rent->description,60) !!}</td>
        <td>
            @if($car_rent->status)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td>{{isset($car_rent->hasCreatedBy)?$car_rent->hasCreatedBy->name:'N/A'}}</td>
        <td width="250px">
        @can('car_rent-edit')
            <a href="{{route('car_rent.edit', $car_rent->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Car Rent" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
        @endcan
        @can('car_rent-delete')
            <button class="btn btn-danger btn-xs delete" data-slug="{{ $car_rent->slug }}" data-del-url="{{ url('car_rent', $car_rent->slug) }}"><i class="fa fa-trash"></i> Delete</button>
        @endcan
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        <div class="d-flex justify-content-center">
            {!! $car_rents->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>