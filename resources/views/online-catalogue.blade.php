<x-layouts.app-layout>
    <x-slot:pageTitle>Online Catalogue</x-slot>

    <x-slot:heroSection>
        <section id="online-catalogue-hero-section">
            <div class="container py-2 py-md-4 py-lg-5">
                {{-- TODO: Need to add some pretty content here --}}
            </div>
        </section>
    </x-slot:heroSection>

    <div id="online-catalogue" class="container py-2 py-lg-5 fade-in-x">
        {{ $products->links('pagination.bootstrap-5') }}
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top"
                            alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/offer-details/{{ $product['id'] }}" class="text-decoration-none">
                                    {{ $product['name'] }}
                                </a>
                            </h5>
                            <p class="card-text mb-1">
                                <strong>Brand:</strong> {{ $product['car_brand_name'] }}
                            </p>
                            <p class="card-text mb-1">
                                <strong>Transmission Type:</strong> {{ $product['car_transmission_type_name'] }}
                            </p>
                            <p class="card-text mb-1">
                                <strong>Engine Type:</strong> {{ $product['car_engine_type_name'] }}
                            </p>
                            <p class="card-text mb-1">
                                <strong>Color:</strong> {{ $product['car_color_name'] }}
                            </p>
                            <p class="card-text mb-1">
                                <strong>Price:</strong> ${{ number_format($product['price'], 2) }}
                            </p>
                            <p class="card-text mb-1">
                                {{ $product['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $products->links('pagination.bootstrap-5') }}
    </div>
</x-layouts.app-layout>
