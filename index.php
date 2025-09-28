<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="gradient-bg py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="md:w-1/2 text-center md:text-left">
                    <div class="mb-6">
                        <div class="border-2 border-white rounded-lg px-4 py-2 bg-black w-fit text-left md:ml-0 ml-auto">
                            <span class="italic font-semibold text-xl md:text-2xl text-white">I Help Businesses Find, Connect &amp; Convert</span>
                        </div>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-4 text-white">Streamline Your Success With Virtual Assistance</h1>
                    <p class="text-lg md:text-xl text-gray-300 mb-8">I help entrepreneurs and small businesses reclaim their time by handling administrative tasks, social media management, and more.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="https://calendly.com/loid1989delmonte/30min" target="_blank" rel="noopener" class="btn px-8 py-4 rounded-full text-base font-semibold">WORK WITH ME</a>
                        <button class="btn px-8 py-4 rounded-full text-base font-semibold border border-white bg-black text-white hover:bg-white hover:text-black">VIEW THE PRICING</button>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-80 h-80 md:w-96 md:h-96 bg-black rounded-full overflow-hidden shadow-xl border-4 border-white">
                        <img src="images/landingpage.jpg" alt="Jonh Loid" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hire Section -->
    <section class="py-16 bg-black" id="services">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-light font-bold text-center mb-4 section-title">Why Hire A Virtual Assistant?</h2>
            <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">Discover how a virtual assistant can help you save time, boost productivity, and reduce costs for your business.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="service-card p-8 rounded-lg text-center">
                    <div class="w-16 h-16 rounded-full bg-black border-2 border-white flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Save Time</h3>
                    <p class="text-gray-300">Delegate routine tasks and focus on what truly matters for your business growth.</p>
                </div>
                
                <div class="service-card p-8 rounded-lg text-center">
                    <div class="w-16 h-16 rounded-full bg-black border-2 border-white flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Increase Productivity</h3>
                    <p class="text-gray-300">Get more done in less time with professional support handling your administrative tasks.</p>
                </div>
                
                <div class="service-card p-8 rounded-lg text-center">
                    <div class="w-16 h-16 rounded-full bg-black border-2 border-white flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-wallet text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Reduce Costs</h3>
                    <p class="text-gray-300">Only pay for the assistance you need without the overhead of a full-time employee.</p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 p-8 bg-black rounded-xl border border-white">
                    <div class="w-full flex flex-col gap-8">
                        <div class="text-center mb-2">
                            <span class="block text-xl md:text-2xl font-bold text-white bg-white bg-opacity-10 px-8 py-4 rounded-full shadow-lg mx-auto w-fit tracking-wide">Struggling? Let's transform your workflow together!</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- FROM THIS Column -->
                            <div class="bg-gradient-to-br from-black via-gray-900 to-black border-2 border-white rounded-2xl p-6 flex flex-col gap-4 shadow-2xl">
                                <h3 class="text-xl font-extrabold text-white mb-4 text-center tracking-wide">FROM THIS</h3>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="from-item-1">
                                        <span class="text-2xl text-red-400 font-bold"><i class="fas fa-times-circle"></i></span>
                                        <span class="text-white text-sm">Finding it tough to produce captivating videos and reels that truly engage your audience.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="from-item-2">
                                        <span class="text-2xl text-red-400 font-bold"><i class="fas fa-times-circle"></i></span>
                                        <span class="text-white text-sm">Struggling to stay consistent and keep up with posting across different social media channels.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="from-item-3">
                                        <span class="text-2xl text-red-400 font-bold"><i class="fas fa-times-circle"></i></span>
                                        <span class="text-white text-sm">Feeling lost with the ever-changing trends and algorithms on platforms like Instagram, Facebook, and Pinterest.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="from-item-4">
                                        <span class="text-2xl text-red-400 font-bold"><i class="fas fa-times-circle"></i></span>
                                        <span class="text-white text-sm">Getting overwhelmed by content creation and not seeing steady results.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="from-item-5">
                                        <span class="text-2xl text-red-400 font-bold"><i class="fas fa-times-circle"></i></span>
                                        <span class="text-white text-sm">Juggling creative ideas with business strategy and finding it hard to grow.</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- TO THIS Column -->
                            <div class="bg-gradient-to-br from-black via-gray-900 to-black border-2 border-white rounded-2xl p-6 flex flex-col gap-4 shadow-2xl">
                                <h3 class="text-xl font-extrabold text-white mb-4 text-center tracking-wide">TO THIS</h3>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="to-item-1">
                                        <span class="text-2xl text-green-400 font-bold"><i class="fas fa-check-circle"></i></span>
                                        <span class="text-white text-sm">Polished, attention-grabbing videos and reels that spark interest and keep viewers watching.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="to-item-2">
                                        <span class="text-2xl text-green-400 font-bold"><i class="fas fa-check-circle"></i></span>
                                        <span class="text-white text-sm">Reliable social media management with steady posting and active audience engagement.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="to-item-3">
                                        <span class="text-2xl text-green-400 font-bold"><i class="fas fa-check-circle"></i></span>
                                        <span class="text-white text-sm">Content strategies that keep up with new trends and platform updates for maximum impact.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="to-item-4">
                                        <span class="text-2xl text-green-400 font-bold"><i class="fas fa-check-circle"></i></span>
                                        <span class="text-white text-sm">Content that’s both creative and strategic, driving more reach, engagement, and growth.</span>
                                    </li>
                                    <li class="flex items-center gap-3 bg-white bg-opacity-10 rounded-lg p-3 sync-hover-item" id="to-item-5">
                                        <span class="text-2xl text-green-400 font-bold"><i class="fas fa-check-circle"></i></span>
                                        <span class="text-white text-sm">A smart mix of storytelling and strategy that helps your brand stand out and grow stronger.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Redesigned From This → To This Section -->
            </div>
                
        </div>
    </section>

    <!-- About Me Section -->
    <section class="py-16 gradient-bg" id="about">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-light font-bold text-center mb-4 section-title">Meet Your Virtual Assistant</h2>
            <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">Get to know your dedicated virtual assistant, ready to help you grow and succeed with creative solutions and reliable support.</p>
            
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="md:w-1/2 order-2 md:order-1 flex justify-center items-center">
                    <img src="images/profile1.jpg" alt="Jonh Loid at his desk" class="rounded-xl shadow-lg w-80 h-80 md:w-96 md:h-96 object-cover">
                </div>

                <div class="md:w-1/2 text-center md:text-left order-1 md:order-2 flex flex-col justify-center items-center md:items-start" style="min-height:20rem;">
                    <h3 class="text-2xl md:text-3xl font-light mb-6 text-white">Hi! I'm Jonh Loid Del Monte</h3>
                    <p class="mb-4 text-gray-300 max-w-lg">a Video Editor and Social Media Manager who brings stories to life through eye-catching video edits and reels. I manage social media spaces like Facebook, Instagram, and Pinterest to make brands shine. With a blend of creativity and strategy, I help clients stand out and connect with their audience.</p>
                    <div class="flex flex-wrap gap-4 mt-8 justify-center md:justify-start">
                        <a href="https://calendly.com/loid1989delmonte/30min" target="_blank" rel="noopener" class="btn px-8 py-3 rounded-full text-sm font-semibold">WORK WITH ME</a>
                        <button class="btn px-8 py-3 rounded-full text-sm font-semibold border border-white bg-black text-white hover:bg-white hover:text-black">DOWNLOAD CV</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-light font-bold text-center mb-4 section-title">My Services</h2>
            <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">Explore a range of services designed to streamline your workflow, from email and calendar management to social media and document preparation.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="service-card p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-black border-2 border-white flex items-center justify-center mr-4">
                            <i class="fas fa-envelope text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Email Management</h3>
                    </div>
                    <p class="text-gray-300 mb-4">Keep your inbox organized and ensure important messages never get missed with professional email management.</p>
                    <ul class="text-gray-300 list-disc pl-5">
                        <li>Inbox organization</li>
                        <li>Priority email response</li>
                        <li>Spam filtering</li>
                        <li>Newsletter management</li>
                    </ul>
                </div>
                
                <div class="service-card p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-black border-2 border-white flex items-center justify-center mr-4">
                            <i class="fas fa-calendar-alt text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Calendar Management</h3>
                    </div>
                    <p class="text-gray-300 mb-4">Never miss an appointment or double-book again with professional calendar management.</p>
                    <ul class="text-gray-300 list-disc pl-5">
                        <li>Appointment scheduling</li>
                        <li>Meeting coordination</li>
                        <li>Reminder setup</li>
                        <li>Time zone management</li>
                    </ul>
                </div>
                
                <div class="service-card p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-black border-2 border-white flex items-center justify-center mr-4">
                            <i class="fas fa-share-alt text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Social Media Management</h3>
                    </div>
                    <p class="text-gray-300 mb-4">Maintain a consistent social media presence without spending hours each week creating content.</p>
                    <ul class="text-gray-300 list-disc pl-5">
                        <li>Content creation</li>
                        <li>Scheduling & posting</li>
                        <li>Engagement monitoring</li>
                        <li>Analytics reporting</li>
                    </ul>
                </div>
                
                <div class="service-card p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-black border-2 border-white flex items-center justify-center mr-4">
                            <i class="fas fa-file-alt text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Document Preparation</h3>
                    </div>
                    <p class="text-gray-300 mb-4">Professional documents prepared to your specifications, saving you time and ensuring quality.</p>
                    <ul class="text-gray-300 list-disc pl-5">
                        <li>Reports & presentations</li>
                        <li>Document formatting</li>
                        <li>Proofreading</li>
                        <li>Templates creation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- My Capabilities Section -->
    <section class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-light font-bold text-center mb-4 section-title">My Capabilities</h2>
            <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">Skilled in top productivity, design, and communication tools to deliver efficient and creative results for your business.</p>
            
            <div class="relative overflow-hidden">
                <div class="logos-carousel flex space-x-8 py-4">
                    <!-- Duplicate set for seamless looping -->
                    <div class="logos-slide flex space-x-8 animate-scroll">
                        <!-- Canva -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/canva.jpg" alt="Canva" class="w-full h-full object-contain">
                        </div>
                        <!-- Calendly -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/calendly.jpg" alt="Calendly" class="w-full h-full object-contain">
                        </div>
                        <!-- Google Workspace -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/googleworkspace.jpg" alt="Google Workspace" class="w-full h-full object-contain">
                        </div>
                        <!-- Capcut -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/capcut.jpg" alt="Capcut" class="w-full h-full object-contain">
                        </div>
                        <!-- Notion -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/notion.jpg" alt="Notion" class="w-full h-full object-contain">
                        </div>
                        <!-- Apollo -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/apollo.jpg" alt="Apollo" class="w-full h-full object-contain">
                        </div>
                        <!-- Buffer -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/buffer.jpg" alt="Buffer" class="w-full h-full object-contain">
                        </div>
                        <!-- Meta Business Suite -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/meta.jpg" alt="Meta Business Suite" class="w-full h-full object-contain">
                        </div>
                        <!-- Slack -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/slack.jpg" alt="Slack" class="w-full h-full object-contain">
                        </div>
                        <!-- Microsoft Office -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/msoffice.jpg" alt="Microsoft Office" class="w-full h-full object-contain">
                        </div>
                        <!-- ChatGPT -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/gpt.jpg" alt="ChatGPT" class="w-full h-full object-contain">
                        </div>
                        <!-- Gemini -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/gemini.jpg" alt="Gemini" class="w-full h-full object-contain">
                        </div>
                        <!-- Grok -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/grok.jpg" alt="Grok" class="w-full h-full object-contain">
                        </div>
                        <!-- Filmora -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/filmora.jpg" alt="Filmora" class="w-full h-full object-contain">
                        </div>
                    </div>
                    
                    <!-- Duplicate set for seamless looping -->
                     <div class="logos-slide flex space-x-8 animate-scroll">
                        <!-- Canva -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/canva.jpg" alt="Canva" class="w-full h-full object-contain">
                        </div>
                        <!-- Calendly -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/calendly.jpg" alt="Calendly" class="w-full h-full object-contain">
                        </div>
                        <!-- Google Workspace -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/googleworkspace.jpg" alt="Google Workspace" class="w-full h-full object-contain">
                        </div>
                        <!-- Capcut -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/capcut.jpg" alt="Capcut" class="w-full h-full object-contain">
                        </div>
                        <!-- Notion -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/notion.jpg" alt="Notion" class="w-full h-full object-contain">
                        </div>
                        <!-- Apollo -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/apollo.jpg" alt="Apollo" class="w-full h-full object-contain">
                        </div>
                        <!-- Buffer -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/buffer.jpg" alt="Buffer" class="w-full h-full object-contain">
                        </div>
                        <!-- Meta Business Suite -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/meta.jpg" alt="Meta Business Suite" class="w-full h-full object-contain">
                        </div>
                        <!-- Slack -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/slack.jpg" alt="Slack" class="w-full h-full object-contain">
                        </div>
                        <!-- Microsoft Office -->
                        <div class="logo-item flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/msoffice.jpg" alt="Microsoft Office" class="w-full h-full object-contain">
                        </div>
                        <!-- ChatGPT -->
                        <div class="flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/gpt.jpg" alt="ChatGPT" class="w-full h-full object-contain">
                        </div>
                        <!-- Gemini -->
                        <div class="flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/gemini.jpg" alt="Gemini" class="w-full h-full object-contain">
                        </div>
                        <!-- Grok -->
                        <div class="flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/grok.jpg" alt="Grok" class="w-full h-full object-contain">
                        </div>
                        <!-- Filmora -->
                        <div class="flex-shrink-0 w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
                            <img src="images/filmora.jpg" alt="Filmora" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 gradient-bg" id="testimonials">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-light font-bold text-center mb-4 section-title">Client Testimonials</h2>
            <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">Hear from clients who have experienced the benefits of working with a professional virtual assistant.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="testimonial-card p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-gray-300 mr-4 overflow-hidden flex items-center justify-center">
                            <span class="text-2xl font-bold text-black">D</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Dolly</h4>
                            <p class="text-sm text-gray-400">Operational Manager of Sevhal Capital</p>
                        </div>
                    </div>
                    <p class="text-gray-300">What impressed me most about Loid is his balance of artistry and leadership. His edits brought our vision to life, and his ability to guide a team with clarity and positivity made the whole process seamless.</p>
                    <div class="flex mt-4 items-center gap-2">
                        <!-- 4 filled stars, 1 empty star -->
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="far fa-star text-yellow-500"></i>
                        <span class="ml-2 text-white text-sm">4 out of 5 stars</span>
                    </div>
                </div>

                <div class="testimonial-card p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-gray-300 mr-4 overflow-hidden flex items-center justify-center">
                            <span class="text-2xl font-bold text-black">M</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Mary Ashley Letegio</h4>
                            <p class="text-sm text-gray-400">Web Content Manager of Sevhal Capital</p>
                        </div>
                    </div>
                    <p class="text-gray-300">Loid is a true professional—his video editing is consistently top-notch, and his leadership as a team manager built an environment where quality and collaboration thrived.</p>
                    <div class="flex mt-4 items-center gap-2">
                        <!-- 4.5 stars: 4 filled, 1 half -->
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star-half-alt text-yellow-500"></i>
                        <span class="ml-2 text-white text-sm">4.5 out of 5 stars</span>
                    </div>
                </div>

                <div class="testimonial-card p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-gray-300 mr-4 overflow-hidden flex items-center justify-center">
                            <span class="text-2xl font-bold text-black">L</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Lesley</h4>
                            <p class="text-sm text-gray-400">Executive Assistant Manager of SevHal Capital</p>
                        </div>
                    </div>
                    <p class="text-gray-300">Working with Loid means getting not just great videos, but a great experience. He will do well in his future endeavors and I wish him goodluck for his following plans in life.</p>
                    <div class="flex mt-4 items-center gap-2">
                        <!-- 4 stars, 1 empty star -->
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="far fa-star text-yellow-500"></i>
                        <span class="ml-2 text-white text-sm">4 out of 5 stars</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-black" id="contact">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-light font-bold text-center mb-4 section-title">Get In Touch</h2>
            <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">Ready to take the next step? Reach out for a free consultation or to ask any questions about my services.</p>
            
            <div class="flex flex-col md:flex-row gap-12">
                <div class="md:w-1/2">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-white mb-1">Your Name</label>
                            <input type="text" id="name" class="w-full px-4 py-3 border rounded-lg">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-white mb-1">Email Address</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border rounded-lg">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-white mb-1">Your Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border rounded-lg"></textarea>
                        </div>
                        <button type="submit" class="btn px-8 py-4 rounded-full text-base font-semibold w-full">SEND MESSAGE</button>
                    </form>
                </div>
                
                <div class="md:w-1/2">
                    <div class="bg-black border border-white p-8 rounded-xl h-full">
                        <h3 class="text-xl font-semibold mb-6 text-white">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 rounded-full bg-black border-2 border-white flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Email</h4>
                                    <p class="text-gray-300">loid1989delmonte@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 rounded-full bg-black border-2 border-white flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Phone Number</h4>
                                    <p class="text-gray-300">+639761979224</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 rounded-full bg-black border-2 border-white flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Location</h4>
                                    <p class="text-gray-300">Based in Metro Manila, Philippines<br>Working with clients worldwide</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12">
                            <h4 class="font-medium mb-4 text-white">Follow Me</h4>
                            <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/johnloiddm" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-black border-2 border-white flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <!-- Instagram -->
                                <a href="https://www.instagram.com/nickoloideon.23/" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-black border-2 border-white flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <!-- X (Twitter) -->
                                <a href="https://x.com/loidyyy_23?t=IOgv33mVrB0r0nsXTvTHTQ&s=09" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-black border-2 border-white flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22" aria-label="X" style="display:block;">
                                        <path d="M17.53 3H21L13.91 10.62L22.25 21H15.97L10.77 14.36L4.97 21H1.25L8.77 12.89L1 3H7.43L12.18 9.13L17.53 3ZM16.32 19.13H18.14L6.03 4.77H4.09L16.32 19.13Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
    /* Section reveal effect */
    section {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
    }
    section.section-visible {
        opacity: 1;
        transform: translateY(0);
    }
    .sync-hover-item {
        transition: background 0.3s, box-shadow 0.3s;
    }
    .sync-hover-item.sync-hover {
        background: rgba(255,255,255,0.25) !important;
        box-shadow: 0 0 10px 2px #b08e7a;
    }

    /* Testimonial Card Hover Effects */
    .testimonial-card {
        transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
        border: 2px solid transparent;
        background: rgba(0,0,0,0.85);
        box-shadow: 0 2px 12px rgba(80,80,80,0.10);
    }
    .testimonial-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 8px 32px rgba(80,80,80,0.18);
        background: rgba(40,40,40,0.97);
    }

    /* Carousel Styles */
    .logos-carousel {
        width: 100%;
        overflow: hidden;
        position: relative;
    }
    .logos-slide {
        display: flex;
        animation: scroll 30s linear infinite;
    }
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    .logos-carousel.paused .logos-slide {
        animation-play-state: paused;
    }
    .logo-item {
        transition: transform 0.3s, box-shadow 0.3s, border 0.3s;
        cursor: pointer;
    }
    .logo-item:hover {
        transform: scale(1.08);
        box-shadow: 0 4px 24px rgba(80,80,80,0.18);
        border-color: #b08e7a;
        z-index: 2;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .logos-slide {
            animation-duration: 20s;
        }
        .flex-shrink-0 {
            width: 24vw;
            height: 24vw;
        }
    }
