
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Result Calculate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php
// Function to calculate the result with parameterized input for marks
function calculateResult($subject1, $subject2, $subject3, $subject4, $subject5) {
    // Array of marks to easily validate and sum them
    $marks = [$subject1, $subject2, $subject3, $subject4, $subject5];
    
    $totalMarks = array_sum($marks);
    $average = $totalMarks / count($marks);
    $grade = '';
    $isFailed = false;

    // Mark range validation
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid. Marks should be between 0 and 100.";
        }
        // Fail condition
        if ($mark < 33) {
            $isFailed = true;
        }
    }

    if ($isFailed) {
        return [
            'result' => 'Fail',
            'total' => $totalMarks,
            'average' => $average,
            'grade' => 'F'
        ];
    }

    // Determine the grade using switch-case
    switch (true) {
        case $average >= 80 && $average <= 100:
            $grade = 'A+';
            break;
        case $average >= 70 && $average < 80:
            $grade = 'A';
            break;
        case $average >= 60 && $average < 70:
            $grade = 'A-';
            break;
        case $average >= 50 && $average < 60:
            $grade = 'B';
            break;
        case $average >= 40 && $average < 50:
            $grade = 'C';
            break;
        case $average >= 33 && $average < 40:
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }

    return [
        'result' => 'Pass',
        'total' => $totalMarks,
        'average' => $average,
        'grade' => $grade
    ];
}

// Call the function with 5 subject marks as arguments
$result = calculateResult(80, 60, 40, 35, 47); // Example input


?>
 
        <div class="result-section">
        <h2>Result</h2>
            <?php 
                // Display the result
                if (is_string($result)) {
                    // Invalid marks case
                    echo $result;
                } else { ?>
                    <p> <span class="result">Total marks: </span><?php echo $result['total']; ?></p>    
                    <p> <span class="result">Average marks: </span><?php echo $result['average']; ?></p>   
                    <p> <span class="result">Grade: </span><?php echo $result['grade']; ?></p>    

                    <?php
                    if ($result['result'] == 'Fail') { ?>
                        <p><span class="result">Result: </span>Fail</p>
                    <?php
                    }
                }
            ?>
        </div>


