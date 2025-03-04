@extends('layouts.app')

@section('contents')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Tabler Inc. Tasks
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <a href="#" class="btn btn-primary btn-3">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-2">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Add board
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <ul class="nav nav-bordered mb-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">View all</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Development</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">To Do</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Enable analytics tracking</h3>
                                        <div class="ratio ratio-16x9">
                                            <img src="./static/projects/dashboard-1.png" class="rounded object-cover"
                                                alt="Enable analytics tracking">
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded">EP</span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded">HS</span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    7
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        2</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">User should receive a daily digest email</h3>
                                        <div class="text-secondary">Dedicated form for a category of users that
                                            will perform actions.</div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-warning">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                                            <path d="M16 3v4" />
                                                            <path d="M8 3v4" />
                                                            <path d="M4 11h16" />
                                                            <path d="M11 15h1" />
                                                            <path d="M12 15v3" />
                                                        </svg>
                                                        10 Sep
                                                    </a>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    6
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-yellow"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Change license and remove references to products
                                        </h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale active"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    34
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        4</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
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
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">In Progress</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-green"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Write a release note for Admin v1.0</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                                        </svg>
                                                        1/3
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        11</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divide-y-2 mt-4">
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-muted icon-2">
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                                <span class="text-secondary text-decoration-line-through">Implement
                                                    new designs</span>
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                                Usability testing
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                                Design navigation changes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="ribbon ribbon-top ribbon-bookmark bg-yellow">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                            <path
                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Product Update - Q4 2021</h3>
                                        <div class="text-secondary">Dedicated form for a category of users
                                            that will perform actions.</div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    11
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        6</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Code HTML email template for welcome email</h3>
                                        <div class="ratio ratio-16x9">
                                            <img src="./static/projects/dashboard-3.png" class="rounded object-cover"
                                                alt="Code HTML email template for welcome email">
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        11</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
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
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">Test</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-red"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Design new diagrams</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded">HS</span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    6
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        9</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Improve animation loader</h3>
                                        <div class="ratio ratio-16x9">
                                            <img src="./static/projects/dashboard-2.png" class="rounded object-cover"
                                                alt="Improve animation loader">
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale active"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    5
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        6</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">iOS App home page</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-blue"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Changelog 1.7</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-warning">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                                            <path d="M16 3v4" />
                                                            <path d="M8 3v4" />
                                                            <path d="M4 11h16" />
                                                            <path d="M11 15h1" />
                                                            <path d="M12 15v3" />
                                                        </svg>
                                                        10 Jan
                                                    </a>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                        6</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
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
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">Completed</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Enable analytics tracking</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    1
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Coordinate with business development</h3>
                                        <div class="text-secondary">This content is a little bit longer.</div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded">JL</span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale active"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    7
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                                        </svg>
                                                        1/3
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divide-y-2 mt-4">
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-muted icon-2">
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                                <span class="text-secondary text-decoration-line-through">Find
                                                    out the old contract documents</span>
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                                Organize meeting sales associates to understand need in detail
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                                Make sure to cover every small details
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Managing teams</h3>
                                        <div class="text-secondary">Publishing industries for previewing
                                            layouts and visual <a href="#">#family</a> 🔥</div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                        <span class="avatar avatar-xs rounded"
                                                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    4
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-muted">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M8.7 10.7l6.6 -3.4" />
                                                            <path d="M8.7 13.3l6.6 3.4" />
                                                        </svg>
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
