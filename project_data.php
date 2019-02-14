
    <?php
    echo "รหัสนักศึกษา : ".$sid = $_REQUEST['sid'];
    echo "<br>";
    echo "ชื่อ : ".$fname = $_REQUEST['fname'];
    echo "<br>";
    echo "นามสกุล : ".$lname = $_REQUEST['lname'];
    echo "<br>";
    echo "สาขาวิชา : ".$program = $_REQUEST['program'];
    echo "<br>";
    echo "คณะ : ".$facilty = $_REQUEST['facilty'];
    echo "<br>";
    echo "ปี : ".$sid_year = $_REQUEST['sid_year'];
    echo "<br>";
    echo "โครงการชื่อไทย : ".$prj_name_th = $_REQUEST['prj_name_th'];
    echo "<br>";
    echo "โครงการชื่ออังกฤษ : ".$prj_name_en = $_REQUEST['prj_name_en'];
    echo "<br>";
    $prj_tool = $_REQUEST['prj_tool'];
    print_r ($prj_tool);
    echo "<br>";
    echo "อาจารย์ที่ปริกษา : ".$prj_advisor = $_REQUEST['prj_advisor'];
    echo "<br>";

