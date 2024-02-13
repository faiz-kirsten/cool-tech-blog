<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-layout>
        {{-- Outputs the Terms of Use or the privacy policy  --}}
        @if ($subsection === 'tos')
            <h1> Terms of Use</h1>
            <p>Welcome to Cool Tech, operated by Cool Tech. By accessing and using this website, you
                agree to be bound by the following terms and conditions:</p>

            <ol>
                <li>Acceptance of Terms
                    <p>By accessing and using this website, you agree to comply with and be bound by these terms of use.
                        If you do not agree with these terms, please refrain from using the website.</p>
                </li>
                <li>Intellectual Property
                    <p>All content on this website, including text, graphics, logos, images, and software, is the
                        property of Cool Tech and protected by copyright and intellectual property laws.</p>
                </li>
                <li>User Conduct
                    <p>You agree to use this website for lawful and ethical purposes. You must not engage in any
                        activities that could harm the website, its users, or violate any applicable laws.</p>
                </li>
                <li>Privacy
                    <p>Your use of this website is also governed by our Privacy Policy, which outlines how we collect,
                        use, and protect your personal information.</p>
                </li>
                <li>Disclaimer
                    <p>The information provided on this website is for general informational purposes only. We do not
                        guarantee the accuracy or completeness of the content. You use the information at your own risk.
                    </p>
                </li>
                <li>Changes to Terms
                    <p>Cool Tech reserves the right to update or modify these terms of use at any time. Your
                        continued use of the website after any changes constitutes your acceptance of the updated terms.
                    </p>
                </li>
            </ol>
            <p>
                By using our website, you acknowledge that you have read and understand our Terms of Use.
            </p>
        @else
            <h1>Privacy Policy </h1>
            <p>Your privacy is important to us. Our Privacy Policy outlines how we collect, use, disclose, and protect
                your personal information:</p>

            <ol>
                <li>Information Collection
                    <p>We collect information that you voluntarily provide to us, such as your name, email address, and
                        other contact details when you interact with our website..</p>
                </li>
                <li>Use of Information
                    <p>We may use your personal information to provide you with services, respond to your inquiries, and
                        improve our website. We do not share your information with third parties except as required by
                        law.</p>
                </li>
                <li>Security
                    <p>We take reasonable measures to protect your personal information from unauthorized access,
                        disclosure, or alteration.</p>
                </li>
                <li>Cookies
                    <p>Our website may use cookies to improve user experience. You can adjust your browser settings to
                        manage or disable cookies.</p>
                </li>
                <li>Links to Other Websites
                    <p>Our website may contain links to other websites. We are not responsible for the privacy practices
                        or content of those websites.</p>
                </li>
                <li>Changes to Privacy Policy:
                    <p>We reserve the right to update our Privacy Policy. Any changes will be posted on this page.</p>
                </li>
            </ol>
            <p>
                By using our website, you acknowledge that you have read and understand our Privacy
                Policy.
            </p>
        @endif
    </x-layout>
</body>

</html>
