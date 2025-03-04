@extends('layouts.app')

@section('contents')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Modals
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <div class="btn-list">
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-simple">
                            Simple modal
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-large">
                            Large modal
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-small">
                            Small modal
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-full-width">
                            Full width modal
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-scrollable">
                            Scrollable modal
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-report">
                            Modal with form
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-success">
                            Success modal
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-danger">
                            Danger modal
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-team">
                            Modal with simple form
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-simple" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-1 modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae
                            delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio
                            perspiciatis, quia quis reprehenderit sit tempora totam unde.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Large modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae
                            delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio
                            perspiciatis, quia quis reprehenderit sit tempora totam unde.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Are you sure?</div>
                            <div>If you proceed, you will lose all your personal data.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, delete
                                all my data</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Full width modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae
                            delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio
                            perspiciatis, quia quis reprehenderit sit tempora totam unde.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-scrollable" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-2 modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scrollable modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                facilisis in, egestas
                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                sagittis lacus vel augue
                                laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl
                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                fringilla.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                facilisis in, egestas
                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                sagittis lacus vel augue
                                laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl
                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                fringilla.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                facilisis in, egestas
                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                sagittis lacus vel augue
                                laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl
                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                fringilla.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                facilisis in, egestas
                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                sagittis lacus vel augue
                                laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl
                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                fringilla.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                facilisis in, egestas
                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                sagittis lacus vel augue
                                laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl
                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                fringilla.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                facilisis in, egestas
                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                sagittis lacus vel augue
                                laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl
                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                fringilla.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="example-text-input"
                                    placeholder="Your report name">
                            </div>
                            <label class="form-label">Report type</label>
                            <div class="form-selectgroup-boxes row mb-3">
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                        <input type="radio" name="report-type" value="1"
                                            class="form-selectgroup-input" checked>
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                                <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                                <span class="form-selectgroup-title strong mb-1">Simple</span>
                                                <span class="d-block text-secondary">Provide only basic data
                                                    needed for the report</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                        <input type="radio" name="report-type" value="1"
                                            class="form-selectgroup-input">
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                                <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                                <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                                <span class="d-block text-secondary">Insert charts and
                                                    additional advanced analyses to be inserted in the
                                                    report</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Report url</label>
                                        <div class="input-group input-group-flat">
                                            <span class="input-group-text">
                                                https://tabler.io/reports/
                                            </span>
                                            <input type="text" class="form-control ps-0" value="report-01"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Visibility</label>
                                        <select class="form-select">
                                            <option value="1" selected>Private</option>
                                            <option value="2">Public</option>
                                            <option value="3">Hidden</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Client name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Reporting period</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label">Additional information</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                                Cancel
                            </a>
                            <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                Create new report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-status bg-success"></div>
                        <div class="modal-body text-center py-4">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon mb-2 text-green icon-lg">
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                            </svg>
                            <h3>Payment succedeed</h3>
                            <div class="text-secondary">Your payment of $290 has been successfully submitted.
                                Your invoice has been sent to support@tabler.io.</div>
                        </div>
                        <div class="modal-footer">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col">
                                        <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal">
                                            Go to dashboard
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-4 w-100" data-bs-dismiss="modal">
                                            View invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-status bg-danger"></div>
                        <div class="modal-body text-center py-4">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon mb-2 text-danger icon-lg">
                                <path d="M12 9v4" />
                                <path
                                    d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                <path d="M12 16h.01" />
                            </svg>
                            <h3>Are you sure?</h3>
                            <div class="text-secondary">Do you really want to remove 84 files? What you've done
                                cannot be undone.</div>
                        </div>
                        <div class="modal-footer">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col">
                                        <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal">
                                            Cancel
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-danger btn-4 w-100" data-bs-dismiss="modal">
                                            Delete 84 items
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-1 modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add a new team</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3 align-items-end">
                                <div class="col-auto">
                                    <a href="#" class="avatar avatar-upload rounded">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        <span class="avatar-upload-text">Add</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pick your team color</label>
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="dark"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-dark"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput form-colorinput-light">
                                            <input name="color" type="radio" value="white"
                                                class="form-colorinput-input" checked />
                                            <span class="form-colorinput-color bg-white"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="blue"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-blue"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="azure"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-azure"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="indigo"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-indigo"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="purple"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-purple"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="pink"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-pink"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="red"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-red"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="orange"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-orange"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="yellow"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-yellow"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="lime"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-lime"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-colorinput">
                                            <input name="color" type="radio" value="green"
                                                class="form-colorinput-input" />
                                            <span class="form-colorinput-color bg-green"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="form-label">Additional info</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add
                                Team</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
