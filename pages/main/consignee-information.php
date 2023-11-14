<?php
    
$sql_province = "SELECT * FROM province";
$result_province = mysqli_query($conn, $sql_province);

if (isset($_POST["save_address_click"])) {
    $full_name = htmlspecialchars($_POST['full_name']);
    // var_dump($full_name); exit;
    $sdt = htmlspecialchars($_POST['sdt']);
    $email = htmlspecialchars($_POST['email']);
    $province = htmlspecialchars($_POST['province']);
    $district = htmlspecialchars($_POST['district']);
    $wards = htmlspecialchars($_POST['wards']);
    $address_detail = htmlspecialchars($_POST['address']);
    // $is_default = isset($_POST['isDefault']) ? 1 : 0;
    $maKH = $_SESSION['MaKH'];
    var_dump($full_name, $sdt, $email, $province, $district, $wards, $address_detail, $maKH);
    // Thực hiện truy vấn SQL để chèn dữ liệu vào bảng diachinhanhang
    $sql_insert_address = "INSERT INTO `diachinhanhang` (`MaKH`, `TenNguoiNhan`, `DiaChi`, `ThanhPho`, `QuanHuyen`, `PhuongXa`, `SoDienThoai`, `Email`)
                                                VALUES ('$maKH','$full_name', '$address_detail', $province, $district,  $wards, '$sdt', '$email')";

    // Thực thi truy vấn
    if (mysqli_query($conn, $sql_insert_address)) {
        // Nếu thành công, chuyển hướng đến trang checkout
        header('Location: ?page=checkout');
        exit();
    } else {
        // Nếu có lỗi, hiển thị thông báo hoặc xử lý theo ý của bạn
        echo "Error: " . $sql_insert_address . "<br>" . mysqli_error($conn);
    }
}
?>

