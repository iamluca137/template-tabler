@extends('layouts.app')

@section('contents')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Account Settings
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-md-3 border-end">
                        <div class="card-body">
                            <h4 class="subheader">Business settings</h4>
                            <div class="list-group list-group-transparent">
                                <a href="{{ route('settings') }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center">My
                                    Account</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">My
                                    Notifications</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Connected
                                    Apps</a>
                                <a href="{{ route('settings-plan') }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center active">Plans</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Billing
                                    & Invoices</a>
                            </div>
                            <h4 class="subheader mt-4">Experience</h4>
                            <div class="list-group list-group-transparent">
                                <a href="#" class="list-group-item list-group-item-action">Give
                                    Feedback</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 d-flex flex-column">
                        <div class="card-body">
                            <h2 class="mb-4">Plans</h2>
                            <p class="text-secondary mb-4">This workspace’s Basic Plan is set to $34 per month
                                and will renew on June 19, 2022.</p>
                            <div class="row row-cards">
                                <div class="col-lg-4">
                                    <div class="card card-md">
                                        <div class="card-body text-center">
                                            <div class="text-uppercase text-secondary font-weight-medium">Free
                                            </div>
                                            <div class="display-5 fw-bold my-3">$0</div>
                                            <ul class="list-unstyled lh-lg">
                                                <li><strong>3</strong> Users</li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-success icon-2">
                                                        <path d="M5 12l5 5l10 -10" />
                                                    </svg>
                                                    Sharing Tools
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-danger icon-2">
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>
                                                    Design Tools
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-danger icon-2">
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>
                                                    Private Messages
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-danger icon-2">
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>
                                                    Twitter API
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <a href="#" class="btn w-100">Choose plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card card-md">
                                        <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-3">
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="text-uppercase text-secondary font-weight-medium">
                                                Premium</div>
                                            <div class="display-5 fw-bold my-3">$49</div>
                                            <ul class="list-unstyled lh-lg">
                                                <li><strong>10</strong> Users</li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-success icon-2">
                                                        <path d="M5 12l5 5l10 -10" />
                                                    </svg>
                                                    Sharing Tools
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-success icon-2">
                                                        <path d="M5 12l5 5l10 -10" />
                                                    </svg>
                                                    Design Tools
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-danger icon-2">
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>
                                                    Private Messages
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-danger icon-2">
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>
                                                    Twitter API
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <a href="#" class="btn btn-green w-100">Choose plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card card-md">
                                        <div class="card-body text-center">
                                            <div class="text-uppercase text-secondary font-weight-medium">
                                                Enterprise</div>
                                            <div class="display-5 fw-bold my-3">$99</div>
                                            <ul class="list-unstyled lh-lg">
                                                <li><strong>100</strong> Users</li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-success icon-2">
                                                        <path d="M5 12l5 5l10 -10" />
                                                    </svg>
                                                    Sharing Tools
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-success icon-2">
                                                        <path d="M5 12l5 5l10 -10" />
                                                    </svg>
                                                    Design Tools
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-success icon-2">
                                                        <path d="M5 12l5 5l10 -10" />
                                                    </svg>
                                                    Private Messages
                                                </li>
                                                <li>
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon me-1 text-danger icon-2">
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>
                                                    Twitter API
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <a href="#" class="btn w-100">Choose plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card card-md">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h2 class="h3">Enterprise-ready. Reach out for a custom
                                                        quote.</h2>
                                                    <p class="m-0 text-secondary">Tabler is designed to work
                                                        great for large enterprises. Take a look at our feature
                                                        comparison.</p>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="btn btn-1">
                                                        Book a demo
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
