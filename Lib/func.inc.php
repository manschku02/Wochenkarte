<?php

/**
 * enthält alle Validierungsfehler (assoziatives Array)
 */
$errors = [];

function validateEmail($email)
{
    global $errors; // Zugriff auf die globale Fehlervariable

    if (strlen($email) == 0) {
        $errors['email'] = "Email darf nicht leer sein";
        return false;
    } else if (strlen($email) > 50) {
        $errors['email'] = "Email zu lang";
        return false;
    } else {
        return true;
    }
}

function validatePassword($password)
{
    global $errors; // Zugriff auf die globale Fehlervariable

    if (strlen($password) == 0) {
        $errors['password'] = "Das Passwort darf nicht leer sein";
        return false;
    } else if (strlen($password) > 50) {
        $errors['password'] = "Passwort zu lang";
        return false;
    } else {
        return true;
    }
}

function validate($email, $password)
{
    return validateEmail($email) & validatePassword($password);
}
