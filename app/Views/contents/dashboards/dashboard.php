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
                <?= $this->include('components/breadcrumb'); ?>
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
                                <?= $this->include('components/article-list'); ?>
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
                                            <a href="<?= site_url(); ?>/sign-up" class="btn btn-sm btn-light">Add
                                                Author</a>
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
                                <?= $this->include('components/category-list'); ?>
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