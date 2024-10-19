

<!-- Start HTML  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students result calculate and grading system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<!-- End HTML -->


<!-- Start PHP -->
<?php
// Function to calculate total, average, and grade
function calculateResult($physics, $chemistry, $math, $biology, $english) {
    // Validate each subject's mark range
    if ($physics < 0 || $physics > 100) {
        echo "Mark range is invalid for Subject physics.<br>";
        return;
    }
    if ($chemistry < 0 || $chemistry > 100) {
        echo "Mark range is invalid for Subject chemistry.<br>";
        return;
    }
    if ($math < 0 || $math > 100) {
        echo "Mark range is invalid for Subject math.<br>";
        return;
    }
    if ($biology < 0 || $biology > 100) {
        echo "Mark range is invalid for Subject biology.<br>";
        return;
    }
    if ($english < 0 || $english > 100) {
        echo "Mark range is invalid for Subject english.<br>";
        return;
    }

    // Fail condition: If any subject is below 33
    if ($physics < 33 || $chemistry < 33 || $math < 33 || $biology < 33 || $english < 33) {
        echo "you have failed.<br>";
        return;
    }

    // Calculate total and average marks
    $total = $physics + $chemistry + $math + $biology + $english;
    $average = $total / 5;

    // Determine grade using switch-case
    switch (true) {
        case ($average >= 80 && $average <= 100):
            $grade = "A+";
            break;
        case ($average >= 70 && $average <= 79):
            $grade = "A";
            break;
        case ($average >= 60 && $average <= 69):
            $grade = "A-";
            break;
        case ($average >= 50 && $average <= 59):
            $grade = "B";
            break;
        case ($average >= 40 && $average <= 49):
            $grade = "C";
            break;
        case ($average >= 33 && $average <= 39):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }
    ?>
        <!-- Output total marks, average, and grade -->
        <div class="resutl-section">
            <h1>Result</h1>
            <p><span class="heading">Total marks: </span> <?php echo $total; ?></p>
            <p><span class="heading">Average marks: </span> <?php echo $average; ?></p>
            <p><span class="heading">Grade: </span> <?php echo $grade; ?></p>
        </div>
    
    <?php
}

// You can push your own marks for five subjects
$physics = 85;
$chemistry = 76;
$math = 90;
$biology = 87;
$english = 68;

// Call the function to calculate the result
calculateResult($physics, $chemistry, $math, $biology, $english);

?>

<!-- End PHP -->
