@foreach($mass_shipping as $key=>$mass)
    <tr id="id-{{ $mass->id }}">
        <td>{{ $mass_shipping->firstItem()+$key }}.</td>

        <td>{{$mass->B_L_no}}</td>
        <td>{!! \Illuminate\Support\Str::limit($mass->shipper,50) !!}</td>
        <td>{!! \Illuminate\Support\Str::limit($mass->consignee,50) !!}</td>
        <td>
            @if($mass->status)
                <span class="label label-success">Active</span>
            @else
                <span class="label label-danger">In-Active</span>
            @endif
        </td>
        <td>
            <a href="{{ route('mass.show', $mass->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>

            @can('mass-edit')
                <a href="{{route('mass.edit', $mass->id)}}" data-toggle="tooltip" data-placement="top" title="Edit mass shipping" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('mass-delete')
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $mass->id }}" data-del-url="{{ url('mass', $mass->id) }}"><i class="fa fa-trash"></i> Delete</button>
            @endcan
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        <div class="d-flex justify-content-center">
            {!! $mass_shipping->links('pagination::bootstrap-4') !!}
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
