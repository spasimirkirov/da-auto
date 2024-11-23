<x-layouts.app>
    <x-slot:pageTitle>Contact US</x-slot>

    <x-slot:heroSection>
        <div class="card hero-section-card p-5">
            <div class="d-flex flex-column gap-2">
                <h1 class="text-center text-light">We’d Love to Hear From You</h1>
                <p class="text-center">
                    At {{ config('app.name') }}, your feedback, questions, and inquiries are our top priority.
                    Whether you’re looking for more information about our services, need assistance, or just want to say
                    hello, we’re here for you.</p>
            </div>

            <div class="card-body">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="text-light">Contact Us</h4>
                    </div>

                    <form action="/contact-us" method="POST">
                        <div class="form-group mt-2">
                            <label for="name" class="text-light">Your Name</label>
                            <input class="form-control" id="name" placeholder="Your Name">
                            <small id="emailHelp" class="form-text text-light">So we can know how to address you in
                                our response.</small>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email" class="text-light">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group mt-2">
                            <label for="question" class="text-light">Question</label>
                            <textarea class="form-control" id="question" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot:heroSection>
</x-layouts.app>
