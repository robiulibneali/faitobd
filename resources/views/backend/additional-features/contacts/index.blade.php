@extends('backend.master')

@section('title', 'Contacts')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Contacts</h3>
                    <ul class="nav nav-pills position-absolute me-5 mb-3" id="pills-tab" role="tablist" style="right: 0">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Regular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reseller</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="table-responsive export-table">
                                <table class="table" id="file-datatable">
                                    <thead>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Bike Motor Type</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        @if($contact->contact_type == 'regular')
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->mobile }}</td>
                                            <td>{{ $contact->bike_motor_type_id }}</td>
                                            <td>{{ $contact->message }}</td><td>{{ $contact->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="table-responsive export-table">
                                <table class="table" id="file-datatable">
                                    <thead>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Workshop Info</th>
                                    <th>Workshop Outside Image</th>
                                    <th>Workshop Inside Image</th>
                                    <th>Workshop Selfie Image</th>
                                    <th>Status</th>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                       @if($contact->contact_type == 'reseller')
                                           <tr>
                                               <td>{{ $loop->iteration }}</td>
                                               <td>{{ $contact->name }}</td>
                                               <td>{{ $contact->email }}</td>
                                               <td>{{ $contact->mobile }}</td>
                                               <td>{{ $contact->workshop_info }}</td>
                                               <td><img src="{{ asset(!empty($contact->workshop_outside_image) ? $contact->workshop_outside_image : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                               <td><img src="{{ asset(!empty($contact->workshop_inside_image) ? $contact->workshop_inside_image : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                               <td><img src="{{ asset(!empty($contact->workshop_selfie_image) ? $contact->workshop_selfie_image : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                               <td>{{ $contact->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                           </tr>
                                       @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
