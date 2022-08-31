<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Title-->
            <h3 class="card-title align-items-start flex-column">
                <?php if($selection == 'author') :  ?>
                <span class="card-label fw-bolder text-gray-800">Author List</span>
                <?php else: ?>
                <span class="card-label fw-bolder text-gray-800">User List</span>
                <?php endif;  ?>
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
                    <?php if($selection == 'author') :  ?>
                    <option value="Active">Active</option>
                    <option value="Blocked">Blocked</option>
                    <?php else:  ?>
                    <option value="New">New</option>
                    <option value="Rejected">Rejected</option>
                    <option value="Approved">Approved</option>
                    <?php endif;  ?>
                </select>
                <!--end::Select2-->
            </div>
            <!--begin::Add product-->
            <?php if($selection == 'author') :  ?>
            <a href="<?= site_url('sign-up'); ?>" class="btn btn-sm btn-primary">Add Author</a>
            <?php endif;  ?>
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
                    <?php if($selection == 'author') :  ?>
                    <th class="min-w-200px">Author</th>
                    <th class="text-end min-w-100px">Joined</th>
                    <th class="text-end min-w-70px">Created Article</th>
                    <th class="text-end min-w-70px">Status</th>
                    <?php else:  ?>
                    <th class="min-w-200px">User</th>
                    <th class="text-end min-w-100px">Register Date</th>
                    <th class="text-end min-w-70px">Status</th>
                    <?php endif;  ?>
                    <th class="text-end min-w-100px d-none"></th>
                    <th class="text-end min-w-100px d-none"></th>
                    <th class="text-end min-w-100px">Email</th>
                    <th class="text-end min-w-70px <?= (current_url() == site_url() . '/') ? 'd-none' : ''; ?>">Actions
                    </th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
                <?php $i = 0 ?>
                <?php foreach ($author as $user) :  ?>
                <?php $i++ ?>
                <!--begin::Table row-->
                <tr>
                    <!--begin::Number-->
                    <td>
                        <span class="fw-bolder"><?= $i; ?></span>
                    </td>
                    <!--end::Number-->
                    <!--begin::Author=-->
                    <td>
                        <div class="d-flex align-items-center w-200px">
                            <!--begin::Thumbnail-->
                            <a href="<?= current_url(); ?>" class="symbol symbol-50px">
                                <?php if($user['photo'] == null):  ?>
                                    <span class="symbol-label"
                                    style="background-image:url(<?= base_url(); ?>/assets/media/avatars/blank.png);"></span>
                                <?php else: ?>
                                    <span class="symbol-label"
                                    style="background-image:url(<?= base_url(); ?>/assets/media/avatars/blank.png);"></span>
                                <?php endif; ?>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="<?= current_url(); ?>" class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                    data-kt-ecommerce-product-filter="product_name"><?= $user['fullName'] ?></a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::user=-->
                    <!--begin::Joined=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder"><?= $user['joined'] ?></span>
                    </td>
                    <!--end::Joined=-->
                    <!--begin::Created Article=-->
                    
                    <?php if($selection == 'author') :  ?>
                    <td class="text-end pe-0" data-order="<?= $user['articles'] ?>">
                        <span class="fw-bolder ms-3"><?= $user['articles'] ?> Article</span>
                    </td>
                    <td class="text-end pe-0" data-order="<?= ($user['statusApproval'] == 1) ? 'Active' : 'Blocked'; ?>">
                    <!--begin::Badges-->
                    <div class="badge badge-light-<?= ($user['statusApproval'] == 1) ? 'info' : (($user['statusApproval'] == 2) ? 'danger' : 'success'); ?>">
                        <?= ($user['statusApproval'] == 1) ? 'Active' : 'Blocked'; ?></div>
                    <!--end::Badges-->
                    </td>
                    <?php else:  ?>
                    <td class="text-end pe-0" data-order="<?= ($user['statusApproval'] == 1) ? 'Approved' : (($user['statusApproval'] == 2) ? 'Rejected' : 'New'); ?>">
                    <!--begin::Badges-->
                    <div class="badge badge-light-<?= ($user['statusApproval'] == 1) ? 'info' : (($user['statusApproval'] == 2) ? 'danger' : 'success'); ?>">
                        <?= ($user['statusApproval'] == 1) ? 'Approved' : (($user['statusApproval'] == 2) ? 'Rejected' : 'New'); ?></div>
                    <!--end::Badges-->
                    </td>
                    <?php endif;  ?>
                    <!--end::Created Article=-->
                    <!--begin::None=-->
                    <td class="text-end pe-0 d-none"></td>
                    <!--end::None=-->
                    <!--begin::None-->
                    <td class="text-end pe-0 d-none" data-order="rating-5"></td>
                    <!--end::None-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="<?= $user['email'] ?>">
                        <!--begin::Badges-->
                        <!-- <div class="badge badge-light-<?= ($i % 2 == 0) ? 'success' : 'danger'; ?>">
                            <?= ($i % 2 == 0) ? 'Activated' : 'Inactive'; ?></div> -->
                        <span class="fw-bolder"><?= $user['email'] ?></span>
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
                            <?php if($selection == 'author') :  ?>
                                    <div class="menu-item px-3">
                                        <a href="<?= current_url(); ?>"
                                            class="menu-link px-3"><?= ($user['statusApproval'] == 1) ? 'Block' : 'Approve'; ?></a>
                                    </div>
                            <?php else :  ?>
                                <?php if($user['statusApproval'] == 0) :  ?>
                                    <div class="menu-item px-3">
                                        <a href="<?= current_url(); ?>"
                                            class="menu-link px-3">Approve</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="<?= current_url(); ?>"
                                            class="menu-link px-3">Reject</a>
                                    </div>
                                <?php else: ?>
                                    <div class="menu-item px-3">
                                        <a href="<?= current_url(); ?>"
                                            class="menu-link px-3"><?= ($user['statusApproval'] == 1) ? 'Block' : 'Approve'; ?></a>
                                    </div>
                                <?php endif;  ?>
                            <?php endif;  ?>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <!-- <div class="menu-item px-3">
                                <a href="" class="menu-link px-3">Edit</a>
                            </div> -->
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <!-- <div class="menu-item px-3">
                                <a href="" class="menu-link px-3"
                                    onclick="confirm('Sure to delete this category')">Delete</a>
                            </div> -->
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <?php endforeach ?>
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>