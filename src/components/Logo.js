export function createLogo(color = 'var(--primary-color)') {
  const base_uri = window.location.origin + '/wp-content/themes/doorillio';
  
  return `
    <img src="${base_uri}/assets/images/logo.svg" alt="doorillio" width="32" height="32" style="fill: ${color};">
  `;
}
