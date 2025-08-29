<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-50 via-white to-blue-50">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(59, 130, 246, 0.5) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
                <!-- Authority Badge -->
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-bold shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    Branchenexperte
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
                
                <!-- Expert Info -->
                <div class="flex items-center space-x-4 p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                    <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-primary-200">
                        <img src="<?php echo htmlspecialchars($data['expertImage']); ?>" 
                             alt="<?php echo htmlspecialchars($data['expertName']); ?>"
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900"><?php echo htmlspecialchars($data['expertName']); ?></h3>
                        <p class="text-primary-600 font-medium"><?php echo htmlspecialchars($data['expertTitle']); ?></p>
                    </div>
                </div>
                
                <!-- Credentials -->
                <div class="grid grid-cols-2 gap-4">
                    <?php foreach ($data['credentials'] as $credential): ?>
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700 font-medium"><?php echo htmlspecialchars($credential); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Testimonial -->
                <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-6 border border-blue-100">
                    <div class="flex items-start space-x-4">
                        <svg class="w-8 h-8 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
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
                       class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-600 to-blue-600 hover:from-primary-700 hover:to-blue-700 text-white font-semibold rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 text-lg">
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
            
            <!-- Image/Stats Content -->
            <div class="relative">
                <!-- Main Image -->
                <div class="relative z-10">
                    <div class="aspect-w-4 aspect-h-5">
                        <img src="<?php echo htmlspecialchars($data['expertImage']); ?>" 
                             alt="<?php echo htmlspecialchars($data['expertName']); ?>"
                             class="w-full h-full object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
                
                <!-- Floating Stats Cards -->
                <div class="absolute -top-8 -left-8 bg-white rounded-2xl shadow-xl p-6 transform rotate-3 hover:rotate-0 transition-transform duration-300 z-20">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600"><?php echo htmlspecialchars($data['stats'][0]['value']); ?></div>
                        <div class="text-sm text-gray-600 mt-1"><?php echo htmlspecialchars($data['stats'][0]['label']); ?></div>
                    </div>
                </div>
                
                <div class="absolute -bottom-8 -right-8 bg-white rounded-2xl shadow-xl p-6 transform -rotate-3 hover:rotate-0 transition-transform duration-300 z-20">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600"><?php echo htmlspecialchars($data['stats'][1]['value']); ?></div>
                        <div class="text-sm text-gray-600 mt-1"><?php echo htmlspecialchars($data['stats'][1]['label']); ?></div>
                    </div>
                </div>
                
                <div class="absolute top-1/2 -right-12 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-2xl shadow-xl p-4 transform translate-y-1/2 rotate-6 hover:rotate-0 transition-transform duration-300 z-20">
                    <div class="text-center">
                        <div class="text-2xl font-bold"><?php echo htmlspecialchars($data['stats'][2]['value']); ?></div>
                        <div class="text-xs mt-1"><?php echo htmlspecialchars($data['stats'][2]['label']); ?></div>
                    </div>
                </div>
                
                <!-- Background Decorations -->
                <div class="absolute -top-12 -right-12 w-40 h-40 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full opacity-50 blur-2xl"></div>
                <div class="absolute -bottom-12 -left-12 w-32 h-32 bg-gradient-to-r from-yellow-200 to-orange-200 rounded-full opacity-50 blur-2xl"></div>
            </div>
        </div>
        
        <!-- Trust Indicators -->
        <div class="mt-20 text-center">
            <p class="text-gray-500 text-sm mb-8">Vertraut von führenden Unternehmen</p>
            <div class="flex justify-center items-center space-x-8 opacity-60">
                <div class="w-24 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 1</div>
                <div class="w-24 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 2</div>
                <div class="w-24 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 3</div>
                <div class="w-24 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 4</div>
                <div class="w-24 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 5</div>
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
