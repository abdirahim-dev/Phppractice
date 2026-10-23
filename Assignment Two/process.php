<?php

// Soo geli faylka functions.php oo ay ku jiraan functions-ka xisaabinta
require_once "functions.php";

// Hubi in form-ka la soo gudbiyey
if (!isset($_POST["submit"])) {
    echo "<h2>Please submit the registration form first.</h2>";
    echo '<a href="index.html">Back to Registration Form</a>';
    exit;
}

// Ka soo qaad xogta shaqaalaha form-ka

// isset() wuxuu hubiyaa in xogtu jirto,
$employeeName = isset($_POST["employee_name"]) ? trim($_POST["employee_name"]) : "";
$employeeID = isset($_POST["employee_id"]) ? trim($_POST["employee_id"]) : "";
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
$department = isset($_POST["department"]) ? $_POST["department"] : "";
$employmentType = isset($_POST["employment_type"]) ? $_POST["employment_type"] : "";
$basicSalaryInput = isset($_POST["basic_salary"]) ? $_POST["basic_salary"] : "";
$allowanceInput = isset($_POST["allowance"]) ? $_POST["allowance"] : "";
$deductionInput = isset($_POST["deduction"]) ? $_POST["deduction"] : "";
$yearsInput = isset($_POST["years_service"]) ? $_POST["years_service"] : "";

$errors = "";

if (empty($employeeName)) {
    $errors .= "<li>Employee full name must not be empty.</li>";
}

if (empty($employeeID)) {
    $errors .= "<li>Employee ID must not be empty.</li>";
}

if (empty($gender)) {
    $errors .= "<li>Please select a gender.</li>";
} elseif ($gender != "Male" && $gender != "Female") {
    $errors .= "<li>Please select a valid gender.</li>";
}

if (empty($department)) {
    $errors .= "<li>Please select a department.</li>";
} elseif ($department != "Human Resources" && $department != "Finance" &&
          $department != "Information Technology" && $department != "Administration") {
    $errors .= "<li>Please select a valid department.</li>";
}

if (empty($employmentType)) {
    $errors .= "<li>Please select an employment type.</li>";
} elseif ($employmentType != "Full-Time" && $employmentType != "Part-Time") {
    $errors .= "<li>Please select a valid employment type.</li>";
}

if ($basicSalaryInput === "" || !is_numeric($basicSalaryInput)) {
    $errors .= "<li>Basic salary must be a valid number greater than zero.</li>";
} elseif ((float)$basicSalaryInput <= 0) {
    $errors .= "<li>Basic salary must be greater than zero.</li>";
}

// Hubi in allowance-ku yahay tiro, uuna tabanayn

if ($allowanceInput === "" || !is_numeric($allowanceInput)) {
    $errors .= "<li>Allowance must be a valid number.</li>";
} elseif ((float)$allowanceInput < 0) {
    $errors .= "<li>Allowance cannot be negative.</li>";
}

// Hubi in deduction-ku yahay tiro, uuna tabanayn

if ($deductionInput === "" || !is_numeric($deductionInput)) {
    $errors .= "<li>Deduction must be a valid number.</li>";
} elseif ((float)$deductionInput < 0) {
    $errors .= "<li>Deduction cannot be negative.</li>";
}

// Hubi in sannadaha shaqadu yihiin tiro dhan eber ama ka weyn

if ($yearsInput === "" || !is_numeric($yearsInput)) {
    $errors .= "<li>Years of service must be a whole number zero or greater.</li>";
} elseif ((float)$yearsInput < 0) {
    $errors .= "<li>Years of service cannot be negative.</li>";
} elseif ((float)$yearsInput != (int)$yearsInput) {
    $errors .= "<li>Years of service must be a whole number.</li>";
}

// U beddel xogta tirooyin si loogu isticmaalo xisaabinta

