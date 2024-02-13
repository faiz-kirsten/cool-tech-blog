<div class="cookie-notice">
    This website uses cookies to ensure you get the best experience on our website.
    <button class="accept-btn" onclick="acceptCookies()">Accept</button>
</div>

<script>
    // Show the cookie notice to the user
    function acceptCookies() {
        document.cookie = "cookie_accepted=true;max-age=31536000"; // Set cookie for one year
        document.querySelector('.cookie-notice').style.display = 'none';
    }

    // Hide the cookie notice if the user has already accepted the cookies
    if (document.cookie.indexOf('cookie_accepted=true') > -1) {
        document.querySelector('.cookie-notice').style.display = 'none';
    }
</script>