</style>
<script>
    // Section reveal on scroll
    document.addEventListener('DOMContentLoaded', function() {
        // Section reveal effect
        const sections = document.querySelectorAll('section');
        const observer = new window.IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('section-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        sections.forEach(function(section) {
            observer.observe(section);
        });

        // Pause carousel when hovering any logo
        document.querySelectorAll('.logo-item').forEach(function(logo) {
            logo.addEventListener('mouseenter', function() {
                logo.closest('.logos-carousel').classList.add('paused');
            });
            logo.addEventListener('mouseleave', function() {
                logo.closest('.logos-carousel').classList.remove('paused');
            });
        });

        // Sync hover for FROM/TO items
        for (let i = 1; i <= 5; i++) {
            const fromItem = document.getElementById('from-item-' + i);
            const toItem = document.getElementById('to-item-' + i);
            function addSyncHover() {
                fromItem.classList.add('sync-hover');
                toItem.classList.add('sync-hover');
            }
            function removeSyncHover() {
                fromItem.classList.remove('sync-hover');
                toItem.classList.remove('sync-hover');
            }
            fromItem.addEventListener('mouseenter', addSyncHover);
            fromItem.addEventListener('mouseleave', removeSyncHover);
            toItem.addEventListener('mouseenter', addSyncHover);
            toItem.addEventListener('mouseleave', removeSyncHover);
        }
    });
</script>
<?php include 'includes/footer.php'; ?>