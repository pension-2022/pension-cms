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
                            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Category</h1>
                            <!--end::Title-->
                            <!--begin::Separator-->
                            <span class="h-20px border-gray-300 border-start mx-4"></span>
                            <!--end::Separator-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="<?= site_url(); ?>" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">Categories</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">Edit Category</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
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
                        <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                            data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
                            <!--begin::Aside column-->
                            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                <!--begin::Status-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Status</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <div class="rounded-circle bg-success w-15px h-15px"
                                                id="kt_ecommerce_add_category_status"></div>
                                        </div>
                                        <!--begin::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                            data-placeholder="Select an option"
                                            id="kt_ecommerce_add_category_status_select">
                                            <option></option>
                                            <option value="published" selected="selected">Published</option>
                                            <option value="scheduled">Scheduled</option>
                                            <option value="unpublished">Unpublished</option>
                                        </select>
                                        <!--end::Select2-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the category status.</div>
                                        <!--end::Description-->
                                        <!--begin::Datepicker-->
                                        <div class="d-none mt-10">
                                            <label for="kt_ecommerce_add_category_status_datepicker"
                                                class="form-label">Select publishing date and time</label>
                                            <input class="form-control" id="kt_ecommerce_add_category_status_datepicker"
                                                placeholder="Pick date &amp; time" />
                                        </div>
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Status-->
                            </div>
                            <!--end::Aside column-->
                            <!--begin::Main column-->
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Category Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="category_name" class="form-control mb-2"
                                                placeholder="Category name" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A category name is required and recommended to
                                                be unique.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="category_description" class="form-control mb-2"
                                                placeholder="Description" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set description for category.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="categories" id="kt_ecommerce_add_product_cancel"
                                        class="btn btn-light me-5">Cancel</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                        <span class="indicator-label">Save Changes</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </div>
                            <!--end::Main column-->
                        </form>
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