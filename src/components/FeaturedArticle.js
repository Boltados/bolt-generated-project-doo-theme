export function createFeaturedArticle() {
  const base_uri = window.location.origin + '/wp-content/themes/doorillio';
  
  return `
    <div class="featured-article">
      <img src="${base_uri}/images/balanced-nutrition.jpg" alt="Featured Article Image" class="featured-image">
      <div class="featured-content">
        <h2>10 Science-Backed Ways to Improve Your Health</h2>
        <p>Discover evidence-based strategies to enhance your physical and mental well-being.</p>
      </div>
    </div>
  `;
}
