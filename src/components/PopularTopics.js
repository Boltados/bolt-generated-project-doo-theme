const topics = [
  { name: 'Weight Loss', articles: 158 },
  { name: 'Healthy Recipes', articles: 142 },
  { name: 'Mental Health', articles: 98 },
  { name: 'Natural Remedies', articles: 87 },
  { name: 'Exercise Tips', articles: 76 }
];

export function createPopularTopics() {
  const topicsList = topics.map(topic => `
    <a href="/topics/${topic.name.toLowerCase().replace(' ', '-')}" class="topic-item">
      <span class="topic-name">${topic.name}</span>
      <span class="article-count">${topic.articles} articles</span>
    </a>
  `).join('');

  return `
    <section class="popular-topics">
      <h2>📊 Popular Topics</h2>
      <div class="topics-list">
        ${topicsList}
      </div>
    </section>
  `;
}
