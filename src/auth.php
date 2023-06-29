<?php
const ADMIN_LOGIN = '1';
const ADMIN_PASSWORD = '1';
/**
 * Авторизує користувача у системі
 * @param $login
 * @param $password
 * @return bool
 */
function login($login, $password) {
    if ($login === ADMIN_LOGIN && ADMIN_PASSWORD === $password) {
        $_SESSION['authorized'] = true;
        return true;
    }
    return false;
}

/**
 * Перевіряє чи користувач авторизований
 * @return bool
 */
function isAuthorized() {
    return isset($_SESSION['authorized']) && $_SESSION['authorized'] === true;
}
/**
 * Видаляє сесію користувача
 */
function logout() {
    unset($_SESSION['authorized']);
}
