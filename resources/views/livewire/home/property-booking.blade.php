<main class="main">
    <section class="section shop-product background--brown">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="dual-slider">
                        <div class="main-slider__img text-center">
                            <img style="border-radius: 50%; height:300px; width:300px" class="img--contain"
                                 src="{{ asset('storage/' . $property->cover_image) }}"
                                 alt="{{ $property->title }}" />
                        </div>
                    </div>

                    @if ($property->images->count())
                        <div class="mt-4">
                            <h4>More Property Images</h4>
                            <div class="row">
                                @foreach ($property->images as $image)
                                    <div class="col-6 col-md-4 mb-3">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid rounded border" alt="Property Image">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="shop-product__top">
                        <h3 class="shop-product__name">{{ $property->title }}</h3>
                        <p><strong>Description:</strong> {{ $property->description }}</p>

                        <ul class="shop-product__list">
                            <li><span class="text-secondary">Amount:</span> ₦{{ number_format($property->price) }}</li>
                            <li><span class="text-secondary">Type:</span> {{ $property->type }}</li>
                            <li><span class="text-secondary">Status:</span> {{ $property->status }}</li>
                        </ul>

                        <span class="shop-product__price">
                            <small class="text-dark fz-10">Price:</small>
                            ₦{{ number_format($property->price, 2) }}
                        </span>

                        <div class="shop-product__tags mt-3">
                            <div class="tags">
                                <a class="tags__item" href="#">Seller Phone: {{ $property->user->phone_number }}</a>
                                <a class="tags__item" href="#">Seller Name: {{ $property->user->name }}</a>
                                <a class="tags__item" href="#">
                                    <i class="fas fa-star text-warning"></i> Premium Star
                                </a>
                            </div>
                        </div>

                        <div class="form__wrapper mt-4">
                            <div class="form__count">
                                <a href="#booking" class="form__submit btn btn-dark">
                                    <span>Request Booking <i class="fa fa-arrow-down"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" id="booking">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" class="form checkout-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input wire:model="full_name" required class="form__field" type="text" placeholder="Full Name *" />
                                @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-6">
                                <input wire:model="email" required class="form__field" type="email" placeholder="Email *" />
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-6 mt-3">
                                <input wire:model="phone_number" required class="form__field" type="text" placeholder="Phone Number *" />
                                @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-12 mt-3">
                                <textarea wire:model="message" required class="form__field" rows="4" placeholder="Your message..."></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="form__submit btn btn-primary w-100">
                                    Submit Booking Request
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</main>
