<?php
    include("feedbacks.php");
    foreach ($arr as $feedbacks) {
        echo '
<div class="feedbacks">';
        foreach ($feedbacks as $field => $value) {
            echo '
	<div class="field" id="' . $field . '">' . openssl_decrypt($value, "aes-128-cbc", "0123456789abcdef") . '</div>';
        }
        echo '
</div>';
    }
?>
