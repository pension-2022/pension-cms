<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <?= $this->include('partials/aside'); ?>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <?= $this->include('partials/header'); ?>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Toolbar-->
                <div class="toolbar" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Article Dashboard</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-12 mb-5 mb-xl-10">
                                <!--begin::Table Widget 4-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800">Article Lists</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-gray-400 fs-7 me-2">Status</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select
                                                        class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                        data-control="select2" data-hide-search="true"
                                                        data-dropdown-css-class="w-150px"
                                                        data-placeholder="Select an option"
                                                        data-kt-table-widget-4="filter_status">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="Published">Published</option>
                                                        <option value="Inactive">Inactive</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Search-->
                                                <div class="position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span
                                                        class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-table-widget-4="search"
                                                        class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-2">
                                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 433px">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-3"
                                                id="kt_table_widget_4_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="px-3 min-w-100px">Title</th>
                                                        <th class="text-end min-w-100px">Created</th>
                                                        <th class="text-end min-w-125px">Category</th>
                                                        <th class="text-end min-w-100px d-none"></th>
                                                        <th class="text-end min-w-100px">Author</th>
                                                        <th class="text-end min-w-50px">Status</th>
                                                        <th class="text-end d-none">Actions</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bolder text-gray-600">
                                                    <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                                    </tr>
                                                    <?php for ($i = 0; $i < 50; $i++) : ?>
                                                    <tr>
                                                        <td>
                                                            <?= $i + 1; ?>.
                                                            <a href="<?= site_url(); ?>"
                                                                class="text-gray-800 text-hover-primary">MENGENAL LEBIH
                                                                DEKAT DANA PENSIUN BRI</a>
                                                        </td>
                                                        <td class="text-end">7 min ago</td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">Pensiun</a>
                                                        </td>
                                                        <td class="text-end d-none">$630.00</td>
                                                        <td class="text-end">
                                                            <span class="text-gray-800 fw-boldest">Muhammad
                                                                Hafid</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-<?= ($i % 2 == 0) ? 'success' : 'danger'; ?>"><?= ($i % 2 == 0) ? 'Published' : 'Inactive'; ?></span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="d-none btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)"
                                                                            fill="currentColor" />
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <?php endfor; ?>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 4-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4">
                                <!--begin::List widget 5-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Author Lists</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <a href="<?= site_url(); ?>" class="btn btn-sm btn-light">Add Author</a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Scroll-->
                                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 437px">
                                            <?php for ($i = 0; $i < 50; $i++) : ?>
                                            <!--begin::Item-->
                                            <div
                                                class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="<?= base_url(); ?>/assets/media/avatars/300-1.jpg"
                                                            class="w-50px ms-n1 me-1" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="<?= site_url(); ?>"
                                                            class="text-gray-800 text-hover-primary fw-bolder">Muhammad
                                                            Hafid</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Name-->
                                                    <span class="text-gray-400 fw-bolder">Created Article:
                                                        <span
                                                            class="text-gray-800 text-hover-primary fw-bolder"><?= ($i + 1) * 3; ?></span>
                                                    </span>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                            <!--end::Item-->
                                            <?php endfor ?>
                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List widget 5-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-8">
                                <!--begin::Table Widget 5-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Category Lists</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Destination-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Cateogry</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select
                                                        class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                        data-control="select2" data-hide-search="true"
                                                        data-dropdown-css-class="w-150px"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="a">Category A</option>
                                                        <option value="b">Category B</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Destination-->
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Status</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select
                                                        class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                        data-control="select2" data-hide-search="true"
                                                        data-dropdown-css-class="w-150px"
                                                        data-placeholder="Select an option"
                                                        data-kt-table-widget-5="filter_status">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="In Stock">In Stock</option>
                                                        <option value="Out of Stock">Out of Stock</option>
                                                        <option value="Low Stock">Low Stock</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Search-->
                                                <a href="../../demo1/dist/apps/ecommerce/catalog/products.html"
                                                    class="btn btn-light btn-sm">View Stock</a>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 433px">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-3"
                                                id="kt_table_widget_5_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px">Item</th>
                                                        <th class="text-end pe-3 min-w-100px">Product ID</th>
                                                        <th class="text-end pe-3 min-w-150px">Date Added</th>
                                                        <th class="text-end pe-3 min-w-100px">Price</th>
                                                        <th class="text-end pe-3 min-w-50px">Status</th>
                                                        <th class="text-end pe-0 min-w-25px">Qty</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bolder text-gray-600">

                                                    <?php for ($i = 0; $i < 100; $i++) : ?>
                                                    <tr>
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="<?= site_url(); ?>"
                                                                class="text-dark text-hover-primary">Macbook Air M1</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#XGY-356</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end">02 Apr, 2022</td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$1,230</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="58">
                                                            <span class="text-dark fw-bolder">58 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                    <?php endfor; ?>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 5-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <?= $this->include('partials/footer'); ?>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>