<div id="teko-modal-lo9t136vm2jzjf9v1hs" style="position: fixed; inset: 0px; z-index: 1051; display: flex; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.1);">
    <div class="css-1272naz"></div>
    <div class="teko-modal teko-modal-show css-t2ptn2" style="opacity: 1; transform: translateY(0px);">
        <div class="teko-modal-content">
            <div class="teko-modal-close css-1qzn8fv">
                <i onclick="window.history.back(-1);" class="fa-solid fa-xmark"></i>
            </div>
            <div class="teko-modal-header">
                <div type="title" class="teko-modal-title css-1cp1h79">Thông tin người nhận hàng</div>
            </div>
            <div class="teko-modal-body">
                <div class="css-1g8ztiq">
                    <form action="" class="teko-form-vertical css-kxydk6" id="myForm" method="POST">
                        <div class="teko-row teko-form-item css-iu028d">
                            <div class="teko-col teko-form-item-label css-1yvcaye">
                                <label for="name" class="teko-form-item-no-colon teko-form-item-required css-15ognui" style="height: 40px;">
                                    <div type="body" color="textTitle" class="css-3mfztx">Họ tên</div>
                                </label>
                            </div>
                            <div class="teko-col teko-form-item-control css-rznjps">
                                <div class="teko-form-item-control-input">
                                    <div class="teko-form-item-control-input-content">
                                        <div class="css-1npt3uz">
                                            <div class="input-container css-kwckz4" height="40">
                                                <input name="full_name" required id="name" type="text" placeholder="Vui lòng nhập tên người nhận" maxlength="255" class="css-1acir1a" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teko-row teko-row-space-between css-1qrgscw">
                            <div class="teko-col css-17ajfcv" style="flex: 0 0 49%;">
                                <div class="teko-row teko-form-item css-iu028d">
                                    <div class="teko-col teko-form-item-label css-1yvcaye">
                                        <label for="telephone" class="teko-form-item-no-colon teko-form-item-required css-15ognui" style="height: 40px;">
                                            <div type="body" color="textTitle" class="css-3mfztx">Số điện thoại</div>
                                        </label>
                                    </div>
                                    <div class="teko-col teko-form-item-control css-rznjps">
                                        <div class="teko-form-item-control-input">
                                            <div class="teko-form-item-control-input-content">
                                                <div class="css-1npt3uz">
                                                    <div class="input-container css-kwckz4" height="40">
                                                        <input name="sdt" required id="telephone" type="text" placeholder="Nhập số điện thoại" maxlength="255" class="css-1acir1a" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teko-col css-17ajfcv" style="flex: 0 0 49%;">
                                <div class="teko-row teko-form-item css-iu028d">

                                    <div class="teko-col teko-form-item-label css-1yvcaye"><label for="email" class="teko-form-item-no-colon teko-form-item-required css-15ognui" style="height: 40px;">
                                            <div type="body" color="textTitle" class="css-3mfztx">Email</div>
                                        </label>
                                    </div>
                                    <div class="teko-col teko-form-item-control css-rznjps">
                                        <div class="teko-form-item-control-input">
                                            <div class="teko-form-item-control-input-content">
                                                <div class="css-1npt3uz">
                                                    <div class="input-container css-kwckz4" height="40">
                                                        <input name="email" required id="email" type="text" placeholder="Nhập email của bạn" maxlength="255" class="css-1acir1a" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="css-1veiyrs">
                            <div width="100%" color="divider" class="css-yae08c"></div>
                        </div>
                        <div type="title" class="css-6k3r5e">Địa chỉ nhận hàng</div>
                        <div class="teko-row teko-row-space-between css-1qrgscw">
                            <div class="teko-col css-17ajfcv" style="flex: 0 0 49%;">
                                <div class="teko-row teko-form-item css-iu028d">
                                    <div class="teko-col teko-form-item-label css-1yvcaye"><label for="provinceCode" class="teko-form-item-no-colon teko-form-item-required css-15ognui" style="height: 40px;">
                                            <div type="body" color="textTitle" class="css-3mfztx">Tỉnh/Thành phố</div>
                                        </label>
                                    </div>
                                    <div class="teko-col teko-form-item-control css-rznjps">
                                        <div class="teko-form-item-control-input">
                                            <div class="teko-form-item-control-input-content">
                                                <div id="provinceCode" tabindex="-1" class="css-1npt3uz">
                                                    <div class="css-cssveg">
                                                        <div class="css-cg6cr2">
                                                            <select id="province" name="province" class="form-control">
                                                                <option value="">Chọn một tỉnh</option>
                                                                <!-- populate options with data from your database or API -->
                                                                <?php
                                                                while ($row = mysqli_fetch_assoc($result_province)) {
                                                                ?>
                                                                    <option value="<?php echo $row['province_id'] ?>">
                                                                        <?php echo $row['name'] ?>
                                                                    </option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="css-1ezclw1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teko-col css-17ajfcv" style="flex: 0 0 49%;">
                                <div class="teko-row teko-form-item css-iu028d">
                                    <div class="teko-col teko-form-item-label css-1yvcaye">
                                        <label for="districtCode" class="teko-form-item-no-colon teko-form-item-required css-15ognui" style="height: 40px;">
                                            <div type="body" color="textTitle" class="css-3mfztx">Quận/Huyện</div>
                                        </label>
                                    </div>
                                    <div class="teko-col teko-form-item-control css-rznjps">
                                        <div class="teko-form-item-control-input">
                                            <div class="teko-form-item-control-input-content">
                                                <div class="css-1npt3uz">
                                                    <div class="css-cssveg">
                                                        <div class="css-wds49r">
                                                            <div class="css-w9zq4w">
                                                                <select id="district" name="district" class="form-control">
                                                                    <option value="">Chọn một quận/huyện</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="css-1ezclw1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teko-row teko-row-space-between css-15vgeje">
                            <div class="teko-col css-17ajfcv" style="flex: 0 0 49%;">
                                <form action="" method="get">
                                    <div class="teko-row teko-form-item css-iu028d">
                                        <div class="teko-col teko-form-item-label css-1yvcaye"><label for="wardCode" class="teko-form-item-no-colon teko-form-item-required css-15ognui" style="height: 40px;">
                                                <div type="body" color="textTitle" class="css-3mfztx">Phường/Xã</div>
                                            </label></div>
                                        <div class="teko-col teko-form-item-control css-rznjps">
                                            <div class="teko-form-item-control-input">
                                                <div class="teko-form-item-control-input-content">
                                                    <div id="wardCode" tabindex="-1" class="css-1npt3uz">
                                                        <div class="css-cssveg">
                                                            <div disabled="" class="css-wds49r">
                                                                <div class="css-w9zq4w">
                                                                    <select id="wards" name="wards" class="form-control">
                                                                        <option value="">Chọn một xã</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="css-1ezclw1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="teko-col css-17ajfcv" style="flex: 0 0 49%;">
                                <div class="teko-row teko-form-item css-iu028d">
                                    <div class="teko-col teko-form-item-label css-1yvcaye"><label for="address" class="teko-form-item-no-colon teko-form-item-required css-15ognui" style="height: 40px;">
                                            <div type="body" color="textTitle" class="css-3mfztx">Địa chỉ cụ thể</div>
                                        </label>
                                    </div>
                                    <div class="teko-col teko-form-item-control css-rznjps">
                                        <div class="teko-form-item-control-input">
                                            <div class="teko-form-item-control-input-content">
                                                <div class="css-1npt3uz">
                                                    <div class="input-container css-kwckz4" height="40">
                                                        <input required id="address" name="address" type="text" placeholder="Số nhà, ngõ, tên đường..." maxlength="255" class="css-1acir1a" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teko-row teko-row-end css-1qrgscw">
                            <div class="teko-row teko-form-item css-iu028d">
                                <div class="teko-col teko-form-item-control css-rznjps">
                                    <div class="teko-form-item-control-input">
                                        <div class="teko-form-item-control-input-content"><label value="false" id="isDefault" class="check-box css-1u2186j">
                                                <div class="css-l24w9c"><input type="checkbox" class="css-lc01j1">
                                                    <div class="checkbox-inner css-gfk8lf"><svg fill="none" viewBox="0 0 24 24" size="12" class="css-u5ggi9" color="transparent" height="12" width="12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg></div>
                                                </div>
                                                <div type="body" class="checkbox-label css-6r3s23" style="flex: 1 1 0%;">Đặt làm mặc định</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teko-row teko-row-end css-1mfzix3">
                            <a href="javascript:window.history.back()">
                                <input name="cancel_click" height="2.5rem" color="primary500" class="css-125hckg" type="submit" value="Hủy bỏ">
                            </a>
                            <input height="2.5rem" name="save_address_click" value="Lưu địa chỉ" color="white" class="css-oyymsr" type="submit">
                        </div>
                    </form>
                    <div style="margin-top: 40px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>