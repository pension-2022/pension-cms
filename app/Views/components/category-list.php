<div class="card card-flush h-xl-100">
    <!--begin::Card header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-gray-800">Category Lists</span>
        </h3>
        <!--end::Title-->
        <!--begin::Actions-->
        <div class="card-toolbar">
            <!--begin::Filters-->
            <div class="d-flex flex-stack flex-wrap gap-4">
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
                    <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12"
                        placeholder="Search" />
                </div>
                <!--end::Search-->
                <?php if (current_url() != site_url() . '/') : ?>
                <!--begin::Add product-->
                <a href="<?= site_url(); ?>/add-category" class="btn btn-sm btn-primary">Add Category</a>
                <!--end::Add product-->
                <?php endif ?>
            </div>
            <!--begin::Filters-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-2">
        <?php if (current_url() == site_url() . '/') : ?>
        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 433px">
            <?php endif ?>
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="px-3 min-w-100px">Category</th>
                        <th class="text-end min-w-100px">Created</th>
                        <th class="text-end min-w-125px">Article</th>
                        <th class="text-end min-w-100px d-none"></th>
                        <th class="text-end min-w-100px d-none"></th>
                        <th class="text-end min-w-50px d-none"></th>
                        <th class="text-end <?= (current_url() == site_url() . '/') ? 'd-none' : ''; ?>">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bolder text-gray-600">
                    <tr data-kt-table-widget-4="subtable_template" class="d-none"></tr>
                    <?php for ($i = 0; $i < 50; $i++) : ?>
                    <tr>
                        <td>
                            <?= $i + 1; ?>.
                            <a href="<?= current_url(); ?>"
                                class="text-gray-800 text-hover-primary"><?= ($i % 2 == 0) ? 'Pensiun' : 'Hukum'; ?></a>
                        </td>
                        <td class="text-end">4 Aug, 2022</td>
                        <td class="text-end"><?= ($i + 1) * 3; ?></td>
                        <td class="text-end d-none"></td>
                        <td class="text-end d-none"></td>
                        <td class="text-end d-none"></td>
                        <td class="text-end <?= (current_url() == site_url() . '/') ? 'd-none' : ''; ?>">
                            <button type="button" class="d-none" data-kt-table-widget-4="expand_row"></button>
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
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
                                        class="menu-link px-3"><?= ($i % 2 == 0) ? 'Inactive' : 'Published'; ?></a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            <?php if (current_url() == site_url() . '/') : ?>
        </div>
        <?php endif ?>
    </div>
    <!--end::Card body-->
</div>