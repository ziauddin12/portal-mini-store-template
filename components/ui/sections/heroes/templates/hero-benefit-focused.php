<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Bewährt & Erfolgreich
                </div>
                
                <!-- Main Heading -->
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl xl:text-7xl font-bold text-gray-900 leading-tight">
                        <?php echo htmlspecialchars($data['title']); ?>
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-600 leading-relaxed max-w-2xl">
                        <?php echo htmlspecialchars($data['subtitle']); ?>
                    </p>
                </div>
                
                <!-- Benefits List -->
                <div class="space-y-4">
                    <?php foreach ($data['benefits'] as $benefit): ?>
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-lg text-gray-700 font-medium"><?php echo htmlspecialchars($benefit); ?></span>
                    </div>
                    <?php endforeach; ?>
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
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <?php foreach ($data['stats'] as $stat): ?>
                    <div class="text-center">
                        <div class="text-2xl lg:text-3xl font-bold text-gray-900"><?php echo htmlspecialchars($stat['value']); ?></div>
                        <div class="text-sm text-gray-600 mt-1"><?php echo htmlspecialchars($stat['label']); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Image Content -->
            <div class="relative lg:ml-8">
                <div class="relative z-10">
                    <div class="aspect-w-4 aspect-h-5 lg:aspect-w-3 lg:aspect-h-4">
                        <img src="<?php echo htmlspecialchars($data['image']); ?>" 
                             alt="<?php echo htmlspecialchars($data['title']); ?>"
                             class="w-full h-full object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -top-8 -right-8 w-32 h-32 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full opacity-20 blur-2xl"></div>
                <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full opacity-20 blur-2xl"></div>
                
                <!-- Floating Cards -->
                <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-4 transform rotate-3 hover:rotate-0 transition-transform duration-300">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-900">Live Status</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-600">System läuft optimal</div>
                </div>
                
                <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-4 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
                    <div class="text-2xl font-bold text-primary-600"><?php echo $data['stats'][0]['value']; ?></div>
                    <div class="text-xs text-gray-600"><?php echo htmlspecialchars($data['stats'][0]['label']); ?></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-8 h-12 border-2 border-gray-400 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-gray-400 rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<style>
@keyframes blob {
    0%, 100% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

.aspect-w-4 {
    position: relative;
    padding-bottom: 125%;
}

.aspect-w-3 {
    position: relative;
    padding-bottom: 133.33%;
}

.aspect-h-5 > *,
.aspect-h-4 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
