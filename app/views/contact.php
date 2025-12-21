<section class="container mx-auto py-16">

    <?php if ($msg = display_flash('success')): ?>
    <div class="max-w-xl mx-auto bg-green-100 text-green-700 p-4 rounded mb-4">
        <?= $msg ?>
    </div>
    <?php endif; ?>

    <?php if ($msg = display_flash('error')): ?>
    <div class="max-w-xl mx-auto bg-red-100 text-red-700 p-4 rounded mb-4">
        <?= $msg ?>
    </div>
    <?php endif; ?>


    <h2 class="text-3xl font-bold mb-6 text-center">Contact us</h2>

    <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" method="POST">

        <input type="text" name="name" placeholder="your name" class="w-full border px-4 py-2 rounded-lg" value="<?= $name ?>">

        <?php if (isset($errors['name'])): ?>
        <span class="text-red-500"><?= $errors['name'] ?></span>
        <?php endif; ?>

        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg" value="<?= $email ?>">

        <?php if (!empty($errors['email'])): ?>
        <span class="text-red-500"><?= $errors['email'] ?></span>
        <?php endif; ?>

        <textarea name="message" placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg"><?= $message ?></textarea>

        <?php if (!empty($errors['message'])): ?>
        <span class="text-red-500"><?= $errors['message'] ?></span>
        <?php endif; ?>

        <?php if (!empty($errors['general'])): ?>
        <span class="text-red-500"><?= $errors['general'] ?></span>
        <?php endif; ?>

        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Envoyer
        </button>
    </form>
</section>