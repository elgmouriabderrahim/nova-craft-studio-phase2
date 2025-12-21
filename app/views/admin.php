<section class="container mx-auto py-16">
    <h1 class="text-3xl font-bold mb-6 text-center">
        Messages de contact
    </h1>

    <?php if (empty($messages)): ?>
        <p class="text-center text-gray-500">
            Aucun message pour le moment.
        </p>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-2 border">Nom</th>
                        <th class="p-2 border">Email</th>
                        <th class="p-2 border">Message</th>
                        <th class="p-2 border">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $msg): ?>
                        <tr class="border-t">
                            <td class="p-2 border"><?= htmlspecialchars($msg['name']) ?></td>
                            <td class="p-2 border"><?= htmlspecialchars($msg['email']) ?></td>
                            <td class="p-2 border"><?= nl2br(htmlspecialchars($msg['message'])) ?></td>
                            <td class="p-2 border"><?= $msg['created_at'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>
