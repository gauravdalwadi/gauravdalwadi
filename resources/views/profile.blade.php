@extends('layouts.admin')

@push('head-scripts')
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded"
                            style="height: 140px; background-color: rgb(233, 236, 239);">
                            <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="text-primary mb-0 pt-sm-2 pb-1 mb-0 text-nowrap text-capitalize">{{ $userData->first_name }} {{ $userData->last_name }}</h4>
                        <p class="mb-0">@johnny.s</p>
                        <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                        <div class="mt-2">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-fw fa-camera"></i>
                                <span>Change Photo</span>
                            </button>
                        </div>
                    </div>
                    <div class="text-center text-sm-right">
                        <span class="badge badge-secondary">administrator</span>
                        <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a href="#info" data-toggle="tab" class="active nav-link">Info</a></li>
                <li class="nav-item"><a href="#professional" data-toggle="tab" class=" nav-link">Professional Info</a></li>
                <li class="nav-item"><a href="#social" data-toggle="tab" class=" nav-link">Social</a></li>
                <li class="nav-item"><a href="#security" data-toggle="tab" class=" nav-link">Security</a></li>
            </ul>
            <div class="tab-content tabcontent-border pt-3">
                <div class="tab-pane active show" id="info" role="tabpanel">
                    <form class="form" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="John Smith"
                                        value="John Smith">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="username" placeholder="johnny.s"
                                        value="johnny.s">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" placeholder="user@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Birthdate</label>
                                    <input class="form-control" type="date" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label>About</label>
                                    <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Save
                                    Changes</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="tab-pane" id="professional" role="tabpanel">
                    <form class="form" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input class="form-control" type="text" name="name" placeholder="John Smith"
                                        value="John Smith">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Freelance</label>
                                    <input class="form-control" type="text" name="username" placeholder="johnny.s"
                                        value="johnny.s">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">```````
                                <div class="form-group">
                                    <label>Professional Email</label>
                                    <input class="form-control" type="email" name="name" placeholder="John Smith"
                                        value="John Smith">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Freelance</label>
                                    <input class="form-control" type="text" name="username" placeholder="johnny.s"
                                        value="johnny.s">
                                </div>
                            </div> --}}
                        </div>


                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Save
                                    Changes</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="tab-pane" id="social" role="tabpanel">
                    <form class="form" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input class="form-control" type="text" name="name" placeholder="John Smith"
                                        value="John Smith">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input class="form-control" type="text" name="username" placeholder="johnny.s"
                                        value="johnny.s">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input class="form-control" type="text" placeholder="user@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>LinkedIn</label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Save
                                    Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="security" role="tabpanel">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="mb-2"><b>Change Password</b></div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input class="form-control" type="password" placeholder="••••••">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input class="form-control" type="password" placeholder="••••••">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                        <input class="form-control" type="password" placeholder="••••••">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                            <div class="mb-2"><b>Keeping in Touch</b></div>
                            <div class="row">
                                <div class="col">
                                    <label>Email Notifications</label>
                                    <div class="custom-controls-stacked px-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="notifications-blog"
                                                checked="">
                                            <label class="custom-control-label" for="notifications-blog">Blog
                                                posts</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="notifications-news"
                                                checked="">
                                            <label class="custom-control-label"
                                                for="notifications-news">Newsletter</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="notifications-offers"
                                                checked="">
                                            <label class="custom-control-label" for="notifications-offers">Personal
                                                Offers</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Save
                                Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('body-scripts')
    <script type="text/javascript"></script>
@endpush
