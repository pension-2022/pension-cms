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
            <?php $nama = [
                'Bimo Pramudyo Soekarno', 'Bimo Surono', 'Bing Gondosubroto', 'Bintoro', 'Bismarka ', 'Blue Ribb', 'Bob Yanua', 'Bob Yanua', 'Bobby And', 'Bobby Ima', 'Boedi Sam', 'Boedihard', 'Boediyani', 'Boelio Mu', 'BOENJAMIN', 'Bong Kiu ', 'Bong Tjen', 'Bong Tjen', 'Bonny Bud', 'BOURNIGAU', 'Boy Gemin', 'Brett Hay', 'Bright Ci', 'Bruce Wil', 'Bruce Wil', 'BUDHI SOE', 'Budi Arsi', 'Budi Basu', 'Budi Chri', 'BUDI DHAR'
            ] ?>
            <?php for ($i = 0; $i < 30; $i++) : ?>
            <!--begin::Item-->
            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                <!--begin::Info-->
                <div class="d-flex flex-stack mb-3">
                    <!--begin::Wrapper-->
                    <div class="me-3">
                        <!--begin::Icon-->
                        <img src="<?= base_url(); ?>/assets/media/avatars/300-<?= $i + 1; ?>.jpg"
                            class="w-50px ms-n1 me-1" alt="" />
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <a href="<?= site_url(); ?>"
                            class="text-gray-800 text-hover-primary fw-bolder"><?= $nama[$i]; ?></a>
                        <!--end::Title-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Info-->
                <!--begin::Customer-->
                <div class="d-flex flex-stack">
                    <!--begin::Name-->
                    <span class="text-gray-400 fw-bolder">Created Article:
                        <span class="text-gray-800 text-hover-primary fw-bolder"><?= ($i + 1) * 3; ?></span>
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