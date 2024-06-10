<?php
//Sử dụng switch, case để tìm số tương ứng với ngày
function xuatThu($so){
    switch ($so) {
        case 1:
            return "Chủ nhật";
            break;
        case 2:
            return "Thứ hai";
            break;
        case 3:
            return "Thứ ba";
            break;
        case 4:
            return "Thứ tư";
            break;
        case 5:
            return "Thứ năm";
            break;
        case 6:
            return "Thứ sáu";
            break;
        case 7:
            return "Thứ bảy";
            break;
    default:
            return "Vui lòng nhập từ 1 đến 7";
            break;
    }
}
//Kiểm tra và xuất số tương ứng với ngày
$so = 5;
echo "Số $so tương ứng với: ".xuatThu($so)."<br>";
//Hàm tính số ngày trong tháng và năm
function soNgayTrongThang($thang, $nam){
    switch ($thang) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            return 31;
            case 4: case 6: case 9: case 11:
                return 30;
                case 2:
                    if(($nam % 4 == 0 && $nam %100 != 0) || ($nam % 400 == 0)){
                        return 29;
                    }
                    else{
                        return 28;
                    }
        default:
            return "Tháng nhập không hợp lệ!";
            break;
    }
}
//Kiểm tra tháng và năm để xuất ra số ngày trong tháng
$thang = 5;
$nam = 2022;
echo "Tháng $thang năm $nam có: " .soNgayTrongThang($thang, $nam)."ngày.";

?>