@foreach($paragon_logistics as $key=>$paragon_logistic)
    <tr id="id-{{ $paragon_logistic->id }}">
        <td>{{ $paragon_logistics->firstItem()+$key }}.</td>

        <td>{{$paragon_logistic->B_L_no}}</td>
        <td>{!! \Illuminate\Support\Str::limit($paragon_logistic->shipper,50) !!}</td>
        <td>{!! \Illuminate\Support\Str::limit($paragon_logistic->consignee,50) !!}</td>
        {{-- <td>{{$paragon_logistic->shipper}}</td>
        <td>{{$paragon_logistic->consignee}}</td> --}}
        <td>
            @if($paragon_logistic->status)
                <span class="label label-success">Active</span>
            @else
                <span class="label label-danger">In-Active</span>
            @endif
        </td>
        <td>
            <a href="{{ route('paragon.show', $paragon_logistic->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>
        {{-- </td>
        <td> --}}
            @can('paragon-edit')
                <a href="{{route('paragon.edit', $paragon_logistic->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Paragon Logistics" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('paragon-delete')
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $paragon_logistic->id }}" data-del-url="{{ url('paragon', $paragon_logistic->id) }}"><i class="fa fa-trash"></i> Delete</button>
            @endcan
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        <div class="d-flex justify-content-center">
            {!! $paragon_logistics->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>
<script>
    //delete record
 $('.delete').on('click', function(){
     var slug = $(this).attr('data-slug');
     var delete_url = $(this).attr('data-del-url');
     Swal.fire({
         title: 'Are you sure?',
         text: "You won't be able to revert this!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
         if (result.isConfirmed) {
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
             $.ajax({
                 url : delete_url,
                 type : 'DELETE',
                 success : function(response){
                     if(response){
                         $('#id-'+slug).hide();
                         Swal.fire(
                             'Deleted!',
                             'Your file has been deleted.',
                             'success'
                         )
                     }else{
                         Swal.fire(
                             'Not Deleted!',
                             'Sorry! Something went wrong.',
                             'danger'
                         )
                     }
                 }
             });
         }
     })
 });
 </script>
