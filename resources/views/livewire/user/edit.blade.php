<div>
    <div class="row flex-column-reverse flex-md-row">
        <div class="col-md-8">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {{-- <form  wire:submit.prevent="update"  enctype="multipart/form-data"> --}}
                    <form action="{{ route('user.update', $users->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                        <div class="mb-4">
                            <div class="d-flex flex-column flex-md-row text-center text-md-start mb-3">
                                <figure class="me-4 flex-shrink-0">
                                    <?php
                                    // Check if a new image is uploaded (replace with your actual logic)
                                    if (isset($request->image) && $request->hasFile('image')) {
                                        $newImagePath = null;
                                    } else {
                                        $newImagePath = $users->image; // Use existing image path if no new upload
                                    }
                                
                                    if ($newImagePath) {
                                        $newImage = str_replace("public/users", "", $newImagePath);
                                    }
                                    ?>
                                    @if($newImagePath)
                                        <img src="{{ asset('storage/users'.$newImage) }}" alt="{{ $users->image }}" width="100" class="rounded-pill">
                                    @endif
                                </figure>
                                
                                <div class="flex-fill">
                                    <h5 class="mb-3">Add Avatar</h5>
                                    <input type="file" class="btn btn-primary form-control @error('image') is-invalid @enderror" name="image" >
                                    @error('image')
                                        <span class="invalid-feedback">
                                                {{ $message }}
                                        </span>
                                    @enderror
            
                                    <a class="btn btn-outline-danger btn-icon" data-bs-toggle="tooltip" title="Remove Avatar">
                                        <i class="bi bi-trash me-0"></i>
                                    </a>
                                    <p class="small text-muted mt-3">For best results, use an image at least
                                        256px by 256px in either .jpg or .png format</p>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Basic Information</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span style="color: red">*</span></label>
                                                <input type="text" wire:model="name"  value="{{ old('name', $users->name) }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="insert name">
                                                @error('name')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                        
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email <span style="color: red">*</span></label>
                                                <input type="text" wire:model="email" value="{{ old('email', $users->email) }}" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="insert your email">
                                                @error('email')
                                                    <span class="invalid-feedback">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Date of Birth</label>
                                                <div class="d-flex gap-3">
                                                    <select class="form-select" wire:model="daybirth" name="daybirth">
                                                        <option selected="">Day</option>
                                                        @for ($day = 1; $day <= 31; $day++)
                                                            <option {{ old('daybirth', date('d', strtotime($users->date_bird))) == $day ? 'selected' : '' }}>{{ $day }}</option>
                                                        @endfor
                                                    </select>
                                                    <select class="form-select" wire:model="monthbirth" name="monthbirth">
                                                        <option selected="">Month</option>
                                                        @for ($month = 1; $month <= 12; $month++)
                                                            <option value="{{ $month }}" {{ old('monthbirth', date('m', strtotime($users->date_bird))) == $month ? 'selected' : '' }}>
                                                                {{ date('M', mktime(0, 0, 0, $month, 1)) }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    <select class="form-select" wire:model="yearbirth" name="yearbirth">
                                                        <option selected="">Year</option>
                                                        @php
                                                            $currentYear = date('Y');
                                                            $startYear = $currentYear - 100; // Adjust this value to fit your desired range
                                                        @endphp
                                                        @for ($year = $currentYear; $year >= $startYear; $year--)
                                                            <option value="{{ $year }}" {{ old('yearbirth', date('Y', strtotime($users->date_bird))) == $year ? 'selected' : '' }}>
                                                                {{ $year }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label">Gender</label>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="inlineRadio1" wire:model="gender" value="male" name="gender" 
                                                            class="form-check-input" {{ old('gender', $users->gender) == 'male' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="inlineRadio2"  name="gender" value="female"
                                                            class="form-check-input" {{ old('gender', $users->gender) == 'female' ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">Female</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="inlineRadio3" name="gender" value="other"
                                                            class="form-check-input" {{ old('gender', $users->gender) == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="inlineRadio3">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Role</label>
                                                <select class="form-select" wire:model="role" name="role">
                                                    <option value="" {{ old('role', $users->role) == '' ? 'selected' : '' }}>All</option>
                                                    <option value="1" {{ old('role', $users->role) == 1 ? 'selected' : '' }}>Superadmin</option>
                                                    <option value="2" {{ old('role', $users->role) == 2 ? 'selected' : '' }}>Admin</option>
                                                    <option value="3" {{ old('role', $users->role) == 3 ? 'selected' : '' }}>Manager</option>
                                                    <option value="4" {{ old('role', $users->role) == 4 ? 'selected' : '' }}>Supervisor</option>
                                                    <option value="5" {{ old('role', $users->role) == 5 ? 'selected' : '' }}>User</option>
                                                    <option value="6" {{ old('role', $users->role) == 6 ? 'selected' : '' }}>Visitor</option>
                                                    <option value="7" {{ old('role', $users->role) == 7 ? 'selected' : '' }}>Buyer</option>
                                                    <option value="8" {{ old('role', $users->role) == 8 ? 'selected' : '' }}>Customer</option>
                                                </select>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="form-select" wire:model="status_id" name="status_id">
                                                    <option value="" {{ old('status', $users->status) == '' ? 'selected' : '' }}>All</option>
                                                    <option value="1" {{ old('status', $users->status) == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="2" {{ old('status', $users->status) == 2 ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label">Department</label>
                                                <select class="form-select "  wire:model="department" name="department">
                                                    <option value="" selected>All</option>
                                                    <option value="">Sales</option>
                                                    <option value="" >Development</option>
                                                    <option value="">Management</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Section</label>
                                                <select class="form-select " wire:model="section" name="section">
                                                    <option value="" selected>All</option>
                                                    <option value="">Sales</option>
                                                    <option value="" >Development</option>
                                                    <option value="">Management</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Contact</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone <span style="color: red">*</span></label>
                                            <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $users->phone) }}" name="phone" placeholder="+62 8123456789">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Website</label>
                                            <input wire:model="website" type="text" class="form-control" value="{{ old('website', $users->website) }}" name="website" placeholder="https://mywebsite/">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Languages</label>
                                            <input wire:model="language" type="text" class="form-control" value="{{ old('language', $users->language) }}" name="language" placeholder="english">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Address Line 1 <span style="color: red">*</span></label>
                                            <input wire:model="address1" type="text" class="form-control form-control @error('address1') is-invalid @enderror" value="{{ old('address1', $users->address1) }}" name="address1" placeholder="Jakarta Street no 194">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Address Line 2</label>
                                            <input type="text" wire:model="address2" class="form-control" value="{{ old('address2', $users->address2) }}" name="address2" placeholder="Jakarta Street no 0934">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Post Code</label>
                                            <input type="text" wire:model="post_code" class="form-control" value="{{ old('post_code', $users->post_code) }}" name="post_code" placeholder="101013">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" wire:model="city" class="form-control" value="{{ old('city', $users->city) }}" name="city" placeholder="Jakarta">
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" wire:model="state" class="form-control" value="{{ old('state', $users->state) }}" name="state" placeholder="jakarta pusat">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <input type="text" wire:model="country" class="form-control" value="{{ old('country', $users->country) }}" name="country" placeholder="indonesia">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Social</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Twitter / X</label>
                                                <input type="text" class="form-control" wire:model="social_x"
                                                value="{{ old('social_x', $users->social_x) }}" name="social_x" placeholder="https://twitter.com/">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Facebook</label>
                                                <input type="text" class="form-control" wire:model="social_fb"
                                                value="{{ old('social_fb', $users->social_fb) }}" name="social_fb" placeholder="https://web.facebook.com/">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Instagram</label>
                                                <input type="text" class="form-control" wire:model="social_ig"
                                                value="{{ old('social_ig', $users->social_ig) }}" name="social_ig" placeholder="https://www.instagram.com/">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">GitHub</label>
                                                <input type="text" class="form-control" wire:model="social_github"
                                                value="{{ old('social_github', $users->social_github) }}" name="social_github" placeholder="https://github.com/">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    </form>
                    </div>

                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Change Password</h6>
                            <div class="mb-3">
                                <label class="form-label">Old Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password Repeat</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notification-settings" role="tabpanel"
                     aria-labelledby="notification-settings-tab">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Notifications</h6>
                            <h6 class="mb-4">Activity Notifications</h6>
                            <div class="mb-5">
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs1">
                                        <label class="form-check-label" for="cs1">Someone assigns me to a task</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs2">
                                        <label class="form-check-label" for="cs2">Someone mentions me in a
                                            conversation</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs3">
                                        <label class="form-check-label" for="cs3">Someone adds me to a project</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="cs4">
                                        <label class="form-check-label" for="cs4">Activity on a project I am a member
                                            of</label>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mb-4">Service Notifications</h6>
                            <div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="cs5">
                                        <label class="form-check-label" for="cs5">Monthly newsletter</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" checked id="cs6">
                                        <label class="form-check-label" for="cs6">Major feature enhancements</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="cs7">
                                        <label class="form-check-label" for="cs7">Minor updates and bug fixes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="integrations" role="tabpanel" aria-labelledby="integrations-tab">
                    <div class="card widget">
                        <div class="card-header">
                            <h6 class="card-title">Integrations</h6>
                        </div>
                        <div class="card-body p-0 overflow-hidden">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item p-4">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0 me-3">
                                                {{-- <img src="../images/svg/
                                                -slack.svg"
                                                     alt="..."> --}}


                                                <?php
                                                    $newImage = str_replace("public/users", "", $users->image);
                                                ?>
                                                <img src="{{ asset('storage/users'.$newImage) }}" alt="{{ $users->image }}" width="150">
                                            </figure>
                                            <div>
                                                <h5 class="mb-1">Slack</h5>
                                                <small class="text-muted">Permissions: Read, Write, Comment</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-danger mt-3 mt-md-0">Disconnect</button>
                                    </div>
                                </div>
                                <div class="list-group-item p-4">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0 me-3">
                                                <img src="{{asset('frontend/cakeadmin/images/svg/
                                                -drive.svg')}}"
                                                     alt="...">
                                            </figure>
                                            <div>
                                                <h5 class="mb-1">Google Drive</h5>
                                                <small class="text-muted">Permissions: Read, Write</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-success mt-3 mt-md-0">Connect</button>
                                    </div>
                                </div>
                                <div class="list-group-item p-4">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0 me-3">
                                                <img src="{{asset('frontend/cakeadmin/images/svg/logo-integration-dropbox.svg')}}"
                                                     alt="...">
                                            </figure>
                                            <div>
                                                <h5 class="mb-1">Dropbox</h5>
                                                <small class="text-muted">Permissions: Read, Write, Upload</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-danger mt-3 mt-md-0">Disconnect</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card sticky-top mb-4 mb-md-0">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="true">
                                <i class="bi bi-person me-2"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password" role="tab"
                               aria-controls="password" aria-selected="false">
                                <i class="bi bi-lock me-2"></i> Password
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="notification-settings-tab" data-bs-toggle="tab" href="#notification-settings"
                               role="tab"
                               aria-controls="notification-settings" aria-selected="false">
                                <i class="bi bi-bell me-2"></i> Notifications
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="integrations-tab" data-bs-toggle="tab" href="#integrations" role="tab"
                               aria-controls="integrations" aria-selected="false">
                                <i class="bi bi-arrow-down-up me-2"></i> Integrations
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
</div>