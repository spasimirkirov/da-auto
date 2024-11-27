<x-layouts.app-layout>
    <x-slot:pageTitle>Home</x-slot>

    <x-slot:heroSection>
        <section id="home-hero-section" class="hero-section py-2 py-lg-5">
            <div class="container fade-in-y">
                <div class="card hero-section-card p-5">
                    <div class="d-flex flex-column gap-2">
                        <h1 class="text-center">Get your desired car in resonable price</h1>
                        <p class="text-center fs-6 fw-bold">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et dolore magna aliqua.</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary fw-bold" onclick="window.location.href='/contact-us'">Contact
                            Us</button>
                    </div>
                </div>
            </div>
        </section>
    </x-slot:heroSection>

    <div id="our-services" class="py-2 py-lg-5  fade-in-y">
        <x-sections.our-services.section-container>
            <x-sections.our-services.section-item title="Largest Dealership of Car">
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
            </x-sections.our-services.section-item>

            <x-sections.our-services.section-item title="Unlimited repair warranty">
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
            </x-sections.our-services.section-item>

            <x-sections.our-services.section-item title="Insurence support">
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
            </x-sections.our-services.section-item>
        </x-sections.our-services.section-container>
    </div>

    <div id="new-cars" class="bg-dark py-2 py-lg-5 fade-in-y">
        <x-sections.new-cars.section-container :itemsCount="count($newCars)">
            <x-slot:title>
                <h2 class="text-light">New Cars</h2>
            </x-slot>
            @foreach ($newCars as $i => $newCar)
                <x-sections.new-cars.section-item :idx="$i" href="{{ '/car/' . $newCar['id'] }}"
                    :carName="$newCar['name']" :carModel="$newCar['model']" :carImagePath="$newCar['image_path']">
                    <h2><a href="{{ $newCar['description'] }}" class="text-light">{{ $newCar['name'] }}</a></h2>
                    <p class="text-light">{{ $newCar['description'] ?? '' }}</p>
                </x-sections.new-cars.section-item>
            @endforeach
        </x-sections.new-cars.section-container>
    </div>

    <div id="featured-cars" class="py-2 py-lg-5 fade-in-y">
        <x-sections.featured-cars.section-container>
            @foreach ($featuredCars as $featuredCar)
                <x-sections.featured-cars.section-item href="{{ '/car/' . $newCar['id'] }}" :carName="$featuredCar['name']"
                    :carModel="$featuredCar['model']" :carTransmissionType="$featuredCar['transmission_type']" :carImagePath="$featuredCar['image_path']" :carPrice="$featuredCar['price']">
                    {{ $featuredCar['description'] ?? '' }}
                </x-sections.featured-cars.section-item>
            @endforeach
        </x-sections.featured-cars.section-container>
    </div>

    <section id="brand" class="py-2 py-lg-5  fade-in-y">
        <x-sections.brands.section-container>
            <div class="carousel-item active">
                <div class="d-flex gap-5">
                    <a href="/car-brand/1">
                        <img src="/vendor/carvilla-v1.0/assets/images/brand/br4.png" alt="brand-image" />
                    </a>
                    <a href="/car-brand/2">
                        <img src="/vendor/carvilla-v1.0/assets/images/brand/br5.png" alt="brand-image" />
                    </a>
                    <a href="/car-brand/3">
                        <img src="/vendor/carvilla-v1.0/assets/images/brand/br6.png" alt="brand-image" />
                    </a>
                    <a href="/car-brand/4">
                        <img src="/vendor/carvilla-v1.0/assets/images/brand/br1.png" alt="brand-image" />
                    </a>
                    <a href="/car-brand/5">
                        <img src="/vendor/carvilla-v1.0/assets/images/brand/br2.png" alt="brand-image" />
                    </a>
                    <a href="/car-brand/6">
                        <img src="/vendor/carvilla-v1.0/assets/images/brand/br3.png" alt="brand-image" />
                    </a>
                </div>
            </div>
        </x-sections.brands.section-container>
    </section>
</x-layouts.app-layout>
