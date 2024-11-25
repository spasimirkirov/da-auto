<header>
    <h6 class="fs-4"> Update Password </h6>
    <p class="text-muted"> Ensure your account is using a long, random password to stay secure </p>
</header>

<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')

    <div class="mb-3">
        <label class="form-label" for="password">Current Password</label>
        <input name="current_password" type="password" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label" for="password">New Password</label>
        <input name="password" type="password" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label" for="password">Confirm Password</label>
        <input name="password_confirmation" type="password" class="form-control">
    </div>

    <div class="flex items-center gap-4">
        <button class="btn btn-success" type="submit">Save</button>
    </div>
</form>
