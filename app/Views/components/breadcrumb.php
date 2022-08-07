<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
                <?php switch (current_url()) {
                    case site_url() . '/':
                        echo 'Dasbhoard';
                        break;
                    case site_url() . '/articles':
                        echo 'Articles';
                        break;
                    case site_url() . '/add-article':
                        echo 'Add Articles';
                        break;
                    case site_url() . '/edit-article':
                        echo 'Edit Articles';
                        break;
                    case site_url() . '/categories':
                        echo 'Category';
                        break;
                    case site_url() . '/add-category':
                        echo 'Add Category';
                        break;
                    case site_url() . '/edit-category':
                        echo 'Edit Category';
                        break;
                    case site_url() . '/authors':
                        echo 'Authors';
                        break;

                    default:
                        '';
                        break;
                } ?>
            </h1>
            <!--end::Title-->
            <?php if (current_url() != site_url() . '/') : ?>
            <!--begin::Separator-->
            <span class="h-20px border-gray-300 border-start mx-4"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="<?= site_url(); ?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item 
                    <?php switch (current_url()) {
                        case site_url() . '/articles':
                        case site_url() . '/categories':
                        case site_url() . '/authors':
                            echo 'text-dark';
                            break;

                        default:
                            echo 'text-muted';
                            break;
                    } ?>">
                    <?php switch (current_url()) {
                            case site_url() . '/articles':
                            case site_url() . '/add-article':
                            case site_url() . '/edit-article':
                                echo 'Article';
                                break;

                            case site_url() . '/categories':
                            case site_url() . '/add-category':
                            case site_url() . '/edit-category':
                                echo 'Category';
                                break;

                            case site_url() . '/authors':
                                echo 'Authors';
                                break;

                            default:
                                # code...
                                break;
                        } ?>
                </li>
                <!--end::Item-->
                <?php if (
                        current_url() == site_url() . '/add-article' ||
                        current_url() == site_url() . '/edit-article' ||
                        current_url() == site_url() . '/add-category' ||
                        current_url() == site_url() . '/edit-category'
                    ) : ?>
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-dark">
                    <?php switch (current_url()) {
                                case site_url() . '/add-article':
                                    echo 'Add Article';
                                    break;
                                case site_url() . '/edit-article':
                                    echo 'Edit Article';
                                    break;
                                case site_url() . '/add-category':
                                    echo 'Add Category';
                                    break;
                                case site_url() . '/edit-category':
                                    echo 'Edit Category';
                                    break;

                                default:
                                    # code...
                                    break;
                            } ?>
                </li>
                <!--end::Item-->
                <?php endif ?>
            </ul>
            <!--end::Breadcrumb-->
            <?php endif ?>
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>