$basicSalary = is_numeric($basicSalaryInput) ? (float)$basicSalaryInput : 0;
$allowance = is_numeric($allowanceInput) ? (float)$allowanceInput : 0;
$deduction = is_numeric($deductionInput) ? (float)$deductionInput : 0;
$yearsOfService = is_numeric($yearsInput) ? (int)$yearsInput : 0;

// Xisaabi mushaharka guud, gunnooyinka iyo faa'iidooyinka

$grossSalary = calculateGrossSalary($basicSalary, $allowance);
$bonus = calculateBonus($basicSalary);
$serviceBenefit = calculateServiceBenefit($basicSalary, $yearsOfService);
$employmentAllowance = calculateEmploymentAllowance($basicSalary, $employmentType);
$totalBenefits = calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance);

// Isku dar mushaharka guud iyo faa'iidooyinka si loo helo inta laga jarayo.

$availableSalary = $grossSalary + $totalBenefits;

// Hubi in deduction-ku aanu ka badnayn mushaharka guud iyo faa'iidooyinka

if (is_numeric($deductionInput) && $deduction > $availableSalary) {
    $errors .= "<li>Deduction cannot exceed Gross Salary plus Total Benefits.</li>";
}

// Xisaabi mushaharka saafiga ah, xaaladdiisa iyo mushaharka sannadlaha ah

$netSalary = calculateNetSalary($grossSalary, $totalBenefits, $deduction);
$salaryStatus = checkSalaryStatus($netSalary);
$annualSalary = calculateAnnualSalary($netSalary);

// Hubi in shaqaaluhu doortay dukumenti la soo gelinayo

if (!isset($_FILES["employee_document"]) || $_FILES["employee_document"]["error"] == UPLOAD_ERR_NO_FILE) {
    $errors .= "<li>Please select an employee document.</li>";
} elseif ($_FILES["employee_document"]["error"] != UPLOAD_ERR_OK) {
    // Soo saar khalad haddii upload-ku fashilmo
    $errors .= "<li>The document could not be uploaded. Please try again.</li>";
}

// Bilow variables-ka kaydinaya xogta dukumentiga

$fileName = "";
$fileType = "";
$fileSize = 0;
$tempLocation = "";
$uploadStatus = "Not uploaded";
$destination = "";

// Haddii faylka si sax ah loo soo geliyey, qaado xogtiisa

if (isset($_FILES["employee_document"]) && $_FILES["employee_document"]["error"] == UPLOAD_ERR_OK) {

    $destination = "uploads/" . $fileName;

    if ($fileSize > 2 * 1024 * 1024) {
        $errors .= "<li>The document is larger than 2 MB. Please choose a smaller file.</li>";
    } elseif (file_exists($destination)) {

        // Hubi in fayl magac la mid ah aanu hore ugu jirin galka

        $errors .= "<li>A file with this name already exists. Rename your document and try again.</li>";
    }
}

// Haddii khaladaad jiraan, muuji fariimaha khaladaadka

if (!empty($errors)) {
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Registration Errors</title>';
    echo '<style>body{font-family:Arial;background:#f2f5f9;padding:25px}.box{max-width:760px;margin:auto;background:white;padding:25px;border-radius:8px}h1{color:#a32020}</style>';
    echo '</head><body><div class="box"><h1>Please correct these errors</h1><ul>' . $errors . '</ul>';
    echo '<a href="index.html">Back to Registration Form</a></div></body></html>';

    exit; // Jooji code-ka si aan xog khaldan loo sii wadin
}

// U wareeji dukumentiga galka uploads

if (move_uploaded_file($tempLocation, $destination)) {
    $uploadStatus = "Uploaded successfully";
} else {
    // Soo saar fariin haddii kaydinta faylku fashilanto

    echo '<h2>Upload error</h2><p>The document could not be saved. Check that the uploads folder exists and is writable.</p>';
    echo '<a href="index.html">Back to Registration Form</a>';
    exit;
}

// Ka ilaali qoraalka isticmaalaha inuu HTML ahaan u shaqeeyo

