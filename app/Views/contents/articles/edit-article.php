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
                            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Article</h1>
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
                                <li class="breadcrumb-item text-dark">Edit Article</li>
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
                        <!--begin::Form-->
                        <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                            data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
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
                                                id="kt_ecommerce_add_product_status"></div>
                                        </div>
                                        <!--begin::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                            data-placeholder="Select an option"
                                            id="kt_ecommerce_add_product_status_select">
                                            <option></option>
                                            <option value="published" selected="selected">Published</option>
                                            <option value="draft">Draft</option>
                                            <option value="scheduled">Scheduled</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                        <!--end::Select2-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the article status.</div>
                                        <!--end::Description-->
                                        <!--begin::Datepicker-->
                                        <div class="d-none mt-10">
                                            <label for="kt_ecommerce_add_product_status_datepicker"
                                                class="form-label">Select publishing date and time</label>
                                            <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                                                placeholder="Pick date &amp; time" />
                                        </div>
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Status-->
                                <!--begin::Category & tags-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Product Details</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <!--begin::Label-->
                                        <label class="form-label">Categories</label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" data-control="select2"
                                            data-placeholder="Select an option" data-allow-clear="true"
                                            multiple="multiple">
                                            <option></option>
                                            <option value="Computers">Computers</option>
                                            <option value="Watches">Watches</option>
                                            <option value="Headphones">Headphones</option>
                                            <option value="Footwear">Footwear</option>
                                            <option value="Cameras">Cameras</option>
                                            <option value="Shirts">Shirts</option>
                                            <option value="Household">Household</option>
                                            <option value="Handbags">Handbags</option>
                                            <option value="Wines">Wines</option>
                                            <option value="Sandals">Sandals</option>
                                        </select>
                                        <!--end::Select2-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 mb-7">Add article to a category.</div>
                                        <!--end::Description-->
                                        <!--end::Input group-->
                                        <!--begin::Button-->
                                        <a href="add-category" class="btn btn-light-primary btn-sm mb-10">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                        transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Create new category
                                        </a>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Category & tags-->
                            </div>
                            <!--end::Aside column-->
                            <!--begin::Main column-->
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                        role="tab-panel">
                                        <div class="d-flex flex-column gap-7 gap-lg-10">
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
                                                        <label class="required form-label">Article Title</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="title" class="form-control mb-2"
                                                            placeholder="Article title" value="" />
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">A product name is required and
                                                            recommended to be unique.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div>
                                                        <!--begin::Label-->
                                                        <label class="form-label">Description</label>
                                                        <!--end::Label-->
                                                        <!--begin::Editor-->
                                                        <div id="kt_ecommerce_add_product_description"
                                                            name="kt_ecommerce_add_product_description"
                                                            class="min-h-200px mb-2"></div>
                                                        <!--end::Editor-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set a description to the article
                                                            for better visibility.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::General options-->
                                            <!--begin::Media-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Media</h2>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-2">
                                                        <!--begin::Dropzone-->
                                                        <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                            <!--begin::Message-->
                                                            <div class="dz-message needsclick">
                                                                <!--begin::Icon-->
                                                                <i
                                                                    class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
                                                                <div class="ms-4">
                                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop
                                                                        files here or click to upload.</h3>
                                                                    <span class="fs-7 fw-bold text-gray-400">Upload up
                                                                        to 10 files</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                        </div>
                                                        <!--end::Dropzone-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product media gallery.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Media-->
                                        </div>
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab content-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="<?= site_url(); ?>/articles" id="kt_ecommerce_add_product_cancel"
                                        class="btn btn-light me-5">Cancel</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary">
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
                        <!--end::Form-->
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