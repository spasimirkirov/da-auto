<section>
    <header>
        <h6 class="fs-4"> Profile Information </h6>
        <p class="text-muted"> Update your account's profile information and email address. </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input name="name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Email address</label>
            <input name="email" type="email" class="form-control" placeholder="Enter Email">
        </div>

        <div class="mb-3">
            <button class="btn btn btn-outline-primary" type="submit">Save</button>
        </div>
    </form>
</section>
