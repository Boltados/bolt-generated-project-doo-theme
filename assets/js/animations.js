document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.hero')?.classList.add('animate-fade-in');
    
    document.querySelectorAll('.category-card').forEach(card => {
        card.classList.add('animate-scale-in', 'hover-scale');
    });
    
    document.querySelectorAll('.article-card').forEach((card, index) => {
        card.classList.add('animate-slide-up');
        card.style.animationDelay = `${index * 0.1}s`;
    });
});
