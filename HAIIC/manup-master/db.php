<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "project";

    $con = new mysqli($host, $user, $pass, $dbname);

    $paperTable = "CREATE TABLE Paper_Details(
        Paper_ID varchar(50) primary key,
        Paper_Title varchar(100) not null,
        Abstract_link varchar(200) not null
    )";

    $fAuthorTable = "CREATE table FAuthor_Details(
        FAuthor_name varchar(50) not null,
        FAuthor_aff varchar(100) not null,
        FAuthor_mail varchar(200) not null
    )";

    $CorrAuthorTable = "CREATE table CorrAuthor_Details(
        CorrAuthor_name varchar(50) not null,
        CorrAuthor_aff varchar(100) not null,
        CorrAuthor_mail varchar(200) not null
    )";

    $OtherAuthorTable = "CREATE table OtherAuthor_Details(
        OtherAuthor_name varchar(50) not null,
        OtherAuthor_aff varchar(100) not null,
        OtherAuthor_mail varchar(200) not null
    )";

    $PaperproofTable = "CREATE table Paper_Proof_Table(
        topics varchar(100) not null,
        Author_File varchar(100) not null,
        Author_proof varchar(200) not null
    )";
    
    if (isset($_POST['Paper_ID']) && isset($_POST['Paper_title']) && isset($_POST['abstract_link']))  {
        $paperId = $_POST['Paper_ID'];
        $paperTitle = $_POST['Paper_title'];
        $abstractLink = $_POST['abstract_link'];
    }
    
    if (isset($_POST['FAuthor_name']) && isset($_POST['FAuthor_aff']) && isset($_POST['FAuthor_mail'])) {
        $FAuthorName = $_POST['FAuthor_name'];
        $FAuthorAff = $_POST['FAuthor_aff'];
        $FAuthorMail = $_POST['FAuthor_mail'];
    } 
    
    if (isset($_POST['CorrAuthor_name']) && isset($_POST['CorrAuthor_aff']) && isset($_POST['CorrAuthor_mail'])) {
        $CorrAuthorName = $_POST['CorrAuthor_name'];
        $CorrAuthorAff = $_POST['CorrAuthor_aff'];
        $CorrAuthorMail = $_POST['CorrAuthor_mail'];
    }  

    if (isset($_POST['OtherAuthor_name']) && isset($_POST['OtherAuthor_aff']) && isset($_POST['OtherAuthor_mail'])) {
        $OtherAuthorName = $_POST['OtherAuthor_name'];
        $OtherAuthorAff = $_POST['OtherAuthor_aff'];
        $OtherAuthorMail = $_POST['OtherAuthor_mail'];
    }

    if (isset($_POST['topics']) && isset($_POST['Author_File']) && isset($_POST['Author_proof']) ) {
        $topicsForm = $_POST['topics'];
        $AuthorFile = $_POST['Author_File'];
        $AuthorProof = $_POST['Author_proof'];
    }
?>