<?php
function getFormData() {
    // Create an empty object
    $form_data = new stdClass();

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Personal Information
        $form_data->name = $_POST['name'];
        $form_data->prenom = $_POST['prenom'];
        $form_data->phone_number = $_POST['phone_number'];
        $form_data->address = $_POST['address'];

        // Section 2
        $form_data->experience_prealable = $_POST['experience_prealable'];
        $form_data->si_oui_preciser = $_POST['si_oui_preciser'];
        $form_data->competences_web = $_POST['competences_web'];
        $form_data->competences_c = $_POST['competences_c'];
        $form_data->competences_dev_mobile = $_POST['competences_dev_mobile'];
        $form_data->participation_hackathons = $_POST['participation_hackathons'];

        // Section 3
        $form_data->projet_informatique = $_POST['projet_informatique'];
        $form_data->portfolio_en_ligne = $_POST['portfolio_en_ligne'];
        $form_data->informatique_est_une = $_POST['informatique_est_une'];
        $form_data->travailler_equipe_dev = $_POST['travailler_equipe_dev'];
        $form_data->notions_bases_donnees = $_POST['notions_bases_donnees'];
        $form_data->stages_emplois_informatique = $_POST['stages_emplois_informatique'];
        $form_data->travail_communication_distance = $_POST['travail_communication_distance'];
        $form_data->utilise_des_IDE = $_POST['utilise_des_IDE'];
        $form_data->experience_methodologies_dev = $_POST['experience_methodologies_dev'];
        $form_data->cree_ou_gere_site_web_blog = $_POST['cree_ou_gere_site_web_blog'];

        // Section 4
        $form_data->billing_method = $_POST['billing method'];
    }
    
    echo '<pre>';
    print_r($form_data);
    echo '</pre>';
    
    // Return the form data object
    return $form_data;

    
}
?>