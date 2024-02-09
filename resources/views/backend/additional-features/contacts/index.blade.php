@extends('backend.master')

@section('title', 'Contacts')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Contacts</h3>
{{--                    <a href="{{ route('admin.faqs.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>--}}
                </div>
                <div class="card-body">
                   <div class="table-responsive export-table">
                       <table class="table" id="file-datatable">
                           <thead>
                           <th>#</th>
                           <th>Contact Type</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Mobile</th>
                           <th>Bike Motor Type</th>
                           <th>Message</th>
                           <th>Workshop Info</th>
                           <th>Workshop Outside Image</th>
                           <th>Workshop Inside Image</th>
                           <th>Workshop Selfie Image</th>
                           <th>Status</th>
{{--                           <th>Action</th>--}}
                           </thead>
                           <tbody>
                           @foreach($contacts as $contact)
                               <tr>
                                   <td>{{ $loop->iteration }}</td>
                                   <td>{{ $contact->contact_type }}</td>
                                   <td>{{ $contact->name }}</td>
                                   <td>{{ $contact->email }}</td>
                                   <td>{{ $contact->mobile }}</td>
                                   <td>{{ $contact->bike_motor_type_id }}</td>
                                   <td>{{ $contact->message }}</td>
                                   <td>{{ $contact->workshop_info }}</td>
                                   <td><img src="{{ asset(!empty($contact->workshop_outside_image) ? $contact->workshop_outside_image : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                   <td><img src="{{ asset(!empty($contact->workshop_inside_image) ? $contact->workshop_inside_image : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                   <td><img src="{{ asset(!empty($contact->workshop_selfie_image) ? $contact->workshop_selfie_image : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                   <td>{{ $contact->status == 1 ? 'Published' : 'Unpublished' }}</td>
{{--                                   <td class="d-flex">--}}
{{--                                       <a href="{{ route('admin.faqs.edit', $contact->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>--}}
{{--                                       <form action="{{ route('admin.faqs.destroy', $contact->id) }}" method="post">--}}
{{--                                           @csrf--}}
{{--                                           @method('delete')--}}
{{--                                           <button type="submit" class="btn btn-sm btn-danger ms-1 delete-item"><i class="fa fa-trash"></i></button>--}}
{{--                                       </form>--}}
{{--                                   </td>--}}
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
