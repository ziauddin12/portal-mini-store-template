<section class="relative py-24 lg:py-32 bg-slate-50 dark:bg-slate-800">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6">
                <?php echo htmlspecialchars($data['headline']); ?>
            </h2>
            <p class="text-xl text-slate-600 dark:text-slate-400 max-w-3xl mx-auto leading-relaxed">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
        </div>
        
        <!-- Gallery Grid -->
        <div class="grid <?php echo ($data['gridColumns'] === 2) ? 'grid-cols-1 md:grid-cols-2' : (($data['gridColumns'] === 3) ? 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3' : 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'); ?> gap-8">
            <?php foreach ($data['images'] as $index => $image): ?>
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 bg-white dark:bg-slate-700">
                    
                    <!-- Image Container -->
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                             alt="<?php echo htmlspecialchars($image['alt']); ?>"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        
                        <!-- Availability Badge (for meeting rooms) -->
                        <?php if (isset($image['availability'])): ?>
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium <?php echo ($image['availability'] === 'Verfügbar') ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200'; ?>">
                                    <span class="w-2 h-2 rounded-full <?php echo ($image['availability'] === 'Verfügbar') ? 'bg-green-400' : 'bg-red-400'; ?> mr-2"></span>
                                    <?php echo htmlspecialchars($image['availability']); ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            
                            <!-- Lightbox Button -->
                            <?php if (isset($data['showLightbox']) && $data['showLightbox']): ?>
                                <button onclick="openLightbox(<?php echo $index; ?>)" 
                                        class="absolute top-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                    </svg>
                                </button>
                            <?php endif; ?>
                            
                            <!-- Content Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-xl font-bold mb-2"><?php echo htmlspecialchars($image['title']); ?></h3>
                                <p class="text-sm text-white/90"><?php echo htmlspecialchars($image['description']); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content Below Image -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                            <?php echo htmlspecialchars($image['title']); ?>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                            <?php echo htmlspecialchars($image['description']); ?>
                        </p>
                        
                        <!-- Details (for meeting rooms) -->
                        <?php if (isset($data['showDetails']) && $data['showDetails'] && isset($image['location'])): ?>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center text-slate-500 dark:text-slate-400">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span><?php echo htmlspecialchars($image['location']); ?></span>
                                </div>
                                
                                <?php if (isset($image['capacity'])): ?>
                                    <div class="flex items-center text-slate-500 dark:text-slate-400">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                        </svg>
                                        <span><?php echo htmlspecialchars($image['capacity']); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Additional Features for specific variants -->
        <?php if ($data['style'] === 'meeting-rooms'): ?>
            <div class="mt-16 text-center">
                <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 px-6 py-3 rounded-full font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Alle Räume online buchbar</span>
                </div>
            </div>
        <?php elseif ($data['style'] === 'kitchen-break-areas'): ?>
            <div class="mt-16 text-center">
                <div class="inline-flex items-center space-x-2 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 px-6 py-3 rounded-full font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <span>Kostenfreie Getränke und Snacks</span>
                </div>
            </div>
        <?php endif; ?>
    </div>
    
    <!-- Lightbox Modal -->
    <?php if (isset($data['showLightbox']) && $data['showLightbox']): ?>
        <div id="lightboxModal" class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-sm">
            <div class="flex items-center justify-center min-h-screen p-4">
                
                <!-- Close Button -->
                <button onclick="closeLightbox()" 
                        class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                
                <!-- Navigation Buttons -->
                <button onclick="prevImage()" 
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button onclick="nextImage()" 
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Image Container -->
                <div class="relative max-w-4xl max-h-full">
                    <img id="lightboxImage" 
                         src="" 
                         alt=""
                         class="max-w-full max-h-[80vh] object-contain rounded-lg">
                    
                    <!-- Image Info -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white rounded-b-lg">
                        <h3 id="lightboxTitle" class="text-2xl font-bold mb-2"></h3>
                        <p id="lightboxDescription" class="text-white/90"></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<script>
let currentImageIndex = 0;
const images = <?php echo json_encode($data['images']); ?>;

function openLightbox(index) {
    currentImageIndex = index;
    updateLightboxContent();
    document.getElementById('lightboxModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightboxModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateLightboxContent();
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateLightboxContent();
}

function updateLightboxContent() {
    const image = images[currentImageIndex];
    document.getElementById('lightboxImage').src = image.src;
    document.getElementById('lightboxImage').alt = image.alt;
    document.getElementById('lightboxTitle').textContent = image.title;
    document.getElementById('lightboxDescription').textContent = image.description;
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('lightboxModal');
    if (!modal.classList.contains('hidden')) {
        switch(e.key) {
            case 'Escape':
                closeLightbox();
                break;
            case 'ArrowLeft':
                prevImage();
                break;
            case 'ArrowRight':
                nextImage();
                break;
        }
    }
});

// Close lightbox when clicking outside image
document.getElementById('lightboxModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});
</script>
