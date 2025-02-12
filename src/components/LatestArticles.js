const articles = [
  {
    image: '/images/balanced-nutrition.jpg',
    category: 'Nutrition',
    title: 'The Ultimate Guide to Balanced Nutrition',
    description: 'Learn how to create a balanced diet that fuels your body and mind.',
    link: '/articles/ultimate-guide-balanced-nutrition'
  },
  {
    image: '/images/core-strength.jpg',
    category: 'Fitness',
    title: '5 Essential Exercises for Core Strength',
    description: 'Build a strong foundation with these effective core exercises.',
    link: '/articles/essential-exercises-core-strength'
  },
  {
    image: '/images/mindfulness.jpg',
    category: 'Mental Health',
    title: 'Mindfulness Techniques for Better Mental Health',
    description: 'Simple practices to reduce stress and improve mental well-being.',
    link: '/articles/mindfulness-techniques'
  }
];

export function createLatestArticles() {
  const base_uri = window.location.origin + '/wp-content/themes/doorillio';
  
  const articleCards = articles.map(article => `
    <article class="article-card">
      <img src="${base_uri + article.image}" alt="${article.title}">
      <div class="article-content">
        <span class="category">${article.category}</span>
        <h3>${article.title}</h3>
        <p>${article.description}</p>
        <div class="article-footer">
          <a href="${article.link}" class="read-more">Read More →</a>
          <div class="share">
            Share: 
            <a href="#" class="share-link">𝕏</a>
            <a href="#" class="share-link">f</a>
            <a href="#" class="share-link">in</a>
          </div>
        </div>
      </div>
    </article>
  `).join('');

  return `
    <section class="latest-articles">
      <div class="container">
        <div class="section-header">
          <h2>Latest Articles</h2>
          <a href="/articles" class="view-all">View All Articles →</a>
        </div>
        <div class="articles-grid">
          ${articleCards}
        </div>
      </div>
    </section>
  `;
}
