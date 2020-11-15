<?php
// Function to prevent for example <script>alert(1);</script entries in database.
function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}