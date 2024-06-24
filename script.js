document.addEventListener('DOMContentLoaded', function() {
    const typewriterText = document.querySelector('.anim-typewriter');
    const text = typewriterText.textContent.trim();
    const charCount = text.length;
    const animationDuration = charCount * 0.1; // 0.1s per character (adjust as needed)
    
    typewriterText.style.animation = `typewriter ${animationDuration}s steps(${charCount}) 1s 1 normal both, blinkTextCursor 500ms steps(${charCount}) infinite normal`;
  });