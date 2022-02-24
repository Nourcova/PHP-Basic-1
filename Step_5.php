<?php
$course = "UX Design";
$enrolled_students = 11;
$price = 150.00;
$on_discount = false;

if ($on_discount==false){

    echo "Course title $course\nEnrolled Students: $enrolled_students\nCourse price: $price Course on discount: No\n";
}
else {
    echo "Course title $course\nEnrolled Students: $enrolled_students\nCourse price: $price\nCourse on discount: Yes\n";
}
?>