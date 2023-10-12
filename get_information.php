<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal Information
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // Pour L1
    $experience_L1 = filter_input(INPUT_POST, 'experience_L1', FILTER_SANITIZE_SPECIAL_CHARS);
    $experience_L1_details = filter_input(INPUT_POST, 'experience_L1_details', FILTER_SANITIZE_SPECIAL_CHARS);

    // Pour L2
    $web_dev_skills = filter_input(INPUT_POST, 'web_dev_skills', FILTER_SANITIZE_SPECIAL_CHARS);
    $c_skills = filter_input(INPUT_POST, 'c_skills', FILTER_SANITIZE_SPECIAL_CHARS);
    $mobile_dev_skills = filter_input(INPUT_POST, 'mobile_dev_skills', FILTER_SANITIZE_SPECIAL_CHARS);
    $hackathon_participation = filter_input(INPUT_POST, 'hackathon_participation', FILTER_SANITIZE_SPECIAL_CHARS);

    // Additional Information
    $hosted_project = filter_input(INPUT_POST, 'hosted_project', FILTER_SANITIZE_SPECIAL_CHARS);
    $has_portfolio = filter_input(INPUT_POST, 'has_portfolio', FILTER_SANITIZE_SPECIAL_CHARS);
    $it_is_a = filter_input(INPUT_POST, 'it_is_a', FILTER_SANITIZE_SPECIAL_CHARS);
    $worked_with_dev_team = filter_input(INPUT_POST, 'worked_with_dev_team', FILTER_SANITIZE_SPECIAL_CHARS);
    $database_knowledge = filter_input(INPUT_POST, 'database_knowledge', FILTER_SANITIZE_SPECIAL_CHARS);
    $it_jobs_or_internships = filter_input(INPUT_POST, 'it_jobs_or_internships', FILTER_SANITIZE_SPECIAL_CHARS);
    $comfortable_with_remote_work = filter_input(INPUT_POST, 'comfortable_with_remote_work', FILTER_SANITIZE_SPECIAL_CHARS);
    $used_ide = filter_input(INPUT_POST, 'used_ide', FILTER_SANITIZE_SPECIAL_CHARS);
    $dev_methodologies_experience = filter_input(INPUT_POST, 'dev_methodologies_experience', FILTER_SANITIZE_SPECIAL_CHARS);
    $managed_website_or_blog = filter_input(INPUT_POST, 'managed_website_or_blog', FILTER_SANITIZE_SPECIAL_CHARS);

    // Billing Method
    $billing_method = filter_input(INPUT_POST, 'billing method', FILTER_SANITIZE_SPECIAL_CHARS);

    // Echo the data (For demonstration purposes)
    echo "Received the following data:<br>";
    echo "Name: $name<br>";
    echo "Prenom: $prenom<br>";
    echo "Phone Number: $phone_number<br>";
    echo "Email: $email<br>";
    echo "Experience L1: $experience_L1<br>";
    echo "Experience L1 Details: $experience_L1_details<br>";
    echo "Web Dev Skills: $web_dev_skills<br>";
    echo "C Skills: $c_skills<br>";
    echo "Mobile Dev Skills: $mobile_dev_skills<br>";
    echo "Hackathon Participation: $hackathon_participation<br>";
    echo "Hosted Project: $hosted_project<br>";
    echo "Has Portfolio: $has_portfolio<br>";
    echo "IT is a: $it_is_a<br>";
    echo "Worked with Dev Team: $worked_with_dev_team<br>";
    echo "Database Knowledge: $database_knowledge<br>";
    echo "IT Jobs or Internships: $it_jobs_or_internships<br>";
    echo "Comfortable with Remote Work: $comfortable_with_remote_work<br>";
    echo "Used IDE: $used_ide<br>";
    echo "Dev Methodologies Experience: $dev_methodologies_experience<br>";
    echo "Managed Website or Blog: $managed_website_or_blog<br>";
    echo "Billing Method: $billing_method<br>";
} else {
    echo "Invalid request.";
}
?>