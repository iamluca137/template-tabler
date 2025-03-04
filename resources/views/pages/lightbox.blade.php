@extends('layouts.app')

@section('contents')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Lightbox
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cols-3 row-cols-md-4 row-cols-lg-6 g-3">
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="{{ asset('assets/static/photos/brainstorming-session-with-creative-designers.jpg') }}">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/brainstorming-session-with-creative-designers.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/young-woman-working-in-a-cafe.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/everything-you-need-to-work-from-your-bed.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/group-of-people-sightseeing-in-the-city.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/color-palette-guide-sample-colors-catalog-.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/stylish-workplace-with-computer-at-home.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/pink-desk-in-the-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/coffee-on-a-table-with-other-items.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/young-entrepreneur-working-from-a-modern-cafe-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/fairy-lights-at-the-beach-in-bulgaria.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/woman-working-on-laptop-at-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/modern-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})"></div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/blond-using-her-laptop-at-her-bedroom.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/tropical-palm-leaves-floral-pattern-background.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/woman-read-book-and-drink-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/book-on-the-grass.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})"></div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/colorful-exotic-flowers-and-greenery.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/city-lights-reflected-in-the-water-at-night.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/cryptocurrency-bitcoin-coins.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/woman-read-book-and-drink-coffee-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/friends-at-a-restaurant-drinking-wine.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/beautiful-blonde-woman-on-a-wooden-pier-by-the-lake.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/white-apple-imac-computer-with-elephant-mousepad.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/working-in-a-restaurant-macbook-cheese-cake-and-cup-of-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/brainstorming-session-with-creative-designers-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/woman-drinking-hot-tea-in-her-home-office.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/stylish-workspace-with-macbook-pro.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/people-by-a-banquet-table-full-with-food.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/woman-working-on-a-laptop-while-enjoying-a-breakfast-coffee-and-chocolate-in-bed.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/businesswoman-working-at-her-laptop.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/finances-us-dollars-and-bitcoins-currency-money-5.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/cup-of-coffee-on-table-in-cafe.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-3.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/man-looking-out-to-sea.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})"></div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/cup-of-coffee-on-table-in-cafe-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home-3.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/businesswoman-working-at-her-laptop-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/cup-of-coffee-and-an-open-book.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/group-of-people-brainstorming-and-taking-notes-4.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop-4.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/making-magic-with-fairy-lights.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/woman-working-on-a-laptop-while-enjoying-a-breakfast-coffee-and-chocolate-in-bed-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/woman-drinking-tea-and-reading-book.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/a-woman-works-at-a-desk-with-a-laptop-and-a-cup-of-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/everything-you-need-to-work-from-your-bed-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/workplace-with-laptop-on-table-at-home-4.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/stylish-workspace-with-macbook-pro-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/netflix-drug-lords-from-narcos.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/stone-texture-high-resolution-background-2.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/a-visit-to-the-bookstore.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})"></div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/books-and-purple-flowers-on-a-wooden-stool-by-the-bed.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery" href="./static/photos/people-watching-a-presentation-in-a-room.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-fslightbox="gallery"
                        href="./static/photos/home-office-laptop-organizer-and-cup-of-coffee.jpg">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-1x1 rounded border"
                            style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/dist/libs/fslightbox/index.js') }}" defer></script>
@endsection
