<x-layouts.app>
    <x-slot:pageTitle>Contact US</x-slot>

    <x-slot:heroSectionItems>
        <div class="container mt-10">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>We’d Love to Hear From You</h4>
                            <p>At {{ config('app.name') }}, your feedback, questions, and inquiries are our top
                                priority.
                                Whether you’re looking for more information about our services, need assistance, or just
                                want to
                                say hello, we’re here for you. </p>
                        </div>

                        <form action="/contact-us" method="POST">
                            <div class="form-group mt-2">
                                <label for="name">Your Name</label>
                                <input class="form-control" id="name" placeholder="Your Name">
                                <small id="emailHelp" class="form-text text-muted">So we can know how to address you in
                                    our response.</small>
                            </div>
                            <div class="form-group mt-2">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group mt-2">
                                <label for="question">Example textarea</label>
                                <textarea class="form-control" id="question" rows="3"></textarea>
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:heroSectionItems>

</x-layouts.app>
