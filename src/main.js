import './styles/base.css'
import './styles/header.css'
import './styles/hero.css'
import './styles/categories.css'
import './styles/featured-article.css'
import './styles/latest-articles.css'
import './styles/trending-now.css'
import './styles/popular-topics.css'
import './styles/newsletter.css'
import './styles/footer.css'
import './styles/ads.css'
import './styles/animations.css'

import { createHeader } from './components/Header'
import { createHero } from './components/Hero'
import { createCategories } from './components/Categories'
import { createFeaturedArticle } from './components/FeaturedArticle'
import { createLatestArticles } from './components/LatestArticles'
import { createTrendingNow } from './components/TrendingNow'
import { createPopularTopics } from './components/PopularTopics'
import { createNewsletter } from './components/Newsletter'
import { createFooter } from './components/Footer'
import { createAdSpace } from './components/AdSpace'

document.addEventListener('DOMContentLoaded', () => {
  const appContainer = document.querySelector('#app');
  if (appContainer) {
    appContainer.innerHTML = `
      ${createHeader()}
      <main>
        ${createHero()}
        <section class="container">
          ${createCategories()}
          ${createFeaturedArticle()}
        </section>
        <section class="container main-content">
          <div class="content-grid">
            <div class="main-column">
              ${createLatestArticles()}
              ${createAdSpace('banner')}
            </div>
            <aside class="sidebar">
              ${createTrendingNow()}
              ${createAdSpace('sidebar')}
              ${createPopularTopics()}
            </aside>
          </div>
        </section>
        ${createNewsletter()}
      </main>
      ${createFooter()}
    `;
  }

  // Add animation classes after content is loaded
  document.querySelector('.hero')?.classList.add('animate-fade-in');
  document.querySelectorAll('.category-card').forEach(card => {
    card.classList.add('animate-scale-in', 'hover-scale');
  });
  document.querySelectorAll('.article-card').forEach((card, index) => {
    card.classList.add('animate-slide-up');
    card.style.animationDelay = `${index * 0.1}s`;
  });
});
