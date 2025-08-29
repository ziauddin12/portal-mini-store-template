<footer class="bg-slate-900 dark:bg-slate-950 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        
        <?php if ($data['style'] === 'contact-simple'): ?>
            <!-- Contact Simple Layout -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                
                <!-- Logo & Navigation -->
                <div class="lg:col-span-2">
                    <!-- Logo -->
                    <div class="mb-8">
                        <?php if (isset($data['logo'])): ?>
                            <img src="<?php echo htmlspecialchars($data['logo']); ?>" 
                                 alt="<?php echo htmlspecialchars($data['logoText']); ?>"
                                 class="h-8">
                        <?php else: ?>
                            <div class="text-2xl font-bold">
                                <?php echo htmlspecialchars($data['logoText']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Navigation -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <?php foreach ($data['navigation'] as $item): ?>
                            <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                               class="text-slate-400 hover:text-white transition-colors duration-200 py-2">
                                <?php echo htmlspecialchars($item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-white font-semibold mb-6 text-lg">Kontakt</h4>
                    <div class="space-y-4">
                        
                        <!-- Phone -->
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-slate-400 text-sm">Telefon</div>
                                <a href="tel:<?php echo str_replace(' ', '', $data['phone']); ?>" 
                                   class="text-white hover:text-blue-400 transition-colors duration-200 font-medium">
                                    <?php echo htmlspecialchars($data['phone']); ?>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-slate-400 text-sm">E-Mail</div>
                                <a href="mailto:<?php echo htmlspecialchars($data['email']); ?>" 
                                   class="text-white hover:text-blue-400 transition-colors duration-200 font-medium">
                                    <?php echo htmlspecialchars($data['email']); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php else: // contact-detailed ?>
            <!-- Contact Detailed Layout -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <!-- Logo -->
                    <div class="mb-6">
                        <?php if (isset($data['logo'])): ?>
                            <img src="<?php echo htmlspecialchars($data['logo']); ?>" 
                                 alt="<?php echo htmlspecialchars($data['logoText']); ?>"
                                 class="h-8">
                        <?php else: ?>
                            <div class="text-2xl font-bold">
                                <?php echo htmlspecialchars($data['logoText']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Description -->
                    <p class="text-slate-400 mb-8 leading-relaxed text-lg">
                        <?php echo htmlspecialchars($data['description']); ?>
                    </p>
                    
                    <!-- Navigation -->
                    <div>
                        <h4 class="text-white font-semibold mb-4">Navigation</h4>
                        <div class="grid md:grid-cols-2 gap-2">
                            <?php foreach ($data['navigation'] as $item): ?>
                                <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                                   class="text-slate-400 hover:text-white transition-colors duration-200 py-1">
                                    <?php echo htmlspecialchars($item['label']); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Legal Links -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Rechtliches</h4>
                    <ul class="space-y-3">
                        <?php foreach ($data['legalLinks'] as $item): ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                                   class="text-slate-400 hover:text-white transition-colors duration-200">
                                    <?php echo htmlspecialchars($item['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Kontakt</h4>
                    <div class="space-y-4">
                        
                        <!-- Phone -->
                        <div>
                            <div class="text-slate-400 text-sm mb-1">Telefon</div>
                            <a href="tel:<?php echo str_replace(' ', '', $data['phone']); ?>" 
                               class="text-white hover:text-blue-400 transition-colors duration-200 font-medium">
                                <?php echo htmlspecialchars($data['phone']); ?>
                            </a>
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <div class="text-slate-400 text-sm mb-1">E-Mail</div>
                            <a href="mailto:<?php echo htmlspecialchars($data['email']); ?>" 
                               class="text-white hover:text-blue-400 transition-colors duration-200 font-medium">
                                <?php echo htmlspecialchars($data['email']); ?>
                            </a>
                        </div>
                        
                        <!-- Address -->
                        <div>
                            <div class="text-slate-400 text-sm mb-1">Adresse</div>
                            <div class="text-white">
                                <?php echo nl2br(htmlspecialchars($data['address'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Footer Bottom -->
        <div class="border-t border-slate-800 pt-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                
                <!-- Copyright -->
                <div class="text-slate-400 text-sm mb-4 md:mb-0">
                    © <?php echo htmlspecialchars($data['copyrightYear']); ?> <?php echo htmlspecialchars($data['companyName']); ?>. Alle Rechte vorbehalten.
                </div>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200" title="Twitter">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200" title="LinkedIn">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200" title="GitHub">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
