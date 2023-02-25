<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
    <title>Document</title>
</head>

<body>
    <style>
        a {
            color: white;
        }

        a:hover {
            text-decoration: none;
        }

        .topnav .navbar-brand {
            width: 15rem;
            padding-left: 1rem;
            padding-right: 1rem;
            margin: 0;
            font-size: 1rem;
            font-weight: 700;
            padding-top: 8px;
            color: #202d3d;
        }

        .topnav {
            padding-left: 0;
            padding: 10px 0px;
            z-index: 1039;
        }

        #sidebar-toggle {
            outline: none;
            border: 0;
            background-color: transparent;
        }

        .plus-icon {
            font-size: 25px;
            color: #8f8f8f;
        }

        .nav-right {
            flex: 1;
            justify-content: space-between;
            display: flex;
        }

        #sidebar {
            width: 15rem;
            height: 100vh;
            z-index: 500;
            padding-top: 3.625rem;
            position: fixed;
            top: 0px;
            left: 0;
            background-color: #202d3f;
        }

        #wp-content {
            flex: auto;
            /* height: calc(100vh - 58px); */
            min-height: 100vh;
            background-color: #f4f6f8;
        }

        #content {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #content.content-60 {
            width: 75%;
            margin: 0px auto;
        }

        #content .card-header {
            text-transform: uppercase;
        }

        #content .ui-title-bar__heading-group h1 {
            font-size: 25px;
            padding-top: 15px;
        }

        #content .ui-type-container {
            width: 100%;
            /* padding: 10px 0px; */
            background: white;
            border-radius: 5px;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 20px;
        }

        #content .next-input-wrapper input {
            width: 100%;
            padding: 7px 10px;
            border: 1px solid #C4CDD6;
            border-radius: 3px;
            font-size: 14px;
            outline: none;
        }

        #content .next-input-wrapper input:focus {
            border: 2px solid #0088ff;
        }

        #content .next-input-wrapper .group--price input {
            width: 100%;
            padding: 7px 10px;
            border: 1px solid #C4CDD6;
            border-radius: 3px;
            font-size: 14px;
            outline: none;
        }

        #content .next-input-wrapper .group--price textarea {
            width: 100%;
            padding: 7px 10px;
            border: 1px solid #C4CDD6;
            border-radius: 3px;
            font-size: 14px;
            outline: none;
        }

        #content .next-input-wrapper .group--price {
            display: flex;
            justify-content: space-between;
        }

        #guide_line_step_2 {
            margin-top: 16px;
        }

        #content label.next-label {
            margin-bottom: 5px;
        }

        #content label.next-label-1 {
            font-weight: 500;
            /* margin-bottom: 5px; */
            padding: 5px;
        }

        .nav-fixed .topnav {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        ul#sidebar-menu * {
            list-style: none;
            padding-left: 0;
        }

        #sidebar-menu {
            padding: 20px 15px;
        }

        .nav-link {
            display: block;
            padding: .6rem 1rem;
            position: relative;
        }

        .nav-link.active>a,
        .nav-link:hover>li>a {
            color: #60b9e9 !important;
        }

        .nav-link>li>a>i {
            color: #787272;
            font-size: 18px;
        }

        .nav-link .arrow {
            position: absolute;
            right: 10px;
            cursor: pointer;
        }

        #sidebar-menu .sub-menu {
            padding-left: 25px;
            border-left: 1px dashed #b8b8b8;
            margin-left: 6px;
            display: none;
        }

        #sidebar-menu .sub-menu li a {
            display: block;
            padding: 7px 0px;
        }

        #page-body {
            background-color: #e5e9f0;
        }

        .form-search {
            width: 450px;
        }

        .table tr td {
            vertical-align: middle;
        }

        .table-checkall input[type='checkbox'] {
            cursor: pointer;
        }

        .analytic a {
            position: relative;
            padding-right: 5px;
            margin-right: 5px;
        }

        .analytic a:not(:last-child):after {
            position: absolute;
            content: '|';
            top: -1px;
            right: -5px;
            color: #8c8c8c;
        }

        a:hover {
            color: #60b9e9;
        }

        .ui-type-container {
            border: 1px solid #dfe4e8;
        }

        .sel {
            width: 100%;
            padding: 5px;
            border-radius: 4px;
            border-color: #dfe4e8;
            outline: none;
            cursor: pointer;
        }

        .btn-save button {
            background: #007bff;
            padding: 6px 15px;
            border: none;
            color: white;
            border-radius: 3px;
            outline: none;
        }

        .btn-cancle button {
            background: #fcfcfd;
            padding: 6px 17px;
            border-radius: 3px;
            /* width: 6%; */
            color: black;
            border: 1px solid #dfe4e8;
            outline: none;
        }

        .btn-save button:hover {
            color: white;
            background: #3894ff;
        }

        .btn-cancle button:hover {
            background: #f7f8f9;
        }

        .btn-add--product {
            outline: none;
            background: white;
            margin-bottom: 8px;
            color: #007bff;
            border: none;
        }

        .row--product td {
            padding: 0.45rem 0.55rem;
        }

        .error {
            color: #c23527;
            font-size: 14px;
            padding-top: 5px;
            margin-bottom: 0px;
        }

        .sussess {
            background: #e3f1df;
            padding: 15px 20px 25px 20px;
            border-radius: 3px;
            margin-bottom: 0px;
            font-weight: 600;
            border-top: 3px solid #50b83c;
        }

        .lbl-sidebar {
            color: white;
            font-size: 14px;
        }

        .group-info-name-create-order p {
            margin-bottom: 2px;
        }
    </style>

    <div id="page-body" class="d-flex">
        <div id="wp-content">
            <div id="content" class="container-fluid">
                <div class="card">
                    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                        <h5 class="m-0 ">Danh sách sản phẩm</h5>
                        <div class="form-search form-inline">
                            <form action="#">
                                <input type="" class="form-control form-search" placeholder="Tìm kiếm theo tên, danh mục sản phẩm" style="width: 78%;">
                                <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary" style=" margin-left: 360px; margin-top: -65px;">
                            </form>
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 15px;">
                        <div class="analytic">
                            <a href="" class="text-primary">Trạng thái 1<span class="text-muted">(10)</span></a>
                            <a href="" class="text-primary">Trạng thái 2<span class="text-muted">(5)</span></a>
                            <a href="" class="text-primary">Trạng thái 3<span class="text-muted">(20)</span></a>
                        </div>
                        <div class="form-action form-inline py-3">
                            <select class="form-control mr-1" id="">
                                <option>Lọc sản phẩm</option>
                                <option>Sản phẩm còn hàng</option>
                                <option>Số lượng dưới 10</option>
                                <option>Sắp xếp theo nhà cung cấp</option>
                                <option>Sắp xếp giá tăng dần</option>
                                <option>Sắp xếp giá giảm dần</option>
                            </select>
                            <input type="submit" name="btn-search" value="Lưu bộ lọc" class="btn btn-primary">
                        </div>
                        <table class="table table-striped table-checkall">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <input name="checkall" type="checkbox">
                                    </th>
                                    <th scope="col">#</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Số lượng kho</th>
                                    <th scope="col">Nhà cung cấp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 0;

                                foreach ($list_product as $item) {
                                    $count++;
                                    $object = (object) $item;
                                ?>
                                    <tr class="row--product" style=" border-bottom:1px solid #dee2e6; ">
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td><?php echo $count; ?></td>
                                        <td><img src="" alt="" style="width: 45px; height: 45px;"></td>
                                        <td><a href="#" style="color: #4691e0;"><?php echo $object->product_title; ?></a></td>
                                        <td><?php echo number_format($object->price) . "đ"; ?></td>
                                        <td><?php echo $object->cat_title; ?></td>
                                        <td><?php echo date("d/m/Y H:i", $object->date_create); ?></td>
                                        <td><?php echo $object->number_stock; ?></td>
                                        <td><?php echo $object->supplier_name; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>