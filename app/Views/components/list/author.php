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
            <a href="<?= site_url(); ?>/sign-up" class="btn btn-sm btn-light  <?= (current_url() == site_url() . '/') ? 'd-none' : ''; ?>">Add
                Author</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Scroll-->
        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 437px">
            <?php $i = 0 ?>
            <?php foreach ($author as $user) :  ?>
            <?php $i++ ?>
            <!--begin::Item-->
            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                <!--begin::Info-->
                <div class="d-flex flex-stack mb-3">
                    <!--begin::Wrapper-->
                    <div class="me-3">
                        <!--begin::Icon-->
                        <?php if($user['photo'] == null):  ?>
                        <img src="<?= base_url(); ?>/assets/media/avatars/blank.png"
                            class="w-50px ms-n1 me-1" alt="" />
                        <?php else: ?>
                        <img src="<?= base_url(); ?>/assets/media/avatars/blank.png"
                            class="w-50px ms-n1 me-1" alt="" />
                        <?php endif; ?>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <a href="<?= site_url(); ?>"
                            class="text-gray-800 text-hover-primary fw-bolder"><?= $user['fullName'] ?></a>
                        <!--end::Title-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Info-->
                <!--begin::Customer-->
                <div class="d-flex flex-stack">
                    <!--begin::Name-->
                    <span class="text-gray-400 fw-bolder">Created Article:
                        <span class="text-gray-800 text-hover-primary fw-bolder"><?= $user['articles'] ?></span>
                    </span>
                    <!--end::Name-->
                </div>
                <!--end::Customer-->
            </div>
            <!--end::Item-->
            <?php endforeach ?>
        </div>
        <!--end::Scroll-->
    </div>
    <!--end::Body-->
</div>