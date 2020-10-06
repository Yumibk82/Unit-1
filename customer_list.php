<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    table {
        border-collapse: collapse;
        width: 50%;
    }

    th, td {
        width: 200px;
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Customer list</h1></caption>
    <tr>
        <th style="width: 30px">No.</th>
        <th style="width: 100px">Name</th>
        <th style="width: 80px">Birthday</th>
        <th style="200px">Address</th>
        <th style="200px">Picture</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("Name" => "Mai Văn Hoàn",
            "Birthday" => "1983-08-20",
            "Address" => "Hà Nội",
            "Picture" => "images/img1.jpg"),
        "2" => array("Name" => "Nguyễn Văn Nam",
            "Birthday" => "1983-08-20",
            "Address" => "Bắc Giang",
            "Picture" => "images/img2.jpg"),
        "3" => array("Name" => "Nguyễn Thái Hòa",
            "Birthday" => "1983-08-21",
            "Address" => "Nam Định",
            "Picture" => "images/img3.jpg"),
        "4" => array("Name" => "Trần Đăng Khoa",
            "Birthday" => "1983-08-22",
            "Address" => "Hà Tây",
            "Picture" => "images/img4.jpg"),
        "5" => array("Name" => "Nguyễn Đình Thi",
            "Birthday" => "1983-08-17",
            "Address" => "Hà Nội",
            "Picture" => "images/img5.jpg")
    );
    foreach ($customerlist as $key => $values) {
        echo "<tr style='height: 20px'>";
        echo "<td style='width: 30px'>" . $key . "</td>";
        echo "<td style='width: 100px'>" . $values['Name'] . "</td>";
        echo "<td style='width: 80px'>" . $values['Birthday'] . "</td>";
        echo "<td style='width: 200px'>" . $values['Address'] . "</td>";
        echo "<td><img src =" . $values['Picture'] . "' width = '60px' height ='60px'/></td>";
        echo "</tr>" . "<br>";
    }
    ?>
</table>
<br>
<form method="post">
    From: <input type="text" id="from" name="from" placeholder="y/m/d">
    To: <input type="text" id="to" name="to" placeholder="y/m/d">
    <input type="submit" value="Search">
    <?php
    function searchByDate($customers, $from_date, $to_date)
    {
        if (empty($from_date) && empty($to_date)) {
            return $customers;
        }
        $filtered_customers = [];
        foreach ($customers as $customer) {
            if (!empty($from_date) && (strtotime($customer['Birthday']) < strtotime($from_date))) {
                continue;
            }
            if (!empty($to_date) && (strtotime($customer['Birthday']) < strtotime($to_date))) {
                $filtered_customers[] = $customer;

            }
        }
        return $filtered_customers;
    }

    $from_date = NULL;
    $to_date = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $from_date = $_POST["from"];
        $to_date = $_POST["to"];
    }
    $filtered_customers =
        searchByDate
        ($customerlist, $from_date, $to_date);
    ?>
</form>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php if (count($filtered_customers) === 0): ?>
        <tr>
            <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
        </tr>
    <?php endif; ?>

    <?php foreach ($filtered_customers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 0; ?></td>
            <td><?php echo $customer['Name']; ?></td>
            <td><?php echo $customer['Birthday']; ?></td>
            <td><?php echo $customer['Address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>