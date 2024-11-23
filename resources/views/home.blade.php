<x-layouts.app>
    <x-slot:pageTitle>Home</x-slot>

    <x-slot:heroSectionItems>
        <div class="container">
            <div class="hero-section-txt">
                <h2>get your desired car in resonable price</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua.
                </p>
                <button class="welcome-btn" onclick="window.location.href='/contact-us'">contact us</button>
            </div>
        </div>
    </x-slot:heroSectionItems>

    <div id="our-services" class="mb-5">
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

    <div id="new-cars" class="mb-5">
        <x-sections.new-cars.section-container itemsCount={{ array_count($newCars) }}>
            @foreach ($newCars as $i => $newCar)
                <x-sections.new-cars.section-item :idx="$i" href="{{ '/car/' . $newCar['id'] }}"
                    :carName="$newCar['name']" :carModel="$newCar['model']" :carImagePath="$newCar['image_path']">
                    {{ $newCar['description'] ?? '' }}
                </x-sections.new-cars.section-item>
            @endforeach
        </x-sections.new-cars.section-container>
    </div>

    <div id="featured-cars" class="bg-light mt-5">
        <x-sections.featured-cars.section-container>
            @foreach ($featuredCars as $featuredCar)
                <x-sections.featured-cars.section-item href="{{ '/car/' . $newCar['id'] }}" :carName="$featuredCar['name']"
                    :carModel="$featuredCar['model']" :carTransmissionType="$featuredCar['transmission_type']" :carImagePath="$featuredCar['image_path']" :carPrice="$featuredCar['price']">
                    {{ $featuredCar['description'] ?? '' }}
                </x-sections.featured-cars.section-item>
            @endforeach
        </x-sections.featured-cars.section-container>
    </div>

    <section id="brand" class="brand">
        <x-sections.brands.section-container>
            <div class="item">
                <a href="#">
                    <img src="/vendor/carvilla-v1.0/assets/images/brand/br1.png" alt="brand-image" />
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="/vendor/carvilla-v1.0/assets/images/brand/br2.png" alt="brand-image" />
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="/vendor/carvilla-v1.0/assets/images/brand/br3.png" alt="brand-image" />
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="/vendor/carvilla-v1.0/assets/images/brand/br4.png" alt="brand-image" />
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="/vendor/carvilla-v1.0/assets/images/brand/br5.png" alt="brand-image" />
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="/vendor/carvilla-v1.0/assets/images/brand/br6.png" alt="brand-image" />
                </a>
            </div>
        </x-sections.brands.section-container>
    </section>
</x-layouts.app>
