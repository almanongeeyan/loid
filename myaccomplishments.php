<?php include 'includes/header.php'; ?>

<section class="py-16 bg-gradient-to-br from-gray-900 to-black min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-4 text-white">My Accomplishments</h2>
        <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">A curated collection of my professional work and achievements. Each project represents dedication, creativity, and excellence in execution.</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <div class="bg-black border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                <img src="images/1.png" alt="Accomplishment 1" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 accomplishment-img cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black bg-opacity-60">
                    <button class="view-photo-btn bg-white text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200 transition-colors duration-300 transform hover:scale-105">
                        View Photo
                    </button>
                </div>
            </div>
            
            <div class="bg-black border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                <img src="images/2.png" alt="Accomplishment 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 accomplishment-img cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black bg-opacity-60">
                    <button class="view-photo-btn bg-white text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200 transition-colors duration-300 transform hover:scale-105">
                        View Photo
                    </button>
                </div>
            </div>
            
            <div class="bg-black border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                <img src="images/3.png" alt="Accomplishment 3" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 accomplishment-img cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black bg-opacity-60">
                    <button class="view-photo-btn bg-white text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200 transition-colors duration-300 transform hover:scale-105">
                        View Photo
                    </button>
                </div>
            </div>
            
            <div class="bg-black border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                <img src="images/4.png" alt="Accomplishment 4" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 accomplishment-img cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black bg-opacity-60">
                    <button class="view-photo-btn bg-white text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200 transition-colors duration-300 transform hover:scale-105">
                        View Photo
                    </button>
                </div>
            </div>
            
            <div class="bg-black border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                <img src="images/5.png" alt="Accomplishment 5" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 accomplishment-img cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black bg-opacity-60">
                    <button class="view-photo-btn bg-white text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200 transition-colors duration-300 transform hover:scale-105">
                        View Photo
                    </button>
                </div>
            </div>
            
            <div class="bg-black border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                <img src="images/6.png" alt="Accomplishment 6" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 accomplishment-img cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black bg-opacity-60">
                    <button class="view-photo-btn bg-white text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200 transition-colors duration-300 transform hover:scale-105">
                        View Photo
                    </button>
                </div>
            </div>
            
            <div class="bg-black border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                <img src="images/7.png" alt="Accomplishment 7" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 accomplishment-img cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black bg-opacity-60">
                    <button class="view-photo-btn bg-white text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200 transition-colors duration-300 transform hover:scale-105">
                        View Photo
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="accomplishment-modal" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden transition-opacity duration-300">
    <div class="relative w-full max-w-3xl mx-4" style="max-width: 700px;">
        <button id="accomplishment-modal-close" class="absolute -top-12 right-0 text-white text-4xl bg-black bg-opacity-60 rounded-full w-10 h-10 flex items-center justify-center hover:bg-opacity-90 transition z-20">
            &times;
        </button>
        <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
            <img id="accomplishment-modal-img" src="" alt="Full size accomplishment" style="width: 100%; max-width: 850px; max-height: 80vh; object-fit: contain; margin: 0 auto; display: block;">
        </div>
        <div class="flex justify-between mt-4">
            <button id="prev-btn" class="bg-white text-black px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition">
                Previous
            </button>
            <button id="next-btn" class="bg-white text-black px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition">
                Next
            </button>
        </div>
    </div>
</div>

