<?php
require_once '../includes/config.php';
require_once '../components/ui/sections/index.php';
?>
<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Full Template Demo</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Vollständige Demo aller 200+ Komponenten des PHP Template Systems">
    <meta name="keywords" content="PHP, Template, Landing Page, Components, Full Demo">
    <meta name="author" content="Dyad">
    
    <!-- Open Graph -->
    <meta property="og:description" content="200+ professionelle Komponenten sofort verfügbar">
    <meta property="og:type" content="website">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased">
    
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm border-b border-gray-200">
        <div class="container-custom">
            <div class="flex items-center justify-between h-16">
                <div class="font-bold text-xl text-gray-900">
                     <span class="text-sm font-normal text-primary-600">Full Template</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#heroes" class="text-gray-600 hover:text-gray-900 transition-colors">Heroes</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900 transition-colors">About</a>
                    <a href="#pricing" class="text-gray-600 hover:text-gray-900 transition-colors">Pricing</a>
                    <a href="#cta" class="text-gray-600 hover:text-gray-900 transition-colors">CTA</a>
                    <a href="#benefits" class="text-gray-600 hover:text-gray-900 transition-colors">Benefits</a>
                </div>
                <a href="../scaffold-php-lite/public/index.php" 
                   class="btn-primary text-sm">
                    Lite Version
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        
        <!-- Header Section -->
        <section class="section-padding bg-gradient-to-br from-primary-50 via-white to-purple-50">
            <div class="container-custom text-center">
                <div class="max-w-4xl mx-auto">
                    <div class="mb-8">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-r from-primary-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                    </div>
                    
                    <h1 class="text-4xl lg:text-6xl xl:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                        PHP Template System
                        <span class="text-gradient">Full Version</span>
                    </h1>
                    
                    <p class="text-xl lg:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Vollständige Demo aller verfügbaren Komponenten. Über 200+ professionelle Sektionen sofort einsatzbereit.
                    </p>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                        <?php 
                        $overview = SectionsRegistry::generateComponentOverview();
                        $stats = [
                            ['value' => $overview['totals']['sections'], 'label' => 'Sektionen'],
                            ['value' => $overview['totals']['components'], 'label' => 'Komponenten'],
                            ['value' => $overview['totals']['variants'], 'label' => 'Varianten'],
                            ['value' => '100%', 'label' => 'Einsatzbereit']
                        ];
                        ?>
                        <?php foreach ($stats as $stat): ?>
                        <div class="bg-white/50 backdrop-blur-sm rounded-xl p-6 border border-gray-200/50">
                            <div class="text-3xl font-bold text-primary-600 mb-2"><?php echo $stat['value']; ?></div>
                            <div class="text-sm text-gray-600"><?php echo $stat['label']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#demo" class="btn-primary">
                            Komponenten erkunden
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </a>
                        <button onclick="debugShowAllComponents()" class="btn-secondary">
                            Debug: Alle Komponenten anzeigen
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero Sections Demo -->
        <section id="heroes" class="section-padding bg-gray-900 text-white">
            <div class="container-custom">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4">🎯 Hero-Sektionen</h2>
                    <p class="text-xl text-gray-300">32+ Varianten für den perfekten ersten Eindruck</p>
                </div>
                
                <div class="space-y-20">
                    <!-- Hero Benefit Focused Demo -->
                    <div class="bg-white rounded-3xl overflow-hidden">
                        <?php renderHeroSection('HeroBenefitFocused', 'productivity'); ?>
                    </div>
                    
                    <!-- Hero Authority Demo -->
                    <div class="bg-white rounded-3xl overflow-hidden">
                        <?php renderHeroSection('HeroAuthority', 'expert'); ?>
                    </div>
                    
                    <!-- Hero Social Proof Demo -->
                    <div class="bg-white rounded-3xl overflow-hidden">
                        <?php renderHeroSection('HeroSocialProof', 'experienced'); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Sections Demo -->
        <section id="about" class="section-padding">
            <div class="container-custom">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">🏢 About-Sektionen</h2>
                    <p class="text-xl text-gray-600">30+ Varianten für Unternehmensdarstellung</p>
                </div>
                
                <!-- About Company History Demo -->
                <?php renderAboutSection('AboutCompanyHistory', 'growth-story'); ?>
            </div>
        </section>

        <!-- Pricing Sections Demo -->
        <section id="pricing" class="section-padding bg-gray-50">
            <div class="container-custom">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">💰 Pricing-Sektionen</h2>
                    <p class="text-xl text-gray-600">28+ Varianten für optimale Conversion</p>
                </div>
                
                <!-- Standard Pricing Cards Demo -->
                <?php renderPricingSection('StandardPricingCards', 'basic-business-pro'); ?>
            </div>
        </section>

        <!-- CTA Sections Demo -->
        <section id="cta" class="section-padding">
            <div class="container-custom">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">📞 CTA-Sektionen</h2>
                    <p class="text-xl text-gray-600">26+ Varianten für maximale Handlungsaufforderung</p>
                </div>
                
                <!-- Simple CTA Demo -->
                <?php renderCTASection('SimpleCTA', 'immediate-action'); ?>
            </div>
        </section>

        <!-- Benefits Sections Demo -->
        <section id="benefits" class="section-padding bg-gray-50">
            <div class="container-custom">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">✨ Benefits-Sektionen</h2>
                    <p class="text-xl text-gray-600">17+ Varianten für überzeugende Vorteile</p>
                </div>
                
                <!-- Simple Benefits Grid Demo -->
                <?php renderBenefitsSection('SimpleBenefitsGrid', 'three-column'); ?>
            </div>
        </section>

        <!-- Component Overview -->
        <section id="overview" class="section-padding bg-gradient-to-r from-primary-600 to-purple-600 text-white">
            <div class="container-custom">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4">📦 Komponenten-Übersicht</h2>
                    <p class="text-xl opacity-90">Alle verfügbaren Sektionen im Überblick</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php 
                    $overview = SectionsRegistry::generateComponentOverview();
                    foreach ($overview['overview'] as $sectionType => $sectionData): 
                    ?>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <h3 class="text-xl font-bold mb-3"><?php echo $sectionData['name']; ?></h3>
                        <div class="text-3xl font-bold mb-2"><?php echo $sectionData['variants']; ?></div>
                        <div class="text-sm opacity-75 mb-4"><?php echo $sectionData['components']; ?> Komponenten</div>
                        <div class="space-y-2">
                            <?php foreach (array_slice($sectionData['details'], 0, 3) as $componentName => $componentData): ?>
                            <div class="text-sm opacity-75">
                                • <?php echo $componentName; ?> (<?php echo $componentData['variants']; ?>)
                            </div>
                            <?php endforeach; ?>
                            <?php if (count($sectionData['details']) > 3): ?>
                            <div class="text-sm opacity-50">
                                +<?php echo count($sectionData['details']) - 3; ?> weitere...
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Getting Started -->
        <section class="section-padding bg-gray-900 text-white">
            <div class="container-custom text-center">
                <h2 class="text-4xl font-bold mb-6">🚀 Bereit loszulegen?</h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Starten Sie mit dem Lite Template oder nutzen Sie direkt alle Komponenten aus der Full Version.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="../scaffold-php-lite/public/index.php" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Lite Template starten
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </a>
                    <a href="#documentation" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-gray-900 transition-all duration-200">
                        Dokumentation lesen
                    </a>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="section-padding bg-gray-50">
        <div class="container-custom text-center">
            <p class="text-gray-600">&copy; 2025 Powered by Dyad</p>
            <p class="text-sm text-gray-500 mt-2">
                Full Template mit <?php echo $overview['totals']['variants']; ?>+ Komponenten-Varianten
            </p>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script>
        // Smooth scrolling für Anker-Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Debug-Informationen
        console.log('🚀 Dyad PHP Full Template loaded successfully!');
        console.log('📦 Available sections:', <?php echo json_encode(array_keys($overview['overview'])); ?>);
        console.log('🎯 Total components:', <?php echo $overview['totals']['components']; ?>);
        console.log('✨ Total variants:', <?php echo $overview['totals']['variants']; ?>);
    </script>
</body>
</html>
