const trendingArticles = [
  {
    title: '7 Morning Habits That Boost Your Metabolism',
    views: '234K',
    date: 'Mar 15, 2024'
  },
  {
    title: 'Foods to Avoid If You Have High Blood Pressure',
    views: '189K',
    date: 'Mar 14, 2024'
  },
  {
    title: 'Natural Remedies for Better Sleep',
    views: '156K',
    date: 'Mar 12, 2024'
  }
];

export function createTrendingNow() {
  const trendingList = trendingArticles.map((article, index) => `
    <div class="trending-item">
      <span class="trending-number">${index + 1}</span>
      <div class="trending-content">
        <h3>${article.title}</h3>
        <div class="trending-meta">
          <span>${article.views} views</span>
          <span>•</span>
          <span>${article.date}</span>
        </div>
      </div>
    </div>
  `).join('');

  return `
    <section class="trending-now">
      <h2>🔥 Trending Now</h2>
      <div class="trending-list">
        ${trendingList}
      </div>
    </section>
  `;
}
