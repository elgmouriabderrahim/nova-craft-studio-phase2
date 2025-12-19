<div class="w-full pt-[80px] min-h-[calc(100vh-70px)] flex flex-col items-center gap-12 lg:flex-row lg:justify-center">
    
    <div class="bg-white shadow-lg rounded-xl w-[90%] max-w-[600px] p-8 flex flex-col gap-6">
        
        <div class="flex flex-col items-center gap-2">
            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center text-3xl font-bold text-gray-600">
                <?= strtoupper(substr($user['name'], 0, 1)) ?>
            </div>
            <h1 class="text-2xl font-semibold"><?= htmlspecialchars($user['name']) ?></h1>
            <p class="text-gray-500"><?= htmlspecialchars($user['email']) ?></p>
        </div>
        
        <hr class="border-gray-300">
        
        <div class="flex flex-col gap-3">
            <div class="flex justify-between">
                <span class="font-medium text-gray-700">Full Name:</span>
                <span class="text-gray-900"><?= htmlspecialchars($user['name']) ?></span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-700">Email:</span>
                <span class="text-gray-900"><?= htmlspecialchars($user['email']) ?></span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-700">Account Created:</span>
                <span class="text-gray-900"><?= htmlspecialchars($user['created_at']) ?></span>
            </div>
        </div>

        <hr class="border-gray-300">
        
        <div class="flex flex-col gap-3">
            <a href="/logout" class="w-full text-center py-2 rounded-md text-white bg-red-600 hover:bg-red-700 transition">Logout</a>
        </div>
        
    </div>
</div>