<section class="py-16 bg-gradient-to-br from-gray-800 to-gray-900 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-4 text-white">Featured Videos</h2>
        <p class="text-lg text-gray-300 text-center mb-12 max-w-2xl mx-auto">Watch some of my highlighted work and presentations below.</p>
        
        <div class="flex flex-col lg:flex-row gap-8 items-center lg:items-start">
            <div class="w-full lg:w-1/2 flex justify-center"> 
                <div id="video-player-container" class="relative rounded-xl overflow-hidden shadow-2xl bg-black w-full" style="max-width: 450px;">
                    <div class="relative pt-[133.33%]"> <video id="main-video" class="absolute inset-0 w-full h-full object-cover transition-all duration-500" controls poster="images/landingpage.jpg">
                            <source src="videos/vid1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="flex justify-between items-center">
                                <div class="text-white">
                                    <h3 id="video-title" class="text-xl font-bold">Video Title 1</h3>
                                    <p id="video-description" class="text-sm">Description of the video content</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button id="prev-video-btn" class="bg-white text-black px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-300 shadow-lg flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                        Prev
                                    </button>
                                    <button id="next-video-btn" class="bg-white text-black px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-300 shadow-lg flex items-center">
                                        Next
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div id="video-loading" class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center hidden">
                            <div class="text-white text-center">
                                <div class="w-12 h-12 border-4 border-white border-t-transparent rounded-full animate-spin mx-auto mb-2"></div>
                                <p>Loading video...</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center mt-4 space-x-2 absolute" style="top: 100%; width: 100%;">
                    <div class="h-1 w-8 bg-white rounded-full video-progress-indicator active" data-index="0"></div>
                    <div class="h-1 w-8 bg-gray-600 rounded-full video-progress-indicator" data-index="1"></div>
                    <div class="h-1 w-8 bg-gray-600 rounded-full video-progress-indicator" data-index="2"></div>
                </div>
            </div>
            
            <div class="w-full lg:w-1/2">
                <div class="bg-gray-800 bg-opacity-50 rounded-xl p-4 shadow-lg h-full">
                    <h3 class="text-xl font-bold text-white mb-4">Video Playlist</h3>
                    <div class="space-y-4">
                        <button class="video-thumb-btn w-full flex items-center space-x-3 p-3 rounded-lg bg-gray-700 bg-opacity-50 hover:bg-gray-600 transition-all duration-300 focus:outline-none active" data-index="0">
                            <div class="relative">
                                <img src="images/1.png" alt="Video 1" class="w-20 h-14 object-cover rounded shadow-lg">
                                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-left">
                                <h4 class="text-white font-semibold">Video Editing Sample 1</h4>
                                <p class="text-gray-300 text-sm">2:30</p>
                            </div>
                        </button>
                        
                        <button class="video-thumb-btn w-full flex items-center space-x-3 p-3 rounded-lg bg-gray-700 bg-opacity-50 hover:bg-gray-600 transition-all duration-300 focus:outline-none" data-index="1">
                            <div class="relative">
                                <img src="images/2.png" alt="Video 2" class="w-20 h-14 object-cover rounded shadow-lg">
                                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-left">
                                <h4 class="text-white font-semibold">Video Editing Sample 2</h4>
                                <p class="text-gray-300 text-sm">4:15</p>
                            </div>
                        </button>
                        
                        <button class="video-thumb-btn w-full flex items-center space-x-3 p-3 rounded-lg bg-gray-700 bg-opacity-50 hover:bg-gray-600 transition-all duration-300 focus:outline-none" data-index="2">
                            <div class="relative">
                                <img src="images/3.png" alt="Video 3" class="w-20 h-14 object-cover rounded shadow-lg">
                                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-left">
                                <h4 class="text-white font-semibold">Video Editing Sample 3</h4>
                                <p class="text-gray-300 text-sm">3:45</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Accomplishments Gallery Logic (UNCHANGED)
    const modal = document.getElementById('accomplishment-modal');
    const modalImg = document.getElementById('accomplishment-modal-img');
    const modalClose = document.getElementById('accomplishment-modal-close');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    
    const accomplishmentImgs = document.querySelectorAll('.accomplishment-img');
    const viewPhotoBtns = document.querySelectorAll('.view-photo-btn');
    
    let currentIndex = 0;
    
    function openModal(index) {
        currentIndex = index;
        const imgSrc = accomplishmentImgs[currentIndex].getAttribute('src');
        modalImg.setAttribute('src', imgSrc);
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        updateButtonStates();
    }
    
    function updateButtonStates() {
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === accomplishmentImgs.length - 1;
        
        if (prevBtn.disabled) {
            prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
            prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }
        
        if (nextBtn.disabled) {
            nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
            nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }
    }
    
    viewPhotoBtns.forEach((btn, index) => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            openModal(index);
        });
    });
    
    accomplishmentImgs.forEach((img, index) => {
        img.addEventListener('click', function() {
            openModal(index);
        });
    });
    
    modalClose.addEventListener('click', function() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    });
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });
    
    function showNextImage() {
        if (currentIndex < accomplishmentImgs.length - 1) {
            currentIndex++;
            const imgSrc = accomplishmentImgs[currentIndex].getAttribute('src');
            modalImg.setAttribute('src', imgSrc);
            updateButtonStates();
        }
    }
    
    function showPrevImage() {
        if (currentIndex > 0) {
            currentIndex--;
            const imgSrc = accomplishmentImgs[currentIndex].getAttribute('src');
            modalImg.setAttribute('src', imgSrc);
            updateButtonStates();
        }
    }
    
    nextBtn.addEventListener('click', showNextImage);
    prevBtn.addEventListener('click', showPrevImage);
    
    document.addEventListener('keydown', function(e) {
        if (!modal.classList.contains('hidden')) {
            if (e.key === 'ArrowRight') {
                showNextImage();
            } else if (e.key === 'ArrowLeft') {
                showPrevImage();
            } else if (e.key === 'Escape') {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }
    });
    
    // Video Section Logic (SLIGHTLY MODIFIED)
    const videoFiles = [
        'videos/vid1.mp4',
        'videos/vid2.mp4',
        'videos/vid3.mp4'
    ];
    
    const videoTitles = [
        "Project Presentation",
        "Technical Demo",
        "Client Showcase"
    ];
    
    const videoDescriptions = [
        "A comprehensive overview of my latest project with detailed explanations.",
        "Demonstration of technical capabilities and implementation details.",
        "Showcasing successful client projects and their outcomes."
    ];
    
    const videoThumbs = document.querySelectorAll('.video-thumb-btn');
    const mainVideo = document.getElementById('main-video');
    const nextVideoBtn = document.getElementById('next-video-btn');
    const prevVideoBtn = document.getElementById('prev-video-btn');
    const videoTitle = document.getElementById('video-title');
    const videoDescription = document.getElementById('video-description');
    const videoProgressIndicators = document.querySelectorAll('.video-progress-indicator');
    const videoLoading = document.getElementById('video-loading');
    
    let currentVideoIndex = 0;

    function showVideo(index) {
        if (index < 0 || index >= videoFiles.length) return;
        
        // Show loading indicator
        videoLoading.classList.remove('hidden');
        
        // Update active states for thumbnails
        videoThumbs.forEach((thumb, i) => {
            if (i === index) {
                thumb.classList.add('active', 'bg-gray-600');
            } else {
                thumb.classList.remove('active', 'bg-gray-600');
            }
        });
        
        // Update progress indicators
        videoProgressIndicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.add('bg-white');
                indicator.classList.remove('bg-gray-600');
            } else {
                indicator.classList.remove('bg-white');
                indicator.classList.add('bg-gray-600');
            }
        });
        
        // Update video info
        videoTitle.textContent = videoTitles[index];
        videoDescription.textContent = videoDescriptions[index];
        
        // Change video source
        mainVideo.src = videoFiles[index];
        mainVideo.load();
        
        // Hide loading indicator when video can play
        // We ensure we only bind the canplay event once per video load
        // so we remove existing event listeners before adding a new one.
        const canPlayHandler = function() {
            videoLoading.classList.add('hidden');
            mainVideo.play();
            mainVideo.removeEventListener('canplay', canPlayHandler);
        };
        
        mainVideo.addEventListener('canplay', canPlayHandler);

        // Fallback for immediate play/caching
        if (mainVideo.readyState >= 3) { // Enough data to play
            videoLoading.classList.add('hidden');
            mainVideo.play();
        }
        
        currentVideoIndex = index;
    }

    nextVideoBtn.addEventListener('click', function() {
        let nextIndex = (currentVideoIndex + 1) % videoFiles.length;
        showVideo(nextIndex);
    });

    prevVideoBtn.addEventListener('click', function() {
        let prevIndex = (currentVideoIndex - 1 + videoFiles.length) % videoFiles.length;
        showVideo(prevIndex);
    });

    videoThumbs.forEach(function(btn) {
        btn.addEventListener('click', function() {
            let idx = parseInt(btn.getAttribute('data-index'));
            showVideo(idx);
        });
    });
    
    // Keyboard navigation for videos
    document.addEventListener('keydown', function(e) {
        // Only run video keyboard navigation if the modal is NOT open
        if (e.target === document.body && modal.classList.contains('hidden')) {
            if (e.key === 'ArrowRight') {
                let nextIndex = (currentVideoIndex + 1) % videoFiles.length;
                showVideo(nextIndex);
            } else if (e.key === 'ArrowLeft') {
                let prevIndex = (currentVideoIndex - 1 + videoFiles.length) % videoFiles.length;
                showVideo(prevIndex);
            }
        }
    });
    
    // Initial state
    showVideo(0);
});
</script>

<?php include 'includes/footer.php'; ?>