<h2>Create Profile</h2>

{{Form::model($profile, ['route' => ['profile.update', $profile->id]])}}
<div>
    <label for="First Name">First Name</label>
    {{Form::text('firstname', null)}}
</div>
<div>
    <label for="Last Name">Last Name</label>
    {{Form::text('lastname', null)}}
</div>
<div>
    <label for="Phone">Phone Number</label>
    {{Form::text('phone', null)}}
</div>
<div>
    {{Form::submit('Update Profile')}}
</div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
