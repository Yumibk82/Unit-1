<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
<style>
    table{
        border-collapse: collapse;
        width: 100px;
    }
    td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>

<body>
<table border="0">
    <caption><h1>Customer list</h1></caption>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Birthday</td>
        <td>Address</td>
        <td>Picture</td>
    </tr>
</table>
<?php
    $customer_list =array(
        "1" => array("Name"=>"Tran Thi Thu Hang",
                "Birthday"=>"01/02/1982",
                "Address"=>"Ha Noi",
                "Picture"=>"images/image1"),

         "2" => array("Name"=>"Dam Thi Kieu Trinh",
                "Birthday"=>"05/02/2002",
                "Address"=>"Hai Duong",
                "Picture"=>"images/image2"),
        "3" => array("Name"=>"Nguyen Cong Trong",
                "Birthday"=>"01/02/1995",
                "Address"=>"Hai Duong",
                "Picture"=>"images/image3"),
        "4" => array("Name"=>"Nguyen Duc Viet",
            "Birthday"=>"01/02/1997",
            "Address"=>"Ha Noi",
            "Picture"=>"images/image4"));


    foreach($customer_list as $key =>$values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['Name']."</td>";
        echo "<td>".$values['Birthday']."</td>";
        echo "<td>".$values['Address']."</td>";
        echo "<td><image src='".$values['Picture']."' width='60px' height='60px'/></td>";
        echo "</tr>";

    }
?>
</body>
</html>
