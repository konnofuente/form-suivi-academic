<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fields = [
        'name', 'prenom', 'phone_number', 'email',
        'experience_L1', 'experience_L1_details',
        'web_dev_skills', 'c_skills', 'mobile_dev_skills',
        'hackathon_participation', 'hosted_project',
        'has_portfolio', 'it_is_a', 'worked_with_dev_team',
        'database_knowledge', 'it_jobs_or_internships',
        'comfortable_with_remote_work', 'used_ide',
        'dev_methodologies_experience', 'managed_website_or_blog',
        'billing method'
    ];

    echo "Received the following data:<br>";

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            echo ucfirst(str_replace('_', ' ', $field)) . ": $value<br>";
        }
    }

    // Your code to save the data or perform other actions goes here
}
?>