<?php

class FormGenerator
{

    public function generateInput($name, $type = 'text', $placeholder = '', $value = '')
    {
        echo "<input type='$type' name='$name' placeholder='$placeholder' value='$value' class='form-control mb-3'>";
    }

    public function generateTextarea($name, $placeholder = '', $value = '')
    {
        echo "<textarea name='$name' placeholder='$placeholder' class='form-control mb-3'>$value</textarea>";
    }

    public function generateSelect($name, $options = array(), $selected = '')
    {
        echo "<select  class='form-control form-select mb-3' aria-label='Default select example'>";
        foreach ($options as $value => $label) {
            echo "<option value='$value'";
            if ($selected == $value) {
                echo " selected";
            }
            echo ">$label</option>";
        }
        echo "</select>";
    }

    public function generateCheckbox($name, $value, $label, $checked = false)
    {
        echo "<div class='form-check'>";
        echo "<input type='checkbox' name='$name' value='$value' class='form-check-input mb-3'";
        if ($checked) {
            echo " checked";
        }
        echo ">";
        echo "<label class='form-check-label'>$label</label>";
        echo "</div>";
    }

    public function generateRadio($name, $value, $label, $checked = false)
    {
        echo "<div class='form-check'>";
        echo "<input type='radio' name='$name' value='$value' class='form-check-input mb-3'";
        if ($checked) {
            echo " checked";
        }
        echo ">";
        echo "<label class='form-check-label'>$label</label>";
        echo "</div>";
    }

    public function generateSubmitButton($value)
    {
        echo "<input type='submit' value='$value' class='btn btn-primary'>";
    }

    public function startForm($action = '', $method = 'post')
    {
        echo "<div class='w-50 m-auto mt-5'>";
        echo "<form action='$action' method='$method'>";
    }

    public function endForm()
    {
        echo "</form>";
        echo "</div>";
    }
}

$user1 = new FormGenerator();

$user1->startForm('process.php');

$user1->generateInput('name', 'text', 'Name');
$user1->generateInput('surname', 'text', 'Surname');
$user1->generateSelect('genre', array('male' => 'male', 'female' => 'female'), $selected = 'male');
$user1->generateInput('age', 'number', 'Age');
$user1->generateTextarea('bio', 'Bio');

$user1->generateSubmitButton('Submit');

$user1->endForm();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

</body>

</html>