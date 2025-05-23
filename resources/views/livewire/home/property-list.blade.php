<div>
   <main class="main">
      <!-- Banner -->
      <section class="promo-primary">
         <picture>
            <source srcset="{{ asset('assets/img/ban121.jpg') }}" media="(min-width: 992px)" />
            <img class="img--bg" src="{{ asset('assets/img/ban121.jpg') }}" alt="Top Celebrities Banner" />
         </picture>
         <div class="promo-primary__description"><span>Property</span></div>
         <div class="container">
            <div class="row">
               <div class="col-auto">
                  <div class="align-container">
                     <div class="align-container__item">
                        <span class="promo-primary__pre-title">-¬-</span>
                        <h1 class="promo-primary__title">
                           <span>Top</span><span>Stars</span>
                        </h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Team -->
      <section class="section team">
         <div class="container">
            <div class="row mx-auto align-items-center mb-4">
               <div class="col-lg-5">
                  <div class="heading heading--primary">
                     <h2 class="heading__title no-margin-bottom">
                        <span>Meet</span><span>Top Celebrities</span>
                     </h2>
                  </div>
               </div>
               <div class="col-lg-7 col-sm-12">
                  <div class="accordion accordion--primary">
                     <div class="accordion__title-block form__wrapper">
                        {{-- <form wire:submit.prevent="searchCelebrities">
                           <div class="row g-2">
                              <div class="col-10">
                                 <input
                                    wire:model="search"
                                    class="form__field search-box w-100"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Search a Celebrity by Name"
                                 />
                              </div>
                              <div class="col-2">
                                 <button class="form__submit w-100" type="submit">
                                    <svg class="icon"><use xlink:href="#bag"></use></svg>
                                    <span>Search</span>
                                 </button>
                              </div>
                           </div>
                        </form> --}}
                     </div>
                  </div>
               </div>
            </div>

            <!-- Celebrity Grid -->
            <div class="row g-4 mb-5">
               @forelse($properties as $celeb)
                  <div class="col-sm-6 col-lg-4 col-xl-3">
                     <div class="causes-item causes-item--primary shadow p-3 h-100">
                        <div class="causes-item__body text-center">
                           <h6 class="mb-2">
                              <a href="{{ url('home/property-booking/' . $celeb->id) }}">{{ $celeb->title }}</a><br>
                              <small>{{ $celeb->description }}</small>
                           </h6>
                           <div class="causes-item__img mb-2">
                              <img
                                 class="img--bg rounded"
                                 style="object-fit: cover; height: 200px; width: 100%;"
                                 src="{{ asset('storage/' . $celeb->cover_image) }}"
                                 alt="{{ $celeb->title }}"
                              />
                           </div>
                           <a class="button causes-item__button button--primary"
                              href="{{ url('home/property-booking/' . $celeb->id) }}">
                              Book {{ strtok($celeb->title, ' ') }}
                           </a>
                        </div>
                     </div>
                  </div>
               @empty
                  <div class="col-12 text-center text-muted">
                     No celebrities found.
                  </div>
               @endforelse
            </div>

            <!-- Load More Button -->
            <div class="row">
               <div class="col-12 text-center">
                  <a class="button button--primary" href="#">
                     Load More
                  </a>
               </div>
            </div>
         </div>
      </section>
   </main>
</div>
