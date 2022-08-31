<?php foreach ($datauser as $userdata) : ?>
<div id="kt_header" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="currentColor" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <!-- <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="<?= base_url(); ?>" class="d-lg-none">
                <img alt="Logo" src="<?= base_url(); ?>/assets/media/dpbri-color.svg" class="h-30px" />
            </a>
        </div> -->
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <!-- <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}"> -->
                    <!--begin::Menu-->
                    <!-- <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <?= $this->include('components/navigation/header/dashboard'); ?>
                        <?= $this->include('components/navigation/header/article'); ?>
                        <?= $this->include('components/navigation/header/category'); ?>
                        <?= $this->include('components/navigation/header/author'); ?>
                    </div> -->
                    <!--end::Menu-->
                <!-- </div> -->
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::User menu-->
                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <?php if ($userdata['photo'] == null) : ?>
                            <img alt="user" src="<?= base_url(); ?>/assets/media/avatars/blank.png" />
                        <?php else : ?>
                            <img alt="user" src="<?= base_url(); ?>/assets/media/avatars/blank.png" />
                        <?php endif ?>
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                <?php if ($userdata['photo'] == null) : ?>
                                    <img alt="Logo" src="<?= base_url(); ?>/assets/media/avatars/blank.png" />
                                <?php else : ?>
                                    <img alt="Logo" src="<?= base_url(); ?>/assets/media/avatars/blank.png" />
                                <?php endif ?>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5"><?= $userdata['fullName']; ?>
                                        <!-- <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span> -->
                                    </div>
                                    <a class="fw-bold text-muted text-hover-primary fs-7"><?= $userdata['email']; ?></a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="<?= base_url('profile'); ?>" class="menu-link px-5">My
                                Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="<?= base_url('articles'); ?>" class="menu-link px-5">
                                <span class="menu-text">My Article</span>
                                <span class="menu-badge">
                                    <span class="badge badge-light-danger badge-circle fw-bolder fs-7"><?= $userdata['articles']; ?></span>
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 d-none" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title">My Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/referrals'); ?>" class="menu-link px-5">Referrals</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/billing'); ?>" class="menu-link px-5">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/payments'); ?>" class="menu-link px-5">Payments</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/statements'); ?>"
                                        class="menu-link d-flex flex-stack px-5">Statements
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="View your statements"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications" />
                                            <span class="form-check-label text-muted fs-7">Notifications</span>
                                        </label>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 d-none">
                            <a href="<?= base_url('account/statements'); ?>" class="menu-link px-5">My
                                Statements</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 d-none" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">Language
                                    <span
                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                        <img class="w-15px h-15px rounded-1 ms-2"
                                            src="<?= base_url(); ?>/assets/media/flags/united-states.svg"
                                            alt="" /></span></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/settings'); ?>" class="menu-link d-flex px-5 active">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="<?= base_url(); ?>/assets/media/flags/united-states.svg" alt="" />
                                        </span>English</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/settings'); ?>" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="<?= base_url(); ?>/assets/media/flags/spain.svg"
                                                alt="" />
                                        </span>Spanish</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/settings'); ?>" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="<?= base_url(); ?>/assets/media/flags/germany.svg" alt="" />
                                        </span>German</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/settings'); ?>" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="<?= base_url(); ?>/assets/media/flags/japan.svg"
                                                alt="" />
                                        </span>Japanese</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="<?= base_url('account/settings'); ?>" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="<?= base_url(); ?>/assets/media/flags/france.svg" alt="" />
                                        </span>French</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1 d-none">
                            <a href="<?= base_url('account/settings'); ?>" class="menu-link px-5">Account Settings</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a onclick="signout()" class="menu-link px-5">Sign
                                Out</a>
                        </div>
                        <script type="text/javascript">
                            function signout() {
                                Swal.fire({
                                title: 'Are you sure?',
                                showDenyButton: true,
                                showCancelButton: false,
                                confirmButtonText: 'Yes',
                                denyButtonText: 'No',
                                customClass: {
                                    actions: 'my-actions',
                                    cancelButton: 'order-1 right-gap',
                                    confirmButton: 'order-2',
                                    denyButton: 'order-3',
                                }
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                                    $.ajax({
                                            type: 'POST',
                                            url: "<?= base_url() ?>/sign-out",
                                            data: {_token: CSRF_TOKEN},
                                            success: function (results) {
                                                if (results.success === true) {
                                                    window.location.href = '<?= base_url() ?>/sign-in';
                                                    // window.location.reload();
                                                } else {
                                                    Swal.fire('Failed!', '', 'error')
                                                }
                                            }
                                        });
                                }
                                })
                            }
                        </script>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 d-none">
                            <div class="menu-content px-5">
                                <label
                                    class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                                    for="kt_user_menu_dark_mode_toggle">
                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode"
                                        id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo1/dist/index.html" />
                                    <span class="pulse-ring ms-n1"></span>
                                    <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                </label>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
                <!--begin::Header menu toggle-->
                <!-- <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                        id="kt_header_menu_mobile_toggle"> -->
                        <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                        <!-- <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                    fill="currentColor" />
                                <path opacity="0.3"
                                    d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                    fill="currentColor" />
                            </svg>
                        </span> -->
                        <!--end::Svg Icon-->
                    <!-- </div>
                </div> -->
                <!--end::Header menu toggle-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<?php endforeach; ?>