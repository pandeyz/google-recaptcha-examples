<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google reCAPTCHA v3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-half">
					<form method="POST" action="verify.php" method="post">
                        <h1 class="title">
                            reCAPTCHA v2 checkbox example
                        </h1>

                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input type="text" name="name" class="input" placeholder="Name" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input type="email" name="email" class="input" placeholder="Email Address" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Message</label>
                            <div class="control">
                                <textarea name="message" class="textarea" placeholder="Message" required></textarea>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-link">Send Message</button>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="sitekey"></div>
                    </form>

                </div>
            </div>
        </div>
    </section>

</body>

</html>