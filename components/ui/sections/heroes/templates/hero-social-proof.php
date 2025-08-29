<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-green-50 via-white to-blue-50">
    <!-- Trust Badges Background -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMiIgZmlsbD0iIzM0OTY2RiIgZmlsbC1vcGFjaXR5PSIwLjEiLz4KPC9zdmc+'); background-size: 40px 40px;"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
                <!-- Trust Badge -->
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full text-sm font-bold shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Vertrauenswürdig & Bewährt
                </div>
                
                <!-- Main Heading -->
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl xl:text-7xl font-bold text-gray-900 leading-tight">
                        <?php echo htmlspecialchars($data['title']); ?>
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-600 leading-relaxed">
                        <?php echo htmlspecialchars($data['subtitle']); ?>
                    </p>
                </div>
                
                <!-- Social Proof Stats -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($data['socialProof'] as $label => $value): ?>
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                        <div class="text-2xl lg:text-3xl font-bold text-green-600 mb-1">
                            <?php echo htmlspecialchars($value); ?>
                        </div>
                        <div class="text-sm text-gray-600 capitalize">
                            <?php echo htmlspecialchars(str_replace(['_', '-'], ' ', $label)); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Customer Testimonial -->
                <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-2xl p-6 border border-green-100">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-green-200 flex-shrink-0">
                            <img src="<?php echo htmlspecialchars($data['testimonial']['avatar']); ?>" 
                                 alt="<?php echo htmlspecialchars($data['testimonial']['author']); ?>"
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <!-- Star Rating -->
                            <div class="flex items-center mb-2">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <?php endfor; ?>
                            </div>
                            <p class="text-gray-700 italic mb-3">"<?php echo htmlspecialchars($data['testimonial']['text']); ?>"</p>
                            <div>
                                <p class="font-semibold text-gray-900"><?php echo htmlspecialchars($data['testimonial']['author']); ?></p>
                                <p class="text-sm text-gray-600"><?php echo htmlspecialchars($data['testimonial']['position']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="<?php echo htmlspecialchars($data['ctaLink']); ?>" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white font-semibold rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 text-lg">
                        <?php echo htmlspecialchars($data['ctaText']); ?>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo htmlspecialchars($data['secondaryCtaLink']); ?>" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-gray-50 text-gray-900 font-semibold rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl border border-gray-200 text-lg">
                        <?php echo htmlspecialchars($data['secondaryCtaText']); ?>
                    </a>
                </div>
            </div>
            
            <!-- Image/Visual Content -->
            <div class="relative">
                <!-- Main Image -->
                <div class="relative z-10">
                    <div class="aspect-w-4 aspect-h-5">
                        <img src="<?php echo htmlspecialchars($data['image']); ?>" 
                             alt="<?php echo htmlspecialchars($data['title']); ?>"
                             class="w-full h-full object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
                
                <!-- Floating Trust Indicators -->
                <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-4 transform rotate-3 hover:rotate-0 transition-transform duration-300 z-20">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-900">Verifiziert</span>
                    </div>
                    <div class="mt-1 text-xs text-gray-600">100% Sicher</div>
                </div>
                
                <div class="absolute -bottom-6 -right-6 bg-gradient-to-r from-green-500 to-blue-500 text-white rounded-2xl shadow-xl p-4 transform -rotate-3 hover:rotate-0 transition-transform duration-300 z-20">
                    <div class="text-center">
                        <div class="text-2xl font-bold"><?php echo htmlspecialchars(array_values($data['socialProof'])[0]); ?></div>
                        <div class="text-xs mt-1"><?php echo htmlspecialchars(array_keys($data['socialProof'])[0]); ?></div>
                    </div>
                </div>
                
                <div class="absolute top-1/2 -right-12 bg-white rounded-2xl shadow-xl p-3 transform translate-y-1/2 rotate-6 hover:rotate-0 transition-transform duration-300 z-20">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span class="text-sm font-bold text-gray-900">4.9/5</span>
                    </div>
                </div>
                
                <!-- Background Decorations -->
                <div class="absolute -top-12 -right-12 w-40 h-40 bg-gradient-to-r from-green-200 to-blue-200 rounded-full opacity-50 blur-2xl"></div>
                <div class="absolute -bottom-12 -left-12 w-32 h-32 bg-gradient-to-r from-yellow-200 to-green-200 rounded-full opacity-50 blur-2xl"></div>
            </div>
        </div>
        
        <!-- Trust Logos -->
        <div class="mt-20 text-center">
            <p class="text-gray-500 text-sm mb-8">Vertraut von führenden Unternehmen und Organisationen</p>
            <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                <?php foreach ($data['trustLogos'] as $logo): ?>
                <div class="px-6 py-3 bg-gray-100 rounded-lg">
                    <span class="text-sm font-medium text-gray-600"><?php echo htmlspecialchars($logo); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
.aspect-w-4 {
    position: relative;
    padding-bottom: 125%;
}

.aspect-h-5 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
