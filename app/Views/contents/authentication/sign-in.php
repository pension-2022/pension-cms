<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
            style="background-color: #F2C98A">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <!--begin::Content-->
                <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                    <!--begin::Logo-->
                    <a href="<?= site_url(); ?>" class="py-9 mb-5">
                        <img alt="Logo" src="<?= base_url(); ?>/assets/media/dpbri-color.svg" class="h-60px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">
                        Selamat Datang
                        <br>
                        di Dana Pensiun BRI
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Content-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                    style="background-image: url(<?= base_url(); ?>/assets/media/illustrations/sketchy-1/13.png)"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                        data-kt-redirect-url="../../demo1/dist/index.html" action="<?= base_url() ?>/sign-in"
                        method="POST">
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="<?= site_url('/sign-up'); ?>" class="link-primary fw-bolder">Create an
                                    Account</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="text" name="username"
                                autocomplete="off" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                                <!--begin::Link-->
                                <a href="<?= site_url('/forgot-pass'); ?>">Forgot Password ?</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                name="password" autocomplete="off" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continue</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Submit button-->
                            <!--begin::Separator-->
                            <div class="text-center text-muted text-uppercase fw-bolder mb-5 d-none">or</div>
                            <!--end::Separator-->
                            <!--begin::Google link-->
                            <a href="<?= site_url(); ?>/sign-in"
                                class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5 d-none">
                                <img alt="Logo" src="<?= base_url(); ?>/assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />Continue with Google</a>
                            <!--end::Google link-->
                            <!--begin::Google link-->
                            <a href="<?= site_url(); ?>/sign-in"
                                class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5 d-none">
                                <img alt="Logo" src="<?= base_url(); ?>/assets/media/svg/brand-logos/facebook-4.svg"
                                    class="h-20px me-3" />Continue with Facebook</a>
                            <!--end::Google link-->
                            <!--begin::Google link-->
                            <a href="<?= site_url(); ?>/sign-in"
                                class="btn btn-flex flex-center btn-light btn-lg w-100 d-none">
                                <img alt="Logo" src="<?= base_url(); ?>/assets/media/svg/brand-logos/apple-black.svg"
                                    class="h-20px me-3" />Continue with Apple</a>
                            <!--end::Google link-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>