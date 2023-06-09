@foreach($sixStars as $key=>$sixStar)
    <tr id="id-{{ $sixStar->id }}">
        <td>{{ $sixStars->firstItem()+$key }}.</td>

        <td>{{$sixStar->num_of_BL}}</td>
        <td>{!! \Illuminate\Support\Str::limit($sixStar->shipper,50) !!}</td>
        <td>{!! \Illuminate\Support\Str::limit($sixStar->consignee,50) !!}</td>
        <td>
            @if($sixStar->status)
                <span class="label label-success">Active</span>
            @else
                <span class="label label-danger">In-Active</span>
            @endif
        </td>
        <td>
            <a href="{{ route('six_star.show', $sixStar->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>

            @can('six_star-edit')
                <a href="{{route('six_star.edit', $sixStar->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Six Star Logistics" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('six_star-delete')
                <button class="btn btn-danger btn-xs delete" data-slug="{{ $sixStar->id }}" data-del-url="{{ url('six_star', $sixStar->id) }}"><i class="fa fa-trash"></i> Delete</button>
            @endcan
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        <div class="d-flex justify-content-center">
            {!! $sixStars->links('pagination::bootstrap-4') !!}
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
