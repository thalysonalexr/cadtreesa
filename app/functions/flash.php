<?php
/**
 * Set a flash message
 *
 * @param string $key     Sets the key for the message
 * @param string $message Flash message
 * @param string $type    Type of alert in the bootstrap of twitter, being able to be success, info, warning or danger. Danger is the default
 */
function flash( $key, $message, $type="danger" ) {
    if (!isset($_SESSION["flash"][$key]))
        $_SESSION["flash"][$key] = '<div class="container alert alert-' . $type . '">' . $message . '</div>';
}

/**
 * Returns if there is a message
 *
 * @param string $key Message key to be returned
 *
 * @return string Flash or empty message
 */
function get( $key ) {
    if (isset($_SESSION["flash"][$key])) {
        $message = $_SESSION["flash"][$key];
        unset( $_SESSION["flash"][$key] );
        return $message?? "";
    }
}