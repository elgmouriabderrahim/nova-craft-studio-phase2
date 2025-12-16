<?php
require $_SERVER["DOCUMENT_ROOT"]."/data/services.php";?>
<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-8 text-center"><?php echo count($services) === 0 ? "aucune Service disponible": "Nos Services"?></h2>
    <div class="grid md:grid-cols-3 gap-8">
        <?php foreach($services as $service):?>
        <div class="bg-white p-6 shadow-md rounded-lg">
            <h3 class="text-xl font-bold mb-2"><?php echo $service["title"]?></h3>
            <p class="text-gray-600"><?php echo $service["content"]?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
