<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="./assets/style/style1.css">
</head>


<body id="contact">
    <header>
    <?php include 'header.php'; ?>
</header>



    <main class="contact-page">

        <section class="contact-info">
            <h1>Contactez-nous</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat cupiditate, exercitationem temporibus quasi velit quia, a sed quis mollitia enim delectus modi minima explicabo repellat et? Aspernatur aperiam facere omnis!
                Beatae aliquam doloribus unde quam, minus cum similique repellat perspiciatis at inventore officia! Quisquam, magnam! Laboriosam, quas. Quisquam eveniet cumque nostrum possimus dicta laboriosam, magni ab reprehenderit sint fuga!
            </p>

            <ul>
                <li><strong>Adresse :</strong> Andoharanofotsy , Malaza</li>
                <li><strong>Téléphone :</strong> +261 34 92 337 63</li>
                <li><strong>Email :</strong> joyceritchy3@gmail.com</li>
            </ul>
        </section>

        <section class="contact-form">
            <form action="mailto:joyceritchy3@gmail.com" method="post" enctype="text/plain">

                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="Nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="Message" rows="6" required></textarea>
                </div>

                <button type="submit">Envoyer le message</button>
            </form>
        </section>

    </main>

   <?php
        include "footer.php";
        ?>

</body>

</html>