<div>
    <div class="row flex-column-reverse flex-md-row">
        <div class="col-md-8">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="{{ route('user.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <div class="col-12" style="display:flex;">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <figure class="me-4 flex-shrink-0">
                                            <img id="avatar-preview" width="150" class="" src="{{ asset('image-before-upload.png') }}" alt="Preview Avatar">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-4">
                                        <div class="flex-fill" >
                                            <h5 class="mb-3">Add Avatar</h5>
                                            <input type="file" style="width:150px;" class="btn btn-primary form-control @error('image') is-invalid @enderror" name="image" id="avatar-input">
                                            <button class="btn btn-outline-danger btn-icon" data-bs-toggle="tooltip" title="Remove Avatar" id="remove-avatar">
                                                <i class="bi bi-trash me-0"></i>
                                            </button>
                                            <p class="small text-muted mt-3">For best results, use an image at least
                                                256px by 256px in either .jpg or .png format</p>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Basic Information</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span style="color: red">*</span></label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="" name="name" placeholder="insert name">
                                                @error('name')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                        
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email <span style="color: red">*</span></label>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" value="" name="email" placeholder="insert your email">
                                                @error('email')
                                                    <span class="invalid-feedback">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Date of Birth </label>
                                                <div class="d-flex gap-3">
                                                    <select class="form-select"  name="daybirth">
                                                        <option selected="">Day</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                    </select>
                                                    <select class="form-select"  name="monthbirth">
                                                        <option selected="">Month</option>
                                                        <option value="1" >Jan</option>
                                                        <option value="2">Feb</option>
                                                        <option value="3">Mar</option>
                                                        <option value="4">Apr</option>
                                                        <option value="5">May</option>
                                                        <option value="6">Jun</option>
                                                        <option value="7">Jul</option>
                                                        <option value="8">Aug</option>
                                                        <option value="9">Sep</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>
                                                    </select>
                                                    <select class="form-select"  name="yearbirth">
                                                        <option selected="">Year</option>
                                                        <option name="2024">2024</option>
                                                        <option name="2023">2023</option>
                                                        <option name="2022">2022</option>
                                                        <option name="2021">2021</option>
                                                        <option name="2020">2020</option>
                                                        <option name="2019">2019</option>
                                                        <option name="2018">2018</option>
                                                        <option name="2017">2017</option>
                                                        <option name="2016">2016</option>
                                                        <option name="2015">2015</option>
                                                        <option name="2014">2014</option>
                                                        <option name="2013">2013</option>
                                                        <option name="2012">2012</option>
                                                        <option name="2011">2011</option>
                                                        <option name="2010">2010</option>
                                                        <option name="2009">2009</option>
                                                        <option name="2008">2008</option>
                                                        <option name="2007">2007</option>
                                                        <option name="2006">2006</option>
                                                        <option name="2005">2005</option>
                                                        <option name="2004">2004</option>
                                                        <option name="2003">2003</option>
                                                        <option name="2002">2002</option>
                                                        <option name="2001">2001</option>
                                                        <option name="2000">2000</option>
                                                        <option name="1999">1999</option>
                                                        <option name="1998">1998</option>
                                                        <option name="1997">1997</option>
                                                        <option name="1996">1996</option>
                                                        <option name="1995">1995</option>
                                                        <option name="1994">1994</option>
                                                        <option name="1993">1993</option>
                                                        <option name="1992">1992</option>
                                                        <option name="1991">1991</option>
                                                        <option name="1990">1990</option>
                                                        <option name="1989">1989</option>
                                                        <option name="">1988</option>
                                                        <option name="">1987</option>
                                                        <option name="">1986</option>
                                                        <option name="">1985</option>
                                                        <option name="">1984</option>
                                                        <option name="">1983</option>
                                                        <option name="">1982</option>
                                                        <option name="">1981</option>
                                                        <option name="">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Gender</label>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="inlineRadio1" name="gender" value="male"
                                                            class="form-check-input ">
                                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="inlineRadio2"  name="gender" value="female"
                                                            class="form-check-input ">
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">Female</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="inlineRadio3" name="gender" value="other"
                                                            class="form-check-input ">
                                                        <label class="form-check-label" for="inlineRadio3">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Role</label>
                                                <select class="form-select " name="role">
                                                    <option value="" selected>All</option>
                                                    <option value="1">Superadmin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">Manager</option>
                                                    <option value="4" >Supervisor</option>
                                                    <option value="5" >User</option>
                                                    <option value="6" >Visitor</option>
                                                    <option value="7" >Buyer</option>
                                                    <option value="8" >Customer</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label ">Status</label>
                                                <select class="form-select " name="status_id">
                                                    <option value="" selected>All</option>
                                                    <option value="1" >Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Department</label>
                                                <select class="form-select " name="department">
                                                    <option value="" selected>All</option>
                                                    <option value="">Sales</option>
                                                    <option value="" >Development</option>
                                                    <option value="">Management</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Section</label>
                                                <select class="form-select " name="section">
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
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" value="" name="phone" placeholder="+62 8123456789">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control" value="" name="website" placeholder="https://mywebsite/">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Languages</label>
                                            <input type="text" class="form-control" value="" name="language" placeholder="english">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Address Line 1 <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control @error('address1') is-invalid @enderror" value="" name="address1" placeholder="Jakarta Street no 194">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Address Line 2</label>
                                            <input type="text" class="form-control" value="" name="address2" placeholder="Jakarta Street no 0934">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Post Code</label>
                                            <input type="text" class="form-control" value="" name="post_code" placeholder="101013">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" value="" name="city" placeholder="Jakarta">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" value="" name="state" placeholder="jakarta pusat">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control" value="" name="country" placeholder="indonesia">
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
                                                <input type="text" class="form-control"
                                                    value="" name="social_x" placeholder="https://twitter.com/">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Facebook</label>
                                                <input type="text" class="form-control"
                                                    value="" name="social_fb" placeholder="https://web.facebook.com/">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Instagram</label>
                                                <input type="text" class="form-control"
                                                    value="" name="social_ig" placeholder="https://www.instagram.com/">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">GitHub</label>
                                                <input type="text" class="form-control"
                                                    value="" name="social_github" placeholder="https://github.com/">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <button type="submit">Submit</button>
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
                                                <img src="../images/svg/logo-integration-slack.svg"
                                                     alt="...">
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
                                                <img src="../images/svg/logo-integration-drive.svg"
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
                                                <img src="../images/svg/logo-integration-dropbox.svg"
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


    
    <script>
        document.getElementById('avatar-input').addEventListener('change', function(e) {
    var reader = new FileReader();
    reader.onload = function(e) {
        var img = document.getElementById('avatar-preview');
        img.src = e.target.result;
        img.style.transform = 'scaleX(-1)'; // Flip the image horizontally
    };
    reader.readAsDataURL(this.files[0]);
});

document.getElementById('remove-avatar').addEventListener('click', function() {
    var img = document.getElementById('avatar-preview');
    img.src = "{{ asset('path_to_default_avatar_image') }}"; // Reset image to default
    img.style.transform = 'none'; // Reset transformation
    document.getElementById('avatar-input').value = null; // Clear file input value
});

    </script>

</div>