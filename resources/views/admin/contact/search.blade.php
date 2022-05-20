@foreach($contacts as $key=>$contact)
    <tr id="id-{{ $contact->id }}">
        <td>{{ $contacts->firstItem()+$key }}.</td>
        <td>{{$contact->name}}</td>
        <td>{!!\Illuminate\Support\Str::limit($contact->description,30)!!}</td>
        <td>{{$contact->address}}</td>
        <td>
            @if($contact->status)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td width="250px">
            <a href="{{route('contact.edit', $contact->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit contact" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
            <button class="btn btn-danger btn-xs delete" data-slug="{{ $contact->slug }}" data-del-url="{{ url('contact', $contact->slug) }}"><i class="fa fa-trash"></i> Delete</button>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="6">
        Displying {{$contacts->firstItem()}} to {{$contacts->lastItem()}} of {{$contacts->total()}} records
        <div class="d-flex justify-content-center">
            {!! $contacts->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>