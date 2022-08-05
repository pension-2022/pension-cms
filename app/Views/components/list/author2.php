<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Title-->
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder text-gray-800">Author Lists</span>
            </h3>
            <!--end::Title-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Search-->
            <div class="position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control w-150px fs-7 ps-12"
                    placeholder="Search" />
            </div>
            <!--end::Search-->
            <div class="w-100 mw-150px">
                <!--begin::Select2-->
                <select class="form-select form-select-sm form-select-solid" data-control="select2"
                    data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                    <option></option>
                    <option value="all">All</option>
                    <option value="Activate">Activate</option>
                    <option value="Inactive">Inactive</option>
                </select>
                <!--end::Select2-->
            </div>
            <!--begin::Add product-->
            <a href="<?= current_url(); ?>" class="btn btn-sm btn-primary">Add Author</a>
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <input class="form-check-input d-none" type="checkbox" data-kt-check="true"
                            data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                        #
                    </th>
                    <th class="min-w-200px">Author</th>
                    <th class="text-end min-w-100px">Joined</th>
                    <th class="text-end min-w-70px">Created Article</th>
                    <th class="text-end min-w-100px d-none"></th>
                    <th class="text-end min-w-100px d-none"></th>
                    <th class="text-end min-w-100px">Status</th>
                    <th class="text-end min-w-70px <?= (current_url() == site_url() . '/') ? 'd-none' : ''; ?>">Actions
                    </th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
                <?php $nama = [
                    'Bimo Pramudyo Soekarno', 'Bimo Surono', 'Bing Gondosubroto', 'Bintoro', 'Bismarka ', 'Blue Ribb', 'Bob Yanua', 'Bob Yanua', 'Bobby And', 'Bobby Ima', 'Boedi Sam', 'Boedihard', 'Boediyani', 'Boelio Mu', 'BOENJAMIN', 'Bong Kiu ', 'Bong Tjen', 'Bong Tjen', 'Bonny Bud', 'BOURNIGAU', 'Boy Gemin', 'Brett Hay', 'Bright Ci', 'Bruce Wil', 'Bruce Wil', 'BUDHI SOE', 'Budi Arsi', 'Budi Basu', 'Budi Chri', 'BUDI DHAR'
                ] ?>
                <?php for ($i = 0; $i < 30; $i++) : ?>
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <span class="fw-bolder"><?= $i + 1; ?></span>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center w-200px">
                            <!--begin::Thumbnail-->
                            <a href="<?= current_url(); ?>" class="symbol symbol-50px">
                                <span class="symbol-label"
                                    style="background-image:url(<?= base_url(); ?>/assets/media/avatars/300-<?= $i + 1; ?>.jpg);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="<?= current_url(); ?>" class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                    data-kt-ecommerce-product-filter="product_name"><?= $nama[$i]; ?></a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">4 Aug, 2022</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="Pensiun">
                        <span class="fw-bolder ms-3">Pensiun</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">Muhammad Hafid</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0 d-none" data-order="rating-5"></td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="<?= ($i % 2 == 0) ? 'Activate' : 'Inactive'; ?>">
                        <!--begin::Badges-->
                        <div class="badge badge-light-<?= ($i % 2 == 0) ? 'success' : 'danger'; ?>">
                            <?= ($i % 2 == 0) ? 'Activate' : 'Inactive'; ?></div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end <?= (current_url() == site_url() . '/') ? 'd-none' : ''; ?>">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">Actions
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="<?= current_url(); ?>"
                                    class="menu-link px-3"><?= ($i % 2 == 0) ? 'Inactivate' : 'Publish'; ?></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="<?= current_url(); ?>" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="<?= current_url(); ?>" class="menu-link px-3"
                                    onclick="confirm('Sure to delete this category')">Delete</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <?php endfor ?>
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>