$employeeName = htmlspecialchars($employeeName, ENT_QUOTES, "UTF-8");
$employeeID = htmlspecialchars($employeeID, ENT_QUOTES, "UTF-8");
$gender = htmlspecialchars($gender, ENT_QUOTES, "UTF-8");
$department = htmlspecialchars($department, ENT_QUOTES, "UTF-8");
$employmentType = htmlspecialchars($employmentType, ENT_QUOTES, "UTF-8");
$fileNameDisplay = htmlspecialchars($fileName, ENT_QUOTES, "UTF-8");
$fileTypeDisplay = htmlspecialchars($fileType, ENT_QUOTES, "UTF-8");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Registration Results</title>

    <!--CSS Styles -->
     
    <style>
        body { font-family: Arial, sans-serif; background: #f2f5f9; padding: 25px; color: #222; }
        .container { max-width: 900px; margin: auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 12px #0001; }
        h1 { color: #17365d; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ccd3dc; padding: 10px; text-align: left; }
        th { background: #17365d; color: white; }
        tr:nth-child(even) { background: #f5f7fa; }
        .back { display: inline-block; margin-top: 10px; background: #17365d; color: white; padding: 11px 16px; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">


    <h1>Employee Registration Results</h1>
    <p>Employee registration and document upload completed successfully.</p>

    <!-- Jadwalka lagu soo bandhigayo xogta shaqaalaha iyo xisaabinta -->
    <table>
        <tr><th>Information</th><th>Result</th></tr>

        <!-- Xogta shaqaalaha -->

        <tr><td>Employee Name</td><td><?php echo $employeeName; ?></td></tr>
        <tr><td>Employee ID</td><td><?php echo $employeeID; ?></td></tr>
        <tr><td>Gender</td><td><?php echo $gender; ?></td></tr>
        <tr><td>Department</td><td><?php echo $department; ?></td></tr>
        <tr><td>Employment Type</td><td><?php echo $employmentType; ?></td></tr>
        <tr><td>Years of Service</td><td><?php echo $yearsOfService; ?></td></tr>

        <!-- Mushaharka iyo faa'iidooyinka -->

        <tr><td>Basic Salary</td><td>$<?php echo number_format($basicSalary, 2); ?></td></tr>
        <tr><td>Allowance</td><td>$<?php echo number_format($allowance, 2); ?></td></tr>
        <tr><td>Gross Salary</td><td>$<?php echo number_format($grossSalary, 2); ?></td></tr>
        <tr><td>Bonus</td><td>$<?php echo number_format($bonus, 2); ?></td></tr>
        <tr><td>Service Benefit</td><td>$<?php echo number_format($serviceBenefit, 2); ?></td></tr>
        <tr><td>Employment Allowance</td><td>$<?php echo number_format($employmentAllowance, 2); ?></td></tr>
        <tr><td>Total Benefits</td><td>$<?php echo number_format($totalBenefits, 2); ?></td></tr>
        <tr><td>Deduction</td><td>$<?php echo number_format($deduction, 2); ?></td></tr>
        <tr><td>Net Salary</td><td>$<?php echo number_format($netSalary, 2); ?></td></tr>
        <tr><td>Salary Status</td><td><?php echo $salaryStatus; ?></td></tr>
        <tr><td>Annual Salary</td><td>$<?php echo number_format($annualSalary, 2); ?></td></tr>

        <!-- Xogta dukumentiga la soo geliyey -->

        <tr><td>Uploaded Document Name</td><td><?php echo $fileNameDisplay; ?></td></tr>
        <tr><td>Document Type</td><td><?php echo $fileTypeDisplay; ?></td></tr>
        <tr><td>Document Size</td><td><?php echo number_format($fileSize / 1024, 2); ?> KB</td></tr>
        <tr><td>Upload Status</td><td><?php echo $uploadStatus; ?></td></tr>
    </table>

    
    <a class="back" href="index.html">Back to Registration Form</a>
</div>
</body>
</html>