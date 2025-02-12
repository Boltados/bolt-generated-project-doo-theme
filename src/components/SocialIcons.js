export function createSocialIcon(platform) {
  const base_uri = window.location.origin + '/wp-content/themes/doorillio';
  
  const socialIcons = {
    twitter: `<img src="${base_uri}/assets/images/social/twitter.svg" alt="Twitter" width="24" height="24">`,
    linkedin: `<img src="${base_uri}/assets/images/social/linkedin.svg" alt="LinkedIn" width="24" height="24">`,
    facebook: `<img src="${base_uri}/assets/images/social/facebook.svg" alt="Facebook" width="24" height="24">`,
    medium: `<img src="${base_uri}/assets/images/social/medium.svg" alt="Medium" width="24" height="24">`
  };

  return socialIcons[platform] || '';
}
