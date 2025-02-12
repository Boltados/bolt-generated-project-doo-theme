export function createAdSpace(position = 'sidebar') {
  const classes = position === 'sidebar' ? 'ad-space ad-space-sidebar' : 'ad-space ad-space-banner';
  
  return `
    <div class="${classes}">
      <div class="ad-label">Advertisement</div>
      <div class="ad-content"></div>
    </div>
  `;
}
