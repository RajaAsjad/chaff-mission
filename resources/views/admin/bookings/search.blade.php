@foreach($models as $key=>$model)
    <tr id="id-{{ $model->slug }}">
        <td>{{ $models->firstItem()+$key }}.</td>
        <td>{{ $model->booking_number }}</td>
        <td>{{ isset($model->hasProduct->hasCategory)?$model->hasProduct->hasCategory->name:'--' }}</td>
        <td>{{ isset($model->hasProduct)?$model->hasProduct->name:'--' }}</td>
        <td>{{ isset($model->hasCustomer)?$model->hasCustomer->name:'--' }}</td>
        <td>{{ $model->hasCustomer->phone??'--' }}</td>
        <td><span class="badge badge-info">{{ date('d, F-y', strtotime($model->trip_start_date)) }}</span> - <span class="badge badge-info">{{ date('d, F-y', strtotime($model->trip_end_date)) }}</span></td>
        <td><span class="badge badge-info">{{ $model->total_days }} - Days</span></td>
        <td>
            @if($model->status==0)
                <span class="badge badge-info">Pending</span>
            @elseif($model->status==1)
                <span class="badge badge-primary">Confirmed</span>
            @elseif($model->status==3)
                <span class="badge badge-primary">Cancelled</span>
            @endif
        </td>
        <td><span class="badge badge-info">{{ date('d, F-y H:i A', strtotime($model->created_at)) }}</span></td>
        <td>
            @if($model->status==0)
                <button class="btn btn-warning btn-xs booking-status-btn" data-booking-status="{{ $model->status }}"><i class="fa fa-tasks"></i> Status</button>
            @endif
            <a href="{{ route('booking.show', $model->booking_number) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>
            <a href="{{ route('booking.invoice', $model->booking_number) }}" style="margin-top:5px" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> Invoice</a>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="11">
        Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
        <div class="d-flex justify-content-center">
            {!! $models->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>