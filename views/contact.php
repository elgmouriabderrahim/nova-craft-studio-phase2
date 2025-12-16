<section class="container mx-auto py-16">
    <?php
    if (preg_match($name_regex, $name) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($message) >= 5):
        echo "<div class='max-w-xl mx-auto bg-green-100 text-green-700 p-4 rounded mb-4'>
        Merci $name! Votre message a ete envoye avec succes.
        </div>";
        $name = $email = $message = "";
        $succes = true;
    endif;
    ?>
    
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>
    <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" action="https://formspree.io/f/xqarlyaz" method="POST">
        <input type="text" name="name" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg" value="<?php echo $name; ?>">
        <span class= 'text-red-500'>*</span>
        <?php if(!empty($_POST) && !preg_match($name_regex, $name) && !$succes)
            if($name == "")
                echo "<span class= 'text-red-500'>please eneter your name</span>";
            else
                echo "<span class= 'text-red-500'>please eneter a valid name</span>";
        ?>

        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg" value="<?php echo $email; ?>">
        <span class= 'text-red-500'>*</span>
        <?php if(!empty($_POST) && !filter_var($email, FILTER_VALIDATE_EMAIL) && !$succes)
            if($email == "")
                echo "<span class= 'text-red-500'>please eneter your email</span>";
            else
                echo "<span class= 'text-red-500'>please eneter a valid email</span>";
        ?>

        <textarea placeholder="Votre message" name="message" class="w-full border px-4 py-2 rounded-lg"><?php echo $message; ?></textarea>
        <span class= 'text-red-500'>*</span>
        <?php if(!empty($_POST) && strlen($message) < 5 && !$succes)
            if($message == "")
                echo "<span class= 'text-red-500'>please eneter a message</span>";
            else
                echo "<span class= 'text-red-500'>message must have at least 5 characters</span>";
        ?>
        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
</section>
