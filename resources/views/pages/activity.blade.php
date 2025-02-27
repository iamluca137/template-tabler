@extends('layouts.app')

@section('contents')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Activity
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="divide-y">
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1">JL</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm
                                                    not a witch."</strong> post.
                                            </div>
                                            <div class="text-secondary">24 hours ago</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                                            </div>
                                            <div class="text-secondary">now</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Dunn Slane</strong> posted <strong>"Well, what do you
                                                    want?"</strong>.
                                            </div>
                                            <div class="text-secondary">now</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Emmy Levet</strong> created a new project
                                                <strong>Morning alarm clock</strong>.
                                            </div>
                                            <div class="text-secondary">4 days ago</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Maryjo Lebarree</strong> liked your photo.
                                            </div>
                                            <div class="text-secondary">now</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1">EP</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Egan Poetz</strong> registered new client as
                                                <strong>Trilia</strong>.
                                            </div>
                                            <div class="text-secondary">24 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Kellie Skingley</strong> closed a new deal on project
                                                <strong>Pen Pineapple Apple Pen</strong>.
                                            </div>
                                            <div class="text-secondary">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Christabel Charlwood</strong> created a new project for
                                                <strong>Wikibox</strong>.
                                            </div>
                                            <div class="text-secondary">4 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1">HS</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Haskel Shelper</strong> change status of <strong>Tabler
                                                    Icons</strong> from <strong>open</strong> to
                                                <strong>closed</strong>.
                                            </div>
                                            <div class="text-secondary">now</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Lorry Mion</strong> liked <strong>Tabler UI
                                                    Kit</strong>.
                                            </div>
                                            <div class="text-secondary">now</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Leesa Beaty</strong> posted new video.
                                            </div>
                                            <div class="text-secondary">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Perren Keemar</strong> and 3 others followed you.
                                            </div>
                                            <div class="text-secondary">now</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1">SA</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Sunny Airey</strong> upload 3 new photos to category
                                                <strong>Inspirations</strong>.
                                            </div>
                                            <div class="text-secondary">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Geoffry Flaunders</strong> made a <strong>$10</strong>
                                                donation.
                                            </div>
                                            <div class="text-secondary">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Thatcher Keel</strong> created a profile.
                                            </div>
                                            <div class="text-secondary">3 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI
                                                    Birthday</strong>.
                                            </div>
                                            <div class="text-secondary">4 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1"
                                                style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Avivah Mugleston</strong> mentioned you on <strong>Best
                                                    of 2020</strong>.
                                            </div>
                                            <div class="text-secondary">now</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar avatar-1">AA</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Arlie Armstead</strong> sent a Review Request to
                                                <strong>Amanda Blake</strong>.
                                            </div>
                                            <div class="text-secondary">2 days ago</div>
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
