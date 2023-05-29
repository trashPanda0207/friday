<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function get_values(...$names) {
            $values = array();
            foreach ($names as $name) {
                if (isset($_POST[$name])) {
                    $values[$name] = $_POST[$name];
                }
            }
            return $values;
        }

        function is_checkbox_checked() {
            $checkboxes = array(
                'ram' => '安裝記憶體',
                'cdrom' => '安裝光碟機',
                'monitor' => '安裝螢幕'
            );
            
            foreach ($checkboxes as $checkbox => $message) {
                if (isset($_POST[$checkbox]) && $_POST[$checkbox] == 'on') { // isset
                    echo $message . '<br>';
                }
            }

        }
        
        function main() {
            $values = get_values('name', 'address', 'computer', 'CPU', 'ram', 'cdrom', 'monitor');
            echo '姓名：' . $values['name'] . '<br>';
            echo '地址：' . $values['address'] . '<br>';
            echo 'CPU：' . $values['CPU'] . '<br>';
            echo '電腦系統：' . $values['computer'] . '<br>';
            is_checkbox_checked();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            main();
        }
    ?>
</body>
